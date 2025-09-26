<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/stylevaloraciones.css') }}">
    <title>Valoraciones</title>
</head>
<body>
  <nav class="navbar">
    <div class="logo">JobXpress</div>
    <div class="nav-links">
      <a href="{{ url('/prestador') }}">Inicio</a>
<a href="{{ url('/servicioprestador') }}">Tu servicio</a>
<a href="{{ url('/perfilprestador') }}">Tu Perfil</a>
<a href="{{ url('/chatprestador') }}">Chat</a>
<a href="{{ url('/gananciasprestador') }}">Tus ganancias</a>
<a href="{{ url('/valoracionespres') }}">Tus valoraciones</a>
<a href="{{ url('/agendapres') }}">Mi agenda</a>
<a href="{{ url('/dashboardprestador') }}">Dashboard</a>
<a href="{{ url('/login') }}">Cerrar sesión</a>

    </div>
  </nav>

  <div class="contenedor-valoraciones">
    <p>Tienes una valoración promedio de:</p>
    <div class="estrellas grandes">★★★★★</div>

    <p>Haz realizado un total de <strong>43 servicios</strong><br>
    en los cuales haz recibido:</p>

    <p><strong>32 reseñas de:</strong><br><span class="estrellas">★★★★★</span></p>
    <p><strong>4 reseñas de:</strong><br><span class="estrellas">★★★★☆</span></p>
    <p><strong>5 reseñas de:</strong><br><span class="estrellas">★★★☆☆</span></p>
    <p><strong>2 reseñas de:</strong><br><span class="estrellas">★★☆☆☆</span></p>
  </div>
    
</body>
</html>