<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/prestador.css') }}">
    <title>JobXpress - Prestador</title>
</head>
<body>
    <!-- NAV BAR -->
    <header class="navbar">
        <div class="logo">JobXpress</div>
        <nav class="nav-links">
            <a href="{{ url('prestador') }}">Inicio</a>
            <a href="{{ url('servicioprestador') }}">Tu servicio</a>
            <a href="{{ url('perfilprestador') }}">Tu Perfil</a>
            <a href="{{ url('chatprestador') }}">Chat</a>
            <a href="{{ url('gananciasprestador') }}">Tus ganancias</a>
            <a href="{{ url('valoracionespres') }}">Tus valoraciones</a>
            <a href="{{ url('agendapres') }}">Mi agenda</a>
            <a href="{{ url('dashboardprestador') }}">Dashboard</a>
            <a href="{{ url('login') }}">Cerrar sesión</a>
        </nav>
    </header>

    <!-- CONTENIDO PRINCIPAL -->
    <main class="contenido">
        <h1>Bienvenido, Prestador</h1>
        <p>
            Gestiona tus servicios, consulta tus ganancias, organiza tu agenda y mantén el control total desde tu panel.
            <strong>JobXpress</strong> te conecta con clientes de forma rápida y segura.
        </p>
    </main>
</body>
</html>
