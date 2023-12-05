@extends('layouts.app')

@section('content')
    <h1>Lista de Usuarios</h1>

    @if ($usuarios->count() > 0)
        <ul>
            @foreach ($usuarios as $usuario)
                <li>{{ $usuario->name }} - {{ $usuario->email }}</li>
                <!-- Puedes mostrar más detalles según tus necesidades -->
            @endforeach
        </ul>
    @else
        <p>No hay usuarios registrados.</p>
    @endif
@endsection