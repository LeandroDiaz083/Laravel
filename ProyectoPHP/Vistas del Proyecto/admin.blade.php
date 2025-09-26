<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin - JobXpress</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
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

    <!-- Main -->
    <main class="admin-dashboard">
        <h1>Panel de Administración</h1>

        <!-- Tarjetas -->
        <section class="tarjetas">
            <div class="tarjeta">
                <h3>Usuarios registrados</h3>
                <p>856</p>
            </div>
            <div class="tarjeta">
                <h3>Prestadores activos</h3>
                <p>312</p>
            </div>
            <div class="tarjeta">
                <h3>Servicios publicados</h3>
                <p>1.240</p>
            </div>
            <div class="tarjeta">
                <h3>Ganancias totales</h3>
                <p>$12.300.000 COP</p>
            </div>
        </section>

        <!-- Usuarios por rol -->
        <section class="usuarios-por-rol">
            <h3>Usuarios por rol</h3>
            <div class="barra-rol">
                <span>Clientes</span>
                <div class="barra" style="width: 90%"></div>
            </div>
            <div class="barra-rol">
                <span>Prestadores</span>
                <div class="barra" style="width: 70%"></div>
            </div>
            <div class="barra-rol">
                <span>Admins</span>
                <div class="barra" style="width: 20%"></div>
            </div>
        </section>

        <!-- Servicios por semana -->
        <section class="servicios-semana">
            <h3>Servicios contratados por semana</h3>
            <div class="bar-chart">
                <div class="bar" style="--valor: 60%"><span>Lun</span></div>
                <div class="bar" style="--valor: 40%"><span>Mar</span></div>
                <div class="bar" style="--valor: 80%"><span>Mié</span></div>
                <div class="bar" style="--valor: 50%"><span>Jue</span></div>
                <div class="bar" style="--valor: 30%"><span>Vie</span></div>
            </div>
        </section>
    </main>
</body>
</html>
