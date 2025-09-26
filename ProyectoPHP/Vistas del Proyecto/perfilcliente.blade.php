<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Usamos el mismo CSS que en el home -->
    <link rel="stylesheet" href="{{ asset('css/styleperfilcli.css') }}">
    <title>Tu perfil</title>
</head>
<body>
    <!-- 🔹 Navbar -->
    <header class="navbar">
        <div class="logo">JobXpress</div>
        <nav class="nav-links">
            <a href="{{ route('cliente.home') }}">Inicio</a>
            <a href="{{ route('cliente.home') }}#servicios">Servicios</a>
            <a href="{{ route('cliente.perfil') }}">Tu perfil</a>
            <a href="{{ route('cliente.chat') }}">Chat</a>
            <a href="{{ route('cliente.dashboard') }}">Dashboard</a>
            <a href="{{ route('login') }}">Cerrar sesión</a>
        </nav>
    </header>

    <!-- 🔹 Perfil -->
    <section class="perfil">
        <h1>Tu perfil</h1>
        <div class="perfil-card">
            <img src="{{ asset('images/perfil.png') }}" alt="foto de perfil" />
            <h2>Leandro Jesús</h2>
            <p><strong>Email:</strong> leandro@email.com</p>
            <p><strong>Teléfono:</strong> +57 310 123 4567</p>
            <p><strong>Dirección:</strong> Calle 5c 22-15, Bogotá, Colombia</p>
            <p><strong>Rol:</strong> Cliente</p>
        </div>
    </section>
</body>
</html>
