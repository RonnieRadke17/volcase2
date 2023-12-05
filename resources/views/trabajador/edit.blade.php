
@extends('layouts.app')

@section('content')
    <!-- resources/views/trabajos/edit.blade.php -->

<h1>Editar Trabajo</h1>

<form action="{{ route('trabajador.update', ['trabajador' => $trabajo->id]) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="comentario">Comentario:</label>
    <input type="text" id="comentario" name="comentario" value="{{ $trabajo->comentario }}" required>

    <label for="status">Estado:</label>
    <select id="status" name="status" required>
        <option value="Asignada" {{ $trabajo->status === 'Asignada' ? 'selected' : '' }}>Asignada</option>
        <option value="Completada" {{ $trabajo->status === 'Completada' ? 'selected' : '' }}>Completada</option>
    </select>

    <button type="submit">Actualizar Trabajo</button>
</form>

@endsection