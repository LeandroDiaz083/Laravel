@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Método de Pago</h1>
    <form action="{{ route('metodospago.update', $metodo->id_metod_pago) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Forma de Pago</label>
            <input type="text" name="formas_pago" class="form-control" value="{{ $metodo->formas_pago }}" maxlength="20" required>
        </div>
        <button class="btn btn-primary">Actualizar</button>
        <a href="{{ route('metodospago.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection
