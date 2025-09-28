@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle del Pago</h1>
    <p><strong>ID:</strong> {{ $pago->id_pago }}</p>
    <p><strong>Monto:</strong> {{ $pago->monto }}</p>
    <p><strong>Fecha:</strong> {{ $pago->fecha_pago }}</p>
    <p><strong>Método:</strong> {{ $pago->metodoPago->formas_pago }}</p>
    <p><strong>Contratación:</strong> #{{ $pago->contratacion->id_contratacion }}</p>
    <a href="{{ route('pago.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
