@extends('layouts.app')

@section('content')
    <h1>Trabajos Asignados</h1>

    @foreach ($trabajosAsignados as $trabajo)
        <div>
            <p>Trabajo: {{ $trabajo->trabajo }}</p>
            <p>Descripción: {{ $trabajo->descripcion }}</p>
            <!-- Agrega más detalles según sea necesario -->
        </div>
    @endforeach
@endsection