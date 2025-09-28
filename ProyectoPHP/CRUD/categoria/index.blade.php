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

<div class="container mt-4">
    <h1 class="mb-4">Listado de Categorías</h1>

    {{-- Formulario de búsqueda --}}
    <form method="GET" action="{{ route('categoria.index') }}" class="filtro-form">
        <div class="d-flex flex-column gap-2">
            <input type="text" name="nombre" value="{{ request('nombre') }}" class="form-control" placeholder="Nombre de la categoría">
            <input type="text" name="descripcion" value="{{ request('descripcion') }}" class="form-control" placeholder="Descripción">
        </div>
        <div class="mt-3 d-flex flex-wrap gap-2">
            <button type="submit" class="btn btn-primary">Buscar</button>
            <a href="{{ route('categoria.index') }}" class="btn btn-secondary">Limpiar</a>
            <a href="{{ route('categoria.create') }}" class="btn btn-success">+ Nueva Categoría</a>
        </div>
    </form>

    {{-- Mensaje de éxito --}}
    @if(session('success'))
        <div class="alert alert-success mt-2">{{ session('success') }}</div>
    @endif

    {{-- Tabla --}}
    <table class="table table-bordered table-hover mt-3">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->id_categoria }}</td>
                    <td>{{ $categoria->nombre }}</td>
                    <td>{{ $categoria->descripcion }}</td>
                    <td>
                        <a href="{{ route('categoria.show', $categoria->id_categoria) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('categoria.edit', $categoria->id_categoria) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('categoria.destroy', $categoria->id_categoria) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar esta categoría?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No se encontraron categorías</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
