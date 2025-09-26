@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Servicio</h1>
    <form action="{{ route('servicio.update', $servicio->id_servicio) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ $servicio->nombre }}" required>
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" step="0.01" name="precio" class="form-control" value="{{ $servicio->precio }}" required>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" class="form-control" required>{{ $servicio->descripcion }}</textarea>
        </div>
        <div class="mb-3">
            <label for="id_categoria" class="form-label">Categoría</label>
            <select name="id_categoria" class="form-control" required>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id_categoria }}" {{ $servicio->id_categoria == $categoria->id_categoria ? 'selected' : '' }}>
                        {{ $categoria->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-primary">Actualizar</button>
        <a href="{{ route('servicio.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection
