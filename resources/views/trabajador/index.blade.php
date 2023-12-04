<!-- resources/views/calendario/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Calendario del Usuario</h1>

    @if ($calendarios)
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fecha</th>
                    <th>Hora de Entrada</th>
                    <th>Hora de Salida</th>
                    <!-- Agrega más columnas según sea necesario -->
                </tr>
            </thead>
            <tbody>
                @foreach ($calendarios as $calendario)
                    <tr>
                        <td>{{ $calendario->id }}</td>
                        <td>{{ $calendario->fecha }}</td>
                        <td>{{ $calendario->hora_Entrada }}</td>
                        <td>{{ $calendario->hora_Salida }}</td>
                        <!-- Agrega más celdas según sea necesario -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay eventos en el calendario.</p>
    @endif
@endsection
