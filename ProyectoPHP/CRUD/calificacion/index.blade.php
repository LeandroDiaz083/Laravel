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
    <h1>Listado de Calificaciones</h1>
    <a href="{{ route('calificacion.create') }}" class="btn btn-primary mb-3">Nueva Calificación</a>

    {{-- Filtros --}}
    <form method="GET" action="{{ route('calificacion.index') }}" class="mb-4">
        <div class="row">
            <div class="col-md-3">
                <input type="text" name="cliente" value="{{ request('cliente') }}" class="form-control" placeholder="Buscar Cliente">
            </div>
            <div class="col-md-3">
                <input type="text" name="prestador" value="{{ request('prestador') }}" class="form-control" placeholder="Buscar Prestador">
            </div>
            <div class="col-md-2">
                <select name="puntuacion" class="form-control">
                    <option value="">-- Puntuación --</option>
                    @for($i = 1; $i <= 5; $i++)
                        <option value="{{ $i }}" {{ request('puntuacion') == $i ? 'selected' : '' }}>{{ $i }}</option>
                    @endfor
                </select>
            </div>
            <div class="col-md-3">
                <input type="date" name="fecha" value="{{ request('fecha') }}" class="form-control">
            </div>
            <div class="col-md-1">
                <button type="submit" class="btn btn-success">Filtrar</button>
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
                <th>Puntuación</th>
                <th>Comentario</th>
                <th>Cliente</th>
                <th>Prestador</th>
                <th>Contratación</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($calificaciones as $calificacion)
            <tr>
                <td>{{ $calificacion->id_calificacion }}</td>
                <td>{{ $calificacion->puntuacion }}</td>
                <td>{{ $calificacion->comentario }}</td>
                <td>{{ $calificacion->cliente->nombre }} {{ $calificacion->cliente->apellido }}</td>
                <td>{{ $calificacion->prestador->nombre }} {{ $calificacion->prestador->apellido }}</td>
                <td>#{{ $calificacion->contratacion->id_contratacion }}</td>
                <td>{{ $calificacion->fecha_calificacion }}</td>
                <td>
                    <a href="{{ route('calificacion.show', $calificacion->id_calificacion) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('calificacion.edit', $calificacion->id_calificacion) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('calificacion.destroy', $calificacion->id_calificacion) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar esta calificación?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8" class="text-center">No se encontraron calificaciones</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
