<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styledashcli.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Dashboard</title>
</head>
<body>
    <!-- Navbar -->
    <header class="navbar">
        <div class="logo">JobXpress</div>
        <nav class="nav-links">
            <a href="{{ route('cliente.home') }}">Inicio</a>
            <a href="{{ route('cliente.home') }}#servicios">Servicios</a>
            <a href="{{ route('cliente.perfil') }}">Tu perfil</a>
            <a href="{{ route('cliente.chat') }}">Chat</a>
            <a href="{{ route('cliente.dashboard') }}">Dashboard</a>

            <!-- 🔹 Cerrar sesión seguro -->
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
               Cerrar sesión
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </nav>
    </header>

    <!-- Contenido Principal -->
    <main class="main-content">
        <!-- Header -->
        <header class="dashboard-header">
            <div class="header-left">
                <h1>Tu Dashboard</h1>
                <p>Un resumen de tus estadísticas</p>
            </div>
        </header>

        <!-- Cards de Resumen -->
        <section class="summary-cards">
            <div class="card">
                <div class="card-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="card-info">
                    <h3>Servicios Totales</h3>
                    <p class="number">12</p>
                    <p class="trend positive">+8% <span>vs mes anterior</span></p>
                </div>
            </div>
            <div class="card">
                <div class="card-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="card-info">
                    <h3>Servicios Completados</h3>
                    <p class="number">9</p>
                    <p class="trend positive">+12% <span>vs mes anterior</span></p>
                </div>
            </div>
            <div class="card">
                <div class="card-icon">
                    <i class="fas fa-times-circle"></i>
                </div>
                <div class="card-info">
                    <h3>Servicios Cancelados</h3>
                    <p class="number">3</p>
                    <p class="trend negative">-5% <span>vs mes anterior</span></p>
                </div>
            </div>
        </section>

        <!-- Contenedor de Gráficos -->
        <section class="charts-container">
            <div class="chart-wrapper">
                <h2>Servicios por categoría</h2>
                <canvas id="usersChart"></canvas>
            </div>
            <div class="chart-wrapper">
                <h2>Frecuencia mensual</h2>
                <canvas id="salesChart"></canvas>
            </div>
            <div class="chart-wrapper wide">
                <h2>Resumen anual</h2>
                <canvas id="trendsChart"></canvas>
            </div>
        </section>
    </main>
  
    <script src="{{ asset('dashboard/script.js') }}"></script>
</body>
</html>
