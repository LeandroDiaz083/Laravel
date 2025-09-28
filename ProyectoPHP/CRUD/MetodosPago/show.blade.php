@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle del Método de Pago</h1>
    <p><strong>ID:</strong> {{ $metodo->id_metod_pago }}</p>
    <p><strong>Forma de Pago:</strong> {{ $metodo->formas_pago }}</p>
    <a href="{{ route('metodospago.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
