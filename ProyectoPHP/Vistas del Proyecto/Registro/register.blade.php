@extends('layouts.app')

@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<div class="container">
    <h2>Registro</h2>
    <form method="POST" action="{{ route('register.submit') }}">
        @csrf
        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Apellido</label>
            <input type="text" name="apellido" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Contraseña</label>
            <input type="password" name="contrasena" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Teléfono</label>
            <input type="text" name="telefono" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Dirección</label>
            <input type="text" name="direccion" class="form-control" required>
        </div>
        <!-- 🔹 Selector de Rol (cliente o prestador) -->
        <div class="mb-3">
            <label>Rol</label>
            <select name="id_rol" class="form-control" required>
                <option value="1">Cliente</option>
                <option value="2">Prestador</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Registrarme</button>
    </form>

    <!-- 🔹 Enlace al login -->
    <div class="mt-3 text-center">
        <p>¿Ya tienes cuenta?
            <a href="{{ route('login') }}">Inicia sesión aquí</a>
        </p>
    </div>
</div>
@endsection