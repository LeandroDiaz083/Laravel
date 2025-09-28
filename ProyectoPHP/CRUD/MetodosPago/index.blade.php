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
    <h1>Listado de Métodos de Pago</h1>
    <a href="{{ route('metodospago.create') }}" class="btn btn-primary mb-3">Nuevo Método</a>

    {{-- Filtros --}}
    <form method="GET" action="{{ route('metodospago.index') }}" class="mb-4">
        <div class="row g-2">
            <div class="col-md-2">
                <input type="number" name="id" value="{{ request('id') }}" class="form-control" placeholder="ID">
            </div>
            <div class="col-md-4">
                <input type="text" name="formas_pago" value="{{ request('formas_pago') }}" class="form-control" placeholder="Forma de Pago">
            </div>
            <div class="col-md-4 d-flex gap-2">
                <button type="submit" class="btn btn-success">Filtrar</button>
                <a href="{{ route('metodospago.index') }}" class="btn btn-secondary">Limpiar</a>
            </div>
        </div>
    </form>

    @if(session('success'))
        <div class="alert alert-success mt-2">{{ session('success') }}</div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Forma de Pago</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($metodos as $metodo)
            <tr>
                <td>{{ $metodo->id_metod_pago }}</td>
                <td>{{ $metodo->formas_pago }}</td>
                <td>
                    <a href="{{ route('metodospago.show', $metodo->id_metod_pago) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('metodospago.edit', $metodo->id_metod_pago) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('metodospago.destroy', $metodo->id_metod_pago) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar este método de pago?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3" class="text-center">No se encontraron métodos de pago</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
