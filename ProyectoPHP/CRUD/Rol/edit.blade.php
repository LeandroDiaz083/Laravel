@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Rol</h1>
    <form action="{{ route('rol.update', $rol->id_rol) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="rol" class="form-label">Nombre del Rol</label>
            <input type="text" name="rol" class="form-control" value="{{ $rol->rol }}" required>
        </div>
        <button class="btn btn-primary">Actualizar</button>
        <a href="{{ route('rol.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection
