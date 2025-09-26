<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reporte de Servicios</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            color: #333;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #2c3e50;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid #444;
        }
        th {
            background: #2c3e50;
            color: white;
            padding: 6px;
        }
        td {
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Reporte de Servicios</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Categoría</th>
            </tr>
        </thead>
        <tbody>
            @foreach($servicios as $servicio)
                <tr>
                    <td>{{ $servicio->id_servicio }}</td>
                    <td>{{ $servicio->nombre }}</td>
                    <td>{{ $servicio->descripcion }}</td>
                    <td>${{ number_format($servicio->precio, 0, ',', '.') }}</td>
                    <td>{{ $servicio->categoria->nombre ?? 'Sin categoría' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
