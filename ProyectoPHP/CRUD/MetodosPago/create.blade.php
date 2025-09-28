@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Registrar Método de Pago</h1>
    <form action="{{ route('metodospago.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Forma de Pago</label>
            <input type="text" name="formas_pago" class="form-control" maxlength="20" required>
        </div>
        <button class="btn btn-success">Guardar</button>
        <a href="{{ route('metodospago.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection
