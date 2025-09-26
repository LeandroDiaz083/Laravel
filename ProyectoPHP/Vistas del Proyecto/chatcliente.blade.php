<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/stylechatcli.css') }}">
    <title>Chat Cliente</title>
</head>
<body>
    <!-- Navbar igual al perfil -->
    <header class="navbar">
        <div class="logo">JobXpress</div>
        <nav>
            <ul class="nav-links">
                <li><a href="{{ route('cliente.home') }}">Inicio</a></li>
                <li><a href="{{ route('cliente.home') }}#servicios">Servicios</a></li>
                <li><a href="{{ route('cliente.perfil') }}">Tu perfil</a></li>
                <li><a href="{{ route('cliente.chat') }}">Chat</a></li>
                <li><a href="{{ route('cliente.dashboard') }}">Dashboard</a></li>
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                       Cerrar sesión
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
    </header>

    <div class="linea"></div>

    <!-- Contenedor del chat -->
    <main class="chat-container">
        <!-- Lista de contactos -->
        <aside class="chat-list">
            <div class="chat-preview">
                <strong>prestador</strong>
                <p>Hola, ¿en qué puedo ayudarte?</p>
            </div>
            <div class="chat-preview">
                <strong>plomero123</strong>
                <p>Tengo disponibilidad mañana.</p>
            </div>
            <div class="chat-preview">
                <strong>electricistaPro</strong>
                <p>Puedo ayudarte con tu instalación.</p>
            </div>
            <div class="chat-preview">
                <strong>limpiezahogar</strong>
                <p>Disponible hoy en la tarde.</p>
            </div>
            <div class="chat-preview">
                <strong>jardineroXP</strong>
                <p>Tu jardín quedará hermoso.</p>
            </div>
        </aside>

        <!-- Conversación -->
        <section class="chat-conversacion">
            <div class="mensaje mensaje-remoto">Hola, ¿puedes ayudarme con el servicio?</div>
            <div class="mensaje mensaje-local">Hola, sí. ¿Cuál es tu problema?</div>
            <div class="mensaje mensaje-remoto">Tengo una fuga en la cocina.</div>
            <div class="mensaje mensaje-local">Entiendo. ¿Te parece bien mañana en la mañana?</div>

            <div class="mensaje-input">
                <input type="text" id="mensajeInput" placeholder="Escribe un mensaje...">
                <button id="btnEnviar">Enviar</button>
            </div>
        </section>
    </main>

    <script>
        document.getElementById("btnEnviar").addEventListener("click", function() {
            let input = document.getElementById("mensajeInput");
            if (input.value.trim() !== "") {
                let chat = document.querySelector(".chat-conversacion");
                let div = document.createElement("div");
                div.classList.add("mensaje", "mensaje-local");
                div.textContent = input.value;
                chat.insertBefore(div, document.querySelector(".mensaje-input"));
                input.value = "";
            }
        });
    </script>
</body>
</html>
