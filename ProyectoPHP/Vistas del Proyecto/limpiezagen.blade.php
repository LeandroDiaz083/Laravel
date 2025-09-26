<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/stylesplomeria.css') }}">
    <title>Limpieza General</title>
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
        <h1>Limpieza General</h1>
        <p>Profesionales disponibles para ayudarte con la limpieza general de tu hogar, oficina o negocio.</p>

        <div class="tarjetas-usuarios">
            @foreach(range(1,9) as $i)
                <div class="usuario">
                    <img src="{{ asset('img/prestador'.$i.'.jpg') }}" alt="Imagen prestador {{ $i }}">
                    <div class="info">
                        <h3>Prestador {{ $i }}</h3>
                        <p>
                            @switch($i)
                                @case(1) Realizo limpieza completa de casas y apartamentos, incluyendo pisos, baños, cocinas y habitaciones. Uso productos adecuados para cada superficie y garantizo un ambiente fresco, ordenado y libre de polvo. @break
                                @case(2) Ofrezco limpieza profesional de oficinas, escritorios, equipos y espacios comunes. Mantengo el orden y la higiene en tu ambiente de trabajo, cuidando cada detalle para ofrecer una imagen impecable. @break
                                @case(3) Experta en limpieza de baños y cocinas con enfoque en desinfección profunda. Elimino manchas, sarro, grasa y residuos difíciles con productos seguros. Ideal para mantener zonas sensibles totalmente higienizadas. @break
                                @case(4) Me especializo en limpieza posobra o posmudanza. Retiro polvo, residuos de construcción, manchas de pintura y organizo el espacio para dejarlo listo para habitar. Trabajo con rapidez y eficiencia. @break
                                @case(5) Brindo limpieza detallada de muebles, colchones, tapicerías y alfombras. Uso productos adecuados para cada material, eliminando suciedad, olores y alérgenos, cuidando la vida útil de tus pertenencias. @break
                                @case(6) Realizo limpieza ecológica con productos biodegradables y no tóxicos. Ideal para hogares con niños, mascotas o personas alérgicas. Mantengo tus espacios limpios sin afectar tu salud ni el medio ambiente. @break
                                @case(7) Atiendo servicios de limpieza por horas o por días según tu necesidad. Ideal para mantener tu hogar o negocio en orden sin compromisos fijos. Trabajo responsable y discreto, con total confianza. @break
                                @case(8) Ofrezco limpieza de vidrios, ventanas, espejos y superficies delicadas. Garantizo resultados brillantes y sin marcas. También hago mantenimiento de persianas y marcos. Servicio cuidadoso y preciso. @break
                                @case(9) Me dedico a la limpieza general de espacios residenciales y comerciales. Trabajo con dedicación para que cada rincón quede reluciente. Me adapto a tus necesidades y horarios, siempre con responsabilidad y buen trato. @break
                            @endswitch
                        </p>
                        <p>
                            @switch($i)
                                @case(1) 🕒 Lunes a viernes, 10:00 a.m. – 6:00 p.m.<br>📅 Disponible para citas programadas. @break
                                @case(2) 🕒 Lunes a sábado, 7:00 a.m. – 5:00 p.m.<br>📅 Atención el mismo día si reservas antes de las 12 p.m. @break
                                @case(3) 🕒 Lunes a viernes, 8:00 a.m. – 6:00 p.m.<br>📅 Requiere agendamiento con al menos 1 día de anticipación. @break
                                @case(4) 🕒 Disponible 24/7<br>📅 Respuesta en menos de 1 hora para emergencias. @break
                                @case(5) 🕒 Lunes a sábado, 9:00 a.m. – 4:00 p.m.<br>📅 Turnos programados en la mañana. @break
                                @case(6) 🕒 Lunes a viernes, 8:00 a.m. – 5:30 p.m.<br>📅 Agenda semanal flexible. @break
                                @case(7) 🕒 Lunes a sábado, 7:30 a.m. – 6:00 p.m.<br>📅 Atención programada o visitas el mismo día según zona. @break
                                @case(8) 🕒 Martes a sábado, 9:00 a.m. – 5:00 p.m.<br>📅 Se debe agendar con al menos 24 horas. @break
                                @case(9) 🕒 Lunes a domingo, 6:00 a.m. – 10:00 p.m.<br>📅 Atención inmediata para destaponamientos. @break
                            @endswitch
                        </p>
                        <a href="{{ route('limpiezagen') }}"><button>Ver perfil</button></a>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>
