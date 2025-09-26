@extends('layouts.app')

@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<div class="container">
    <h2>Iniciar Sesión</h2>
    <form method="POST" action="{{ route('login.submit') }}">
        @csrf
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required autofocus>
        </div>
        <div class="mb-3">
            <label>Contraseña</label>
            <input type="password" name="contrasena" class="form-control" required>
        </div>
        <!-- 🔹 Selector de Rol -->
        <div class="mb-3">
            <label>Rol</label>
            <select name="rol" class="form-control" required>
                <option value="cliente">Cliente</option>
                <option value="prestador">Prestador</option>
                <option value="admin">Administrador</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</div>
@endsection
