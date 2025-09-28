@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Registrar Pago</h1>
    <form action="{{ route('pago.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Método de Pago</label>
            <select name="id_metodo_pago" class="form-control" required>
                @foreach($metodos as $metodo)
                    <option value="{{ $metodo->id_metod_pago }}">{{ $metodo->formas_pago }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Monto</label>
            <input type="number" step="0.01" name="monto" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha de Pago</label>
            <input type="date" name="fecha_pago" class="form-control" required>
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
        <a href="{{ route('pago.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection
