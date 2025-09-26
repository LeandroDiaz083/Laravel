@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle del Usuario</h1>
    <p><strong>ID:</strong> {{ $usuario->id_usuario }}</p>
    <p><strong>Rol:</strong> {{ $usuario->rol->rol }}</p>
    <p><strong>Nombre:</strong> {{ $usuario->nombre }}</p>
    <p><strong>Apellido:</strong> {{ $usuario->apellido }}</p>
    <p><strong>Email:</strong> {{ $usuario->email }}</p>
    <p><strong>Teléfono:</strong> {{ $usuario->telefono }}</p>
    <p><strong>Dirección:</strong> {{ $usuario->direccion }}</p>
    <p><strong>Creado en:</strong> {{ $usuario->created_at }}</p>
    <p><strong>Actualizado en:</strong> {{ $usuario->updated_at }}</p>
    <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
