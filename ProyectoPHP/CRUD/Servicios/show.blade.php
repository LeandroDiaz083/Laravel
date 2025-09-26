@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle del Servicio</h1>
    <p><strong>ID:</strong> {{ $servicio->id_servicio }}</p>
    <p><strong>Nombre:</strong> {{ $servicio->nombre }}</p>
    <p><strong>Precio:</strong> ${{ number_format($servicio->precio, 2) }}</p>
    <p><strong>Descripción:</strong> {{ $servicio->descripcion }}</p>
    <p><strong>Categoría:</strong> {{ $servicio->categoria->nombre }}</p>
    <a href="{{ route('servicio.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
