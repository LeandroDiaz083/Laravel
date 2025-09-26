<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styleservicioprestador.css') }}">
    <title>Tu servicio</title>
</head>
<body>
      <header class="navbar">
    <div class="logo">JobXpress</div>
    <nav class="nav-links">
      <a href="{{ url('/prestador#inicio') }}">Inicio</a>
<a href="{{ url('/servicioprestador') }}">Tu servicio</a>
<a href="{{ url('/perfilprestador') }}">Tu Perfil</a>
<a href="{{ url('/chatprestador') }}">Chat</a>
<a href="{{ url('/gananciasprestador') }}">Tus ganancias</a>
<a href="{{ url('/valoracionespres') }}">Tus valoraciones</a>
<a href="{{ url('/agendapres') }}">Mi agenda</a>
<a href="{{ url('/dashboardprestador') }}">Dashboard</a>
<a href="{{ url('/login') }}">Cerrar sesión</a>

    </nav>
  </header>

  <div class="linea"></div>

  <main>
    <div class="contenedor-servicios">
      <div class="tarjeta-servicio">
        <h2>Detalles del servicio que prestas</h2>
        <p>
          Electricista especializado en instalaciones residenciales y mantenimiento de redes eléctricas. Experiencia con sistemas modernos y atención a emergencias.
        </p>
      </div>
      <div class="tarjeta-servicio">
        <h2>Validación de habilidades</h2>
        <p>
          Certificado en electricidad industrial y domiciliaria. Documentación validada por el equipo JobXpress.
        </p>
      </div>
    </div>
  </main>
    
</body>
</html>