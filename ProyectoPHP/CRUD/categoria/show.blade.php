@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle de la Categoría</h1>
    <p><strong>ID:</strong> {{ $categoria->id_categoria }}</p>
    <p><strong>Nombre:</strong> {{ $categoria->nombre }}</p>
    <p><strong>Descripción:</strong> {{ $categoria->descripcion }}</p>
    <a href="{{ route('categoria.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
