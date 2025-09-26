<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/stylesganancias.css') }}">
    <title>Tus ganancias</title>
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
  <div class="linea"></div>

  <main class="contenedor-ganancias">
    <div class="resumen">
      <h2>Total de ganancias :</h2>
      <p class="monto">600.000.00 COP</p>
      <p>Historial de ganancias :</p>
    </div>

<div class="lista-pagos">
  <div class="pago">
    <div class="avatar"></div>
    <div class="info-pago">
      <div class="nombre-fecha">
        <strong>nebulanomad</strong> <span class="fecha">23d</span>
      </div>
      <p>Pago del servicio : <span class="monto-servicio">$300.000 COP</span></p>
    </div>
  </div>

  <div class="pago">
    <div class="avatar"></div>
    <div class="info-pago">
      <div class="nombre-fecha">
        <strong>emberecho</strong> <span class="fecha">5d</span>
      </div>
      <p>Pago del servicio : <span class="monto-servicio">$100.000 COP</span></p>
    </div>
  </div>

  <div class="pago">
    <div class="avatar"></div>
    <div class="info-pago">
      <div class="nombre-fecha">
        <strong>starryskies23</strong> <span class="fecha">1 mes</span>
      </div>
      <p>Pago del servicio : <span class="monto-servicio">$100.000 COP</span></p>
    </div>
  </div>
    <div class="pago">
    <div class="avatar"></div>
    <div class="info-pago">
      <div class="nombre-fecha">
        <strong>starryskies23</strong> <span class="fecha">15d</span>
      </div>
      <p>Pago del servicio : <span class="monto-servicio">$100.000 COP</span></p>
    </div>
  </div>
    <div class="pago">
    <div class="avatar"></div>
    <div class="info-pago">
      <div class="nombre-fecha">
        <strong>starryskies23</strong> <span class="fecha">1d</span>
      </div>
      <p>Pago del servicio : <span class="monto-servicio">$100.000 COP</span></p>
    </div>
  </div>
    <div class="pago">
    <div class="avatar"></div>
    <div class="info-pago">
      <div class="nombre-fecha">
        <strong>starryskies23</strong> <span class="fecha">25d</span>
      </div>
      <p>Pago del servicio : <span class="monto-servicio">$100.000 COP</span></p>
    </div>
  </div>
</div>

  </main>
    
</body>
</html>