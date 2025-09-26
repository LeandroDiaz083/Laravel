@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle del Rol</h1>
    <p><strong>ID:</strong> {{ $rol->id_rol }}</p>
    <p><strong>Nombre:</strong> {{ $rol->rol }}</p>
    <a href="{{ route('rol.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
