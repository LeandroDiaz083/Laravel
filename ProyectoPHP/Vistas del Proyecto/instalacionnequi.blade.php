<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/stylesplomeria.css') }}">
    <title>Instalación de equipos</title>
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
        <h1>Instalación de equipos</h1>
        <p>Profesionales disponibles para ayudarte con la instalación segura y eficiente de electrodomésticos, equipos tecnológicos y sistemas eléctricos en tu hogar o negocio.</p>

        <div class="tarjetas-usuarios">
            @foreach(range(1,9) as $i)
                <div class="usuario">
                    <img src="{{ asset('img/prestador'.$i.'.jpg') }}" alt="Imagen prestador {{ $i }}">
                    <div class="info">
                        <h3>Prestador {{ $i }}</h3>
                        <p>
                            @switch($i)
                                @case(1) Me encargo de instalar tu televisor en la pared con nivelación perfecta, manejo de cables ocultos y soporte seguro. Deja que tu espacio se vea limpio y moderno. @break
                                @case(2) Instalo aires acondicionados tipo split y otros sistemas, cuidando cada detalle para que el equipo funcione bien y dure. También hago mantenimiento y recargas. @break
                                @case(3) Te ayudo a instalar tu estufa, horno o campana con las conexiones eléctricas o de gas que se necesiten. Trabajo con seguridad y dejo todo funcionando y limpio. @break
                                @case(4) Instalo y configuro redes WiFi, repetidores y cableado estructurado para que tengas buena señal en toda tu casa o negocio. También organizo tus dispositivos. @break
                                @case(5) Instalo cámaras de vigilancia y sistemas de seguridad para hogares y empresas. Te asesoro para ubicar bien los equipos y te enseño cómo manejarlos desde el celular. @break
                                @case(6) Conecto y nivelo lavadoras y secadoras, haciendo las conexiones de agua, desagüe y corriente. Me aseguro de que todo funcione bien desde el primer uso. @break
                                @case(7) Si quieres un buen sonido en tu casa, yo me encargo de instalar y configurar tu sistema de audio, barras de sonido o teatro en casa. Me gusta que todo quede perfecto. @break
                                @case(8) Realizo la instalación básica de paneles solares para viviendas, asegurando conexiones seguras y eficientes. Si estás comenzando con energía solar, puedo ayudarte. @break
                                @case(9) Instalo dispositivos inteligentes como bombillos, cerraduras, asistentes virtuales o cámaras conectadas. Te ayudo a automatizar tu casa para que todo funcione desde tu celular. @break
                            @endswitch
                        </p>
                        <a href="{{ route('instalacionnequi') }}"><button>Ver perfil</button></a>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>
