<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styledashprestador.css') }}">
    <title>Dashboard</title>
</head>
<body>
    <body>
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

    </div>
  </header>

<main class="dashboard-layout">
  <div class="paneles-izquierda">
    <div class="panel">
      <h3>Servicios activos</h3>
      <p>3 servicios publicados</p>
    </div>
    <div class="panel">
      <h3>Ganancias (junio)</h3>
      <p>$450.000 COP</p>
    </div>
    <div class="panel">
      <h3>Reseñas promedio</h3>
      <p>4.8 ★</p>
    </div>
    <div class="panel">
      <h3>Próximas citas</h3>
      <p>2 agendadas esta semana</p>
    </div>
  </div>

  <div class="graficos">
    <h2>Ganancias semanales</h2>
    <div class="bar-chart">
      <div class="bar" style="--valor: 80%"><span>Lun</span></div>
      <div class="bar" style="--valor: 65%"><span>Mar</span></div>
      <div class="bar" style="--valor: 45%"><span>Mié</span></div>
      <div class="bar" style="--valor: 90%"><span>Jue</span></div>
      <div class="bar" style="--valor: 60%"><span>Vie</span></div>
    </div>

    <h2>Resumen de reseñas</h2>
    <div class="resena-chart">
      <div class="resena-bar"><span>5★</span><div class="barra" style="margin-right: 20px; height: 5px;"></div></div>
      <div class="resena-bar"><span>4★</span><div class="barra" style="margin-right: 60px; height: 5px;"></div></div>
      <div class="resena-bar"><span>3★</span><div class="barra" style="margin-right: 130px; height: 5px;"></div></div>
      <div class="resena-bar"><span>2★</span><div class="barra" style="margin-right: 180px; height: 5px;"></div></div>
    </div>
  </div>
</main>


    
</body>
</html>