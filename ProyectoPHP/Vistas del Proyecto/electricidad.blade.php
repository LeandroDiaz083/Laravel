<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/stylesplomeria.css') }}">
    <title>Electricidad</title>
</head>
<body>
    <!-- Navbar -->
    <header class="navbar">
        <div class="logo">JobXpress</div>
        <nav class="nav-links">
            <a href="{{ route('cliente.home') }}">Inicio</a>
            <a href="{{ route('cliente.home') }}">Servicios</a>
            <a href="{{ route('cliente.perfil') }}">Tu perfil</a>
            <a href="{{ route('cliente.chat') }}">Chat</a>
            <a href="{{ route('cliente.dashboard') }}">Dashboard</a>
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" style="background:none;border:none;color:white;cursor:pointer;">Cerrar sesión</button>
            </form>
        </nav>
    </header>

    <!-- Contenido principal -->
    <main class="contenedor">
        <h1>Electricidad</h1>
        <p>Profesionales disponibles para realizar instalaciones, reparaciones eléctricas y soluciones seguras en tu hogar o negocio.</p>

        <div class="tarjetas-usuarios">
            @foreach(range(1,9) as $i)
                <div class="usuario">
                    <img src="{{ asset('img/prestador'.$i.'.jpg') }}" alt="img prestadores">
                    <div class="info">
                        <h3>Prestador {{ $i }}</h3>
                        <p>
                            @switch($i)
                                @case(1) Realizo cableado completo, cambios de tomas, breakers y tableros eléctricos. Trabajo seguro, limpio y con cumplimiento de normas técnicas. @break
                                @case(2) Soluciono problemas en instalaciones internas, conexiones inestables o apagones parciales. Diagnóstico rápido y atención personalizada. @break
                                @case(3) Asesoría e instalación de luminarias LED para hogares y oficinas. Optimizamos tu consumo eléctrico con soluciones modernas y eficientes. @break
                                @case(4) Montaje profesional de lámparas decorativas, apliques, ventiladores de techo y sensores de movimiento. Trabajo estético y seguro. @break
                                @case(5) Instalo tomas de alto voltaje, protecciones térmicas y enchufes especiales para electrodomésticos grandes. Ideal para remodelaciones o mudanzas. @break
                                @case(6) Experta en diseño e implementación de redes eléctricas para negocios, vitrinas, iluminación de exhibición y puntos de venta. @break
                                @case(7) Disponible día y noche para resolver apagones, fusibles quemados o cortocircuitos. Respuesta rápida con herramientas profesionales. @break
                                @case(8) Instalación de sistemas de puesta a tierra para equipos sensibles, computadoras, routers y protección con tomacorrientes especiales. @break
                                @case(9) Implemento interruptores inteligentes, temporizadores y sensores para control de luces y electrodomésticos desde tu celular. @break
                            @endswitch
                        </p>
                        <p>
                            @switch($i)
                                @case(1) 🕒 Lunes a sábado, 7:00 a.m. – 5:00 p.m.<br>📅 Atención el mismo día si reservas antes de las 12 p.m. @break
                                @case(2) 🕒 Lunes a viernes, 8:00 a.m. – 6:00 p.m.<br>📅 Requiere agendamiento con al menos 1 día de anticipación. @break
                                @case(3) 🕒 Disponible 24/7<br>📅 Respuesta en menos de 1 hora para emergencias @break
                                @case(4) 🕒 Lunes a sábado, 9:00 a.m. – 4:00 p.m.<br>📅 Turnos programados en la mañana. @break
                                @case(5) 🕒 Lunes a viernes, 8:00 a.m. – 5:30 p.m.<br>📅 Agenda semanal flexible. @break
                                @case(6) 🕒 Lunes a sábado, 7:30 a.m. – 6:00 p.m.<br>📅 Atención programada o visitas el mismo día según zona. @break
                                @case(7) 🕒 Martes a sábado, 9:00 a.m. – 5:00 p.m.<br>📅 Se debe agendar con al menos 24 horas. @break
                                @case(8) 🕒 Lunes a domingo, 6:00 a.m. – 10:00 p.m.<br>📅 Atención inmediata para destaponamientos. @break
                                @case(9) 🕒 Lunes a viernes, 10:00 a.m. – 6:00 p.m.<br>📅 Disponible para citas programadas. @break
                            @endswitch
                        </p>
                        <a href="{{ route('electricidad') }}"><button>Ver perfil</button></a>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>
