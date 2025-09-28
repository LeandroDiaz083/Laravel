@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Categoría</h1>
    <form action="{{ route('categoria.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" required maxlength="20">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" class="form-control" required></textarea>
        </div>
        <button class="btn btn-success">Guardar</button>
        <a href="{{ route('categoria.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection
