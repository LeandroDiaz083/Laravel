<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/stylechatcli.css') }}">
    <title>Chat</title>
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

  <main class="chat-container">
    <aside class="chat-list">
      <div class="chat-preview">
        <strong>starryskies23</strong>
        <p>El valor del servicio seria...</p>
      </div>
      <div class="chat-preview">
        <strong>nebulanomad</strong>
        <p>No me encuentro disponible.</p>
      </div>
      <div class="chat-preview">
        <strong>emberecho</strong>
        <p>El servicio consta de...</p>
      </div>
      <div class="chat-preview">
        <strong>lunavoyager</strong>
        <p>Con mucho gusto</p>
      </div>
      <div class="chat-preview">
        <strong>shadowlynx</strong>
        <p>En donde se encuentra ubicado</p>
      </div>
    </aside>

    <section class="chat-conversacion">
      <div class="mensaje mensaje-remoto">Hola, ¿puedes ayudarme con el servicio?</div>
      <div class="mensaje mensaje-local">Claro, dime qué necesitas exactamente.</div>
      <div class="mensaje mensaje-remoto">Tengo una fuga en la cocina.</div>
      <div class="mensaje mensaje-local">Entiendo. ¿Te parece bien mañana en la mañana?</div>

      <div class="mensaje-input">
        <input type="text" placeholder="Escribe un mensaje...">
        <button>Enviar</button>
      </div>
    </section>
  </main>
    
</body>
</html>