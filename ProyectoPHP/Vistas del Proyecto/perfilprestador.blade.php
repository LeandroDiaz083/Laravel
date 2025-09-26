<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/stylesperfilprestador.css') }}">
    <title>Tu perfil</title>
</head>
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
    </nav>
  </header>
      <section class="perfil">
    <h1>Tu perfil</h1>
    <div class="perfil-card">
      <img src="img/gratis-png-abrir-perfil-de-usuario-contenido-de-facebook-facebook-removebg-preview.png" alt="foto de perfil" />
      <h2>David Oliveros</h2>
      <p><strong>Email:</strong> oliveros@gmail.com</p>
      <p><strong>Teléfono:</strong> 3107945204</p>
      <p><strong>Dirección:</strong> dig 30j</p>
      <p><strong>Rol:</strong> Prestador de servicios</p>
    </div>
  </section>
    
</body>
</html>