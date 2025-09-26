<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/stylesplomeria.css') }}">
    <title>Soporte Técnico</title>
</head>
<body>
    <!-- Navbar -->
    <header class="navbar">
        <div class="logo">JobXpress</div>
        <nav class="nav-links">
            <a href="{{ route('cliente.home') }}">Inicio</a>
            <a href="{{ route('cliente.home') }}#servicios">Servicios</a>
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
        <h1>Soporte Técnico</h1>
        <p>Profesionales disponibles para ayudarte con computadoras, redes, dispositivos y soluciones tecnológicas a domicilio o de forma remota.</p>

        <div class="tarjetas-usuarios">
            @foreach(range(1,9) as $i)
                <div class="usuario">
                    <img src="{{ asset('img/prestador'.$i.'.jpg') }}" alt="Imagen prestador {{ $i }}">
                    <div class="info">
                        <h3>Prestador {{ $i }}</h3>
                        <p>
                            @switch($i)
                                @case(1) Técnico con 6 años de experiencia en mantenimiento preventivo y correctivo. Optimizo el rendimiento de tu equipo sin perder información. @break
                                @case(2) Especialista en instalación y optimización de redes domésticas y empresariales. Diagnóstico rápido y soluciones eficientes. @break
                                @case(3) Atiendo fallos de software, lentitud, virus o reinstalación del sistema. Servicio rápido por conexión remota o presencial. @break
                                @case(4) Recupero archivos eliminados o inaccesibles desde discos duros, USB y memorias. Configuración de copias automáticas en la nube. @break
                                @case(5) Configuro e instalo impresoras, multifuncionales y drivers. Solución de errores de conexión o impresión. @break
                                @case(6) Asistencia personalizada para pequeñas empresas: redes, software, periféricos y soporte preventivo. @break
                                @case(7) Cambio de pantallas, teclados, baterías y discos en laptops. Diagnóstico gratuito y repuestos garantizados. @break
                                @case(8) Configuro antivirus, bloqueo de contenido y sistemas de protección para el uso seguro de internet en el hogar. @break
                                @case(9) Instalo programas profesionales: diseño, contabilidad, arquitectura o educación. Acompañamiento en el uso inicial. @break
                            @endswitch
                        </p>
                        <a href="{{ route('soportetec') }}"><button>Ver perfil</button></a>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>
