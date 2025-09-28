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
    <h1>Listado de Pagos</h1>
    <a href="{{ route('pago.create') }}" class="btn btn-primary mb-3">Nuevo Pago</a>

    {{-- Filtros --}}
    <form method="GET" action="{{ route('pago.index') }}" class="mb-4">
        <div class="row g-2">
            <div class="col-md-2">
                <input type="number" step="0.01" name="monto" value="{{ request('monto') }}" class="form-control" placeholder="Monto">
            </div>
            <div class="col-md-2">
                <input type="date" name="fecha" value="{{ request('fecha') }}" class="form-control">
            </div>
            <div class="col-md-3">
                <input type="text" name="metodo" value="{{ request('metodo') }}" class="form-control" placeholder="Método de Pago">
            </div>
            <div class="col-md-2">
                <input type="number" name="contratacion" value="{{ request('contratacion') }}" class="form-control" placeholder="ID Contratación">
            </div>
            <div class="col-md-3 d-flex gap-2">
                <button type="submit" class="btn btn-success">Filtrar</button>
                <a href="{{ route('pago.index') }}" class="btn btn-secondary">Limpiar</a>
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
                <th>Monto</th>
                <th>Fecha</th>
                <th>Método</th>
                <th>Contratación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($pagos as $pago)
            <tr>
                <td>{{ $pago->id_pago }}</td>
                <td>${{ number_format($pago->monto, 2) }}</td>
                <td>{{ $pago->fecha_pago }}</td>
                <td>{{ $pago->metodoPago->formas_pago }}</td>
                <td>#{{ $pago->contratacion->id_contratacion }}</td>
                <td>
                    <a href="{{ route('pago.show', $pago->id_pago) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('pago.edit', $pago->id_pago) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('pago.destroy', $pago->id_pago) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar este pago?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center">No se encontraron pagos</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
