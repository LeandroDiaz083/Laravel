@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Contratación</h1>
    <form action="{{ route('contratacion.update', $contratacion->id_contratacion) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Cliente</label>
            <select name="id_cliente" class="form-control">
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id_usuario }}"
                        {{ $contratacion->id_cliente == $cliente->id_usuario ? 'selected' : '' }}>
                        {{ $cliente->nombre }} {{ $cliente->apellido }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Prestador</label>
            <select name="id_prestador" class="form-control">
                @foreach($prestadores as $prestador)
                    <option value="{{ $prestador->id_usuario }}"
                        {{ $contratacion->id_prestador == $prestador->id_usuario ? 'selected' : '' }}>
                        {{ $prestador->nombre }} {{ $prestador->apellido }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Servicio</label>
            <select name="id_servicio" class="form-control">
                @foreach($servicios as $servicio)
                    <option value="{{ $servicio->id_servicio }}"
                        {{ $contratacion->id_servicio == $servicio->id_servicio ? 'selected' : '' }}>
                        {{ $servicio->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Fecha Solicitud</label>
            <input type="date" name="fecha_solicitud" class="form-control"
                value="{{ old('fecha_solicitud', $contratacion->fecha_solicitud) }}">
        </div>

        <div class="mb-3">
            <label>Fecha Programada</label>
            <input type="date" name="fecha_programada" class="form-control"
                value="{{ old('fecha_programada', $contratacion->fecha_programada) }}">
        </div>

        <div class="mb-3">
            <label>Estado</label>
            <input type="text" name="estado_contratacion" class="form-control"
                value="{{ old('estado_contratacion', $contratacion->estado_contratacion) }}">
        </div>

        <div class="mb-3">
            <label>Observación</label>
            <textarea name="observacion" class="form-control">{{ old('observacion', $contratacion->observacion) }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>
@endsection