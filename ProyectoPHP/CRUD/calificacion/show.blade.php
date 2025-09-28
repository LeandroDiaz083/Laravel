@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle de la Calificación</h1>
    <p><strong>ID:</strong> {{ $calificacion->id_calificacion }}</p>
    <p><strong>Puntuación:</strong> {{ $calificacion->puntuacion }}</p>
    <p><strong>Comentario:</strong> {{ $calificacion->comentario }}</p>
    <p><strong>Fecha:</strong> {{ $calificacion->fecha_calificacion }}</p>
    <p><strong>Cliente:</strong> {{ $calificacion->cliente->nombre }} {{ $calificacion->cliente->apellido }}</p>
    <p><strong>Prestador:</strong> {{ $calificacion->prestador->nombre }} {{ $calificacion->prestador->apellido }}</p>
    <p><strong>Contratación:</strong> #{{ $calificacion->contratacion->id_contratacion }}</p>
    <a href="{{ route('calificacion.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
