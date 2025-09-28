@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Registrar Calificación</h1>
    <form action="{{ route('calificacion.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Puntuación (1-5)</label>
            <input type="number" name="puntuacion" class="form-control" min="1" max="5" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Comentario</label>
            <textarea name="comentario" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha de Calificación</label>
            <input type="date" name="fecha_calificacion" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Cliente</label>
            <select name="id_cliente" class="form-control" required>
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id_usuario }}">{{ $cliente->nombre }} {{ $cliente->apellido }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Prestador</label>
            <select name="id_prestador" class="form-control" required>
                @foreach($prestadores as $prestador)
                    <option value="{{ $prestador->id_usuario }}">{{ $prestador->nombre }} {{ $prestador->apellido }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Contratación</label>
            <select name="id_contratacion" class="form-control" required>
                @foreach($contrataciones as $contrato)
                    <option value="{{ $contrato->id_contratacion }}">#{{ $contrato->id_contratacion }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-success">Guardar</button>
        <a href="{{ route('calificacion.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection
