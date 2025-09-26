@extends('layouts.app')

@section('content')
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

<!-- Navbar -->
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

    <h1 class="mb-4">Gestión de Usuarios</h1>

    {{-- Mensajes de éxito --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Formulario de búsqueda --}}
    <form method="GET" action="{{ route('usuarios.index') }}" class="mb-4">
        <div class="row g-2">
            <div class="col-md-3">
                <input type="text" name="nombre" value="{{ request('nombre') }}" class="form-control" placeholder="Nombre">
            </div>
            <div class="col-md-3">
                <input type="text" name="apellido" value="{{ request('apellido') }}" class="form-control" placeholder="Apellido">
            </div>
            <div class="col-md-3">
                <input type="text" name="email" value="{{ request('email') }}" class="form-control" placeholder="Email">
            </div>
            <div class="col-md-3">
                <input type="text" name="telefono" value="{{ request('telefono') }}" class="form-control" placeholder="Teléfono">
            </div>
        </div>
        <div class="mt-3 d-flex gap-2">
            <button type="submit" class="btn btn-primary">Buscar</button>
            <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Limpiar</a>
            <a href="{{ route('usuarios.pdf', request()->all()) }}" class="btn btn-danger">Exportar PDF</a>
            <a href="{{ route('usuarios.create') }}" class="btn btn-success">+ Nuevo Usuario</a>
        </div>
    </form>

    {{-- Tabla de resultados --}}
    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Rol</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>Creado</th>
                    <th>Actualizado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->id_usuario }}</td>
                        <td>{{ $usuario->rol->rol ?? '-' }}</td>
                        <td>{{ $usuario->nombre }}</td>
                        <td>{{ $usuario->apellido }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>{{ $usuario->telefono }}</td>
                        <td>{{ $usuario->direccion }}</td>
                        <td>{{ $usuario->created_at }}</td>
                        <td>{{ $usuario->updated_at }}</td>
                        <td>
                            <a href="{{ route('usuarios.show', $usuario->id_usuario) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('usuarios.edit', $usuario->id_usuario) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('usuarios.destroy', $usuario->id_usuario) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar este usuario?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="10" class="text-center">No se encontraron usuarios</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
@endsection
