
@extends('layouts.app')

@section('content')
    <h1>Detalles del Trabajo</h1>

    <p>Trabajo: {{ $trabajo->trabajo }}</p>
    <p>Descripción: {{ $trabajo->descripcion }}</p>
    <p>Fecha de Inicio: {{ $trabajo->fecha_Inicio }}</p>
    <p>Fecha de Fin: {{ $trabajo->fecha_Fin }}</p>
    <p>Comentario: {{ $trabajo->comentario }}</p>
    <p>Status: {{ $trabajo->status }}</p>

    <!---debe cambiar el comentario y el status-->
    <a href="{{ route('trabajador.edit', ['trabajador' => $trabajo->id]) }}">Editar</a>
    <!-- Agrega más detalles según tus necesidades -->
@endsection