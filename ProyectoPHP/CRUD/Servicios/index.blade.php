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
    <h1 class="mb-4">Gestión de Servicios</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Formulario de búsqueda --}}
    <form method="GET" action="{{ route('servicio.index') }}" class="mb-4">
        <div class="row g-2">
            <div class="col-md-2">
                <input type="text" name="nombre" value="{{ request('nombre') }}" class="form-control" placeholder="Nombre">
            </div>
            <div class="col-md-2">
                <input type="text" name="descripcion" value="{{ request('descripcion') }}" class="form-control" placeholder="Descripción">
            </div>
            <div class="col-md-2">
                <input type="number" name="precio_min" value="{{ request('precio_min') }}" class="form-control" placeholder="Precio mín">
            </div>
            <div class="col-md-2">
                <input type="number" name="precio_max" value="{{ request('precio_max') }}" class="form-control" placeholder="Precio máx">
            </div>
            <div class="col-md-2">
                <input type="text" name="categoria" value="{{ request('categoria') }}" class="form-control" placeholder="Categoría">
            </div>
        </div>
        <div class="mt-3 d-flex gap-2">
            <button type="submit" class="btn btn-primary">Buscar</button>
            <a href="{{ route('servicio.index') }}" class="btn btn-secondary">Limpiar</a>
            <a href="{{ route('servicio.pdf', request()->all()) }}" class="btn btn-danger">Exportar PDF</a>
            <a href="{{ route('servicio.create') }}" class="btn btn-success">+ Nuevo Servicio</a>
        </div>
    </form>

    {{-- Tabla --}}
    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Categoría</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($servicios as $servicio)
                    <tr>
                        <td>{{ $servicio->id_servicio }}</td>
                        <td>{{ $servicio->nombre }}</td>
                        <td>{{ $servicio->descripcion }}</td>
                        <td>${{ number_format($servicio->precio, 2) }}</td>
                        <td>{{ $servicio->categoria->nombre ?? '-' }}</td>
                        <td>
                            <a href="{{ route('servicio.show', $servicio->id_servicio) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('servicio.edit', $servicio->id_servicio) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('servicio.destroy', $servicio->id_servicio) }}" method="POST" style="display:inline;">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar este servicio?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No se encontraron servicios</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
