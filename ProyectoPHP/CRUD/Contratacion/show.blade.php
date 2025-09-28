@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Contratación</h1>

    <p><strong>Cliente:</strong> {{ $contratacion->cliente->nombre ?? 'N/A' }}</p>
    <p><strong>Prestador:</strong> {{ $contratacion->prestador->nombre ?? 'N/A' }}</p>
    <p><strong>Servicio:</strong> {{ $contratacion->servicio->nombre ?? 'N/A' }}</p>
    <p><strong>Fecha Solicitud:</strong> {{ $contratacion->fecha_solicitud }}</p>
    <p><strong>Fecha Programada:</strong> {{ $contratacion->fecha_programada }}</p>
    <p><strong>Estado:</strong> {{ $contratacion->estado_contratacion }}</p>
    <p><strong>Observación:</strong> {{ $contratacion->observacion }}</p>

    <a href="{{ route('contratacion.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection