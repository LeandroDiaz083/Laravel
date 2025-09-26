<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styleagenda.css') }}">
    <title>Mi agenda</title>
</head>
<body>
    <body>
  <nav class="navbar">
    <div class="logo">JobXpress</div>
    <div class="nav-links">
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
  </nav>

  <div class="contenedor-agenda">
    <div class="calendario" id="calendario"></div>
     <div class="agenda-container">
    <div class="calendar">
      <h2>Junio 2025</h2>
      <div class="days">
        <!-- Días de la semana -->
        <div class="day-name">Lun</div>
        <div class="day-name">Mar</div>
        <div class="day-name">Mié</div>
        <div class="day-name">Jue</div>
        <div class="day-name">Vie</div>
        <div class="day-name">Sáb</div>
        <div class="day-name">Dom</div>

        <!-- Días vacíos antes del 1 de junio (domingo) -->
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="empty"></div>
        <div class="empty"></div>

        <!-- Días del mes -->
        <div class="day">1</div>
        <div class="day">2</div>
        <div class="day">3</div>
        <div class="day">4</div>
        <div class="day">5</div>
        <div class="day">6</div>
        <div class="day">7</div>
        <div class="day">8</div>
        <div class="day">9</div>
        <div class="day">10</div>
        <div class="day">11</div>
        <div class="day">12</div>
        <div class="day">13</div>
        <div class="day">14</div>
        <div class="day">15</div>
        <div class="day">16</div>
        <div class="day">17</div>
        <div class="day">18</div>
        <div class="day">19</div>
        <div class="day">20</div>
        <div class="day">21</div>
        <div class="day">22</div>
        <div class="day">23</div>
        <div class="day">24</div>
        <div class="day">25</div>
        <div class="day">26</div>
        <div class="day">27</div>
        <div class="day">28</div>
        <div class="day">29</div>
        <div class="day">30</div>
      </div>
    </div>
  </div>
  </div>

  <script src="agenda.js"></script>
    
</body>
</html>