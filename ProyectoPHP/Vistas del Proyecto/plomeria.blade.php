<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/stylesplomeria.css') }}">
    <title>Plomería</title>
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
        <h1>Plomería</h1>
        <p>Profesionales disponibles para ayudarte con instalaciones, reparaciones y soluciones hidráulicas en tu hogar o negocio.</p>

        <div class="tarjetas-usuarios">
            @foreach(range(1,9) as $i)
            <div class="usuario">
                <img src="{{ asset('img/prestador'.$i.'.jpg') }}" alt="Prestador {{ $i }}">
                <div class="info">
                    <h3>Prestador {{ $i }}</h3>
                    <p>
                        @switch($i)
                            @case(1) Soy técnico en plomería con más de 7 años de experiencia solucionando filtraciones, cambios de grifería, limpieza de desagües y mantenimiento de sistemas hidráulicos. Trabajo con puntualidad, limpieza y garantía de satisfacción. @break
                            @case(2) Realizo instalaciones completas de tuberías en cocinas, baños, lavaderos y jardines. También atiendo remodelaciones y asesoría para ahorro de agua. Trabajo con materiales certificados y cumplo con normas de seguridad. @break
                            @case(3) Ofrezco atención inmediata en casos de fugas, rebosamientos, grifos rotos o taponamientos. Equipado con herramientas profesionales para resolver problemas al instante. Cubro gran parte de la ciudad. @break
                            @case(4) Experta en localizar y reparar filtraciones no visibles que generan humedad en techos o paredes. También realizo ajustes y cambios en sanitarios, duchas, lavamanos y lavaplatos. @break
                            @case(5) Me especializo en la conexión correcta y segura de electrodomésticos y dispositivos que requieren entrada/salida de agua. También realizo mantenimiento preventivo. @break
                            @case(6) Brindo servicio técnico especializado en diagnóstico y renovación de sistemas hidráulicos en estructuras antiguas. Trabajo con precisión, respetando instalaciones existentes y ofreciendo soluciones duraderas. @break
                            @case(7) Realizo cambio e instalación de grifos, duchas, lavamanos y accesorios con acabados finos. Ideal para remodelaciones y ajustes estéticos en baños y cocinas. @break
                            @case(8) Equipo especializado para eliminar obstrucciones en lavaplatos, duchas y sanitarios. Servicio rápido y eficiente sin dañar la instalación. @break
                            @case(9) Resuelvo filtraciones, válvulas defectuosas y sanitarios que no descargan correctamente. También realizo cambio de empaques y sellado profesional para evitar daños por humedad. @break
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
                    <a href="{{ route('plomeria') }}"><button>Ver perfil</button></a>
                </div>
            </div>
            @endforeach
        </div>
    </main>
</body>
</html>
