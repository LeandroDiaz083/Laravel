<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/stylesplomeria.css') }}">
    <title>Carpintería</title>
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
        <h1>Carpintería</h1>
        <p>Profesionales disponibles para ayudarte con la fabricación, instalación y reparación de muebles, puertas, closets y todo tipo de soluciones en madera para tu hogar o negocio.</p>

        <div class="tarjetas-usuarios">
            @foreach(range(1,9) as $i)
                <div class="usuario">
                    <img src="{{ asset('img/prestador'.$i.'.jpg') }}" alt="Imagen prestador {{ $i }}">
                    <div class="info">
                        <h3>Prestador {{ $i }}</h3>
                        <p>
                            @switch($i)
                                @case(1) Me especializo en crear muebles únicos, hechos a la medida de tus espacios y gustos. Ya sea una mesa, un mueble para TV o un armario, me encanta transformar tus ideas en madera. @break
                                @case(2) Llevo años instalando puertas y ventanas de todo tipo. Me aseguro de que todo quede bien ajustado, seguro y con un acabado impecable. Trabajo tanto madera maciza como materiales combinados. @break
                                @case(3) Diseño e instalo cocinas funcionales y modernas. Me enfoco en aprovechar cada rincón para que tu cocina se vea bien, sea práctica y se adapte a tu estilo de vida. @break
                                @case(4) Me apasiona devolverle la vida a los muebles antiguos. Si tienes algo que parece perdido o desgastado, puedo restaurarlo con mucho cuidado para que vuelva a brillar como antes. @break
                                @case(5) Hago closets y vestieres a medida, con diseños que se ajustan a tus necesidades de espacio y almacenamiento. Me gusta que todo quede organizado y visualmente bonito. @break
                                @case(6) Instalo y doy mantenimiento a pisos en madera natural o laminada. Me gusta dejar todo nivelado, firme y con un acabado fino que resalte cualquier espacio. @break
                                @case(7) Construyo pérgolas, techos y estructuras en madera para exteriores. Si tienes un jardín o terraza, puedo ayudarte a crear un espacio acogedor y resistente al clima. @break
                                @case(8) Trabajo muebles con un estilo rústico y decorativo, ideales para quienes buscan un toque especial en su hogar. Me gusta combinar madera natural con diseño auténtico. @break
                                @case(9) ¿Tienes una puerta que no cierra, una bisagra suelta o un mueble que se está cayendo? Yo soluciono ese tipo de detalles rápido y bien hecho. @break
                            @endswitch
                        </p>
                        <p>
                            @switch($i)
                                @case(1) 🕒 Lunes a domingo, 6:00 a.m. – 10:00 p.m.<br>📅 Atención inmediata para destaponamientos. @break
                                @case(2) 🕒 Martes a sábado, 9:00 a.m. – 5:00 p.m.<br>📅 Se debe agendar con al menos 24 horas. @break
                                @case(3) 🕒 Lunes a sábado, 7:30 a.m. – 6:00 p.m.<br>📅 Atención programada o visitas el mismo día según zona. @break
                                @case(4) 🕒 Lunes a viernes, 8:00 a.m. – 5:30 p.m.<br>📅 Agenda semanal flexible. @break
                                @case(5) 🕒 Lunes a sábado, 9:00 a.m. – 4:00 p.m.<br>📅 Turnos programados en la mañana. @break
                                @case(6) 🕒 Disponible 24/7<br>📅 Respuesta en menos de 1 hora para emergencias. @break
                                @case(7) 🕒 Lunes a viernes, 8:00 a.m. – 6:00 p.m.<br>📅 Requiere agendamiento con al menos 1 día de anticipación. @break
                                @case(8) 🕒 Lunes a sábado, 7:00 a.m. – 5:00 p.m.<br>📅 Atención el mismo día si reservas antes de las 12 p.m. @break
                                @case(9) 🕒 Lunes a viernes, 10:00 a.m. – 6:00 p.m.<br>📅 Disponible para citas programadas. @break
                            @endswitch
                        </p>
                        <a href="{{ route('carpinteria') }}"><button>Ver perfil</button></a>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>
