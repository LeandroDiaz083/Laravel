<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reporte de Contrataciones</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #000; padding: 6px; text-align: left; }
        th { background: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Reporte de Contrataciones</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Prestador</th>
                <th>Servicio</th>
                <th>Fecha Solicitud</th>
                <th>Fecha Programada</th>
                <th>Estado</th>
                <th>Observación</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contrataciones as $c)
            <tr>
                <td>{{ $c->id_contratacion }}</td>
                <td>{{ $c->cliente->nombre ?? '---' }}</td>
                <td>{{ $c->prestador->nombre ?? '---' }}</td>
                <td>{{ $c->servicio->nombre ?? '---' }}</td>
                <td>{{ $c->fecha_solicitud }}</td>
                <td>{{ $c->fecha_programada }}</td>
                <td>{{ $c->estado_contratacion }}</td>
                <td>{{ $c->observacion }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>