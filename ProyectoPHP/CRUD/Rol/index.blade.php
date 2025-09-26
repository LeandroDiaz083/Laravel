@extends('layouts.app')

@section('content')

  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<header class="navbar">
    <div class="logo">JobXpress</div>
    <nav class="nav-links">
        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        <a href="{{ route('usuarios.index') }}">Usuarios</a>
        <a href="{{ route('rol.index') }}">Roles</a>
        <a href="{{ route('servicio.index') }}">Servicios</a>
        <a href="{{ route('categoria.index') }}">Categorías</a>
        <a href="{{ route('contratacion.index') }}">Contrataciones</a>
        <a href="{{ route('calificacion.index') }}">Calificaciones</a>
        <a href="{{ route('pago.index') }}">Pagos</a>
        <a href="{{ route('metodospago.index') }}">Métodos de Pago</a>
        <a href="{{ route('login') }}">Salir</a>
    </nav>
</header>
<div class="container">
    <h1>Listado de Roles</h1>
    <a href="{{ route('rol.create') }}" class="btn btn-primary">Nuevo Rol</a>

    @if(session('success'))
        <div class="alert alert-success mt-2">{{ session('success') }}</div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $rol)
            <tr>
                <td>{{ $rol->id_rol }}</td>
                <td>{{ $rol->rol }}</td>
                <td>
                    <a href="{{ route('rol.show', $rol->id_rol) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('rol.edit', $rol->id_rol) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('rol.destroy', $rol->id_rol) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que quieres eliminar este rol?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
