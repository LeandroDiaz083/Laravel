@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Calificación</h1>
    <form action="{{ route('calificacion.update', $calificacion->id_calificacion) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Puntuación (1-5)</label>
            <input type="number" name="puntuacion" class="form-control" min="1" max="5" value="{{ $calificacion->puntuacion }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Comentario</label>
            <textarea name="comentario" class="form-control" required>{{ $calificacion->comentario }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha de Calificación</label>
            <input type="date" name="fecha_calificacion" class="form-control" value="{{ $calificacion->fecha_calificacion }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Cliente</label>
            <select name="id_cliente" class="form-control" required>
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id_usuario }}" {{ $calificacion->id_cliente == $cliente->id_usuario ? 'selected' : '' }}>
                        {{ $cliente->nombre }} {{ $cliente->apellido }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Prestador</label>
            <select name="id_prestador" class="form-control" required>
                @foreach($prestadores as $prestador)
                    <option value="{{ $prestador->id_usuario }}" {{ $calificacion->id_prestador == $prestador->id_usuario ? 'selected' : '' }}>
                        {{ $prestador->nombre }} {{ $prestador->apellido }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Contratación</label>
            <select name="id_contratacion" class="form-control" required>
                @foreach($contrataciones as $contrato)
                    <option value="{{ $contrato->id_contratacion }}" {{ $calificacion->id_contratacion == $contrato->id_contratacion ? 'selected' : '' }}>
                        #{{ $contrato->id_contratacion }}
                    </option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-primary">Actualizar</button>
        <a href="{{ route('calificacion.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection
