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
    <h1>Contrataciones</h1>
    <a href="{{ route('contratacion.create') }}" class="btn btn-primary mb-3">Nueva Contratación</a>
    <a href="{{ route('contratacion.pdf') }}" class="btn btn-danger mb-3">Exportar PDF</a>

    {{-- Filtros --}}
    <form method="GET" action="{{ route('contratacion.index') }}" class="mb-4">
        <div class="row">
            <div class="col-md-3">
                <input type="text" name="cliente" value="{{ request('cliente') }}" class="form-control" placeholder="Buscar Cliente">
            </div>
            <div class="col-md-3">
                <input type="text" name="prestador" value="{{ request('prestador') }}" class="form-control" placeholder="Buscar Prestador">
            </div>
            <div class="col-md-3">
                <input type="text" name="servicio" value="{{ request('servicio') }}" class="form-control" placeholder="Buscar Servicio">
            </div>
            <div class="col-md-2">
                <select name="estado" class="form-control">
                    <option value="">-- Estado --</option>
                    <option value="Pendiente" {{ request('estado') == 'Pendiente' ? 'selected' : '' }}>Pendiente</option>
                    <option value="En Progreso" {{ request('estado') == 'En Progreso' ? 'selected' : '' }}>En Progreso</option>
                    <option value="Finalizado" {{ request('estado') == 'Finalizado' ? 'selected' : '' }}>Finalizado</option>
                    <option value="Cancelado" {{ request('estado') == 'Cancelado' ? 'selected' : '' }}>Cancelado</option>
                </select>
            </div>
            <div class="col-md-1">
                <button type="submit" class="btn btn-success">Filtrar</button>
            </div>
        </div>
    </form>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Prestador</th>
                <th>Servicio</th>
                <th>Fecha Programada</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($contrataciones as $contrato)
            <tr>
                <td>{{ $contrato->id_contratacion }}</td>
                <td>{{ $contrato->cliente->nombre ?? '-' }}</td>
                <td>{{ $contrato->prestador->nombre ?? '-' }}</td>
                <td>{{ $contrato->servicio->nombre ?? '-' }}</td>
                <td>{{ $contrato->fecha_programada }}</td>
                <td>{{ $contrato->estado_contratacion }}</td>
                <td>
                    <a href="{{ route('contratacion.show', $contrato->id_contratacion) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('contratacion.edit', $contrato->id_contratacion) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('contratacion.destroy', $contrato->id_contratacion) }}" method="POST" style="display:inline;"
                        onsubmit="return confirm('¿Está seguro que deseas eliminar esta contratación?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="text-center">No se encontraron contrataciones</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
