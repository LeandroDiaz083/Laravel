@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Rol</h1>
    <form action="{{ route('rol.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="rol" class="form-label">Nombre del Rol</label>
            <input type="text" name="rol" class="form-control" required>
        </div>
        <button class="btn btn-success">Guardar</button>
        <a href="{{ route('rol.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection
