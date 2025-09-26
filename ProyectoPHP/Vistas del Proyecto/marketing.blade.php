<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/stylesplomeria.css') }}">
    <title>Marketing digital</title>
</head>
<body>
    <header class="navbar">
        <div class="logo">JobXpress</div>
        <nav class="nav-links">
            <a href="{{ route('cliente.home') }}">Inicio</a>
            <a href="{{ route('cliente.home') }}#servicios">Servicios</a>
            <a href="{{ route('cliente.perfil') }}">Tu perfil</a>
            <a href="{{ route('cliente.chat') }}">Chat</a>
            <a href="{{ route('cliente.dashboard') }}">Dashboard</a>
            <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                @csrf
                <button type="submit" style="background:none;border:none;color:white;cursor:pointer;">Cerrar sesión</button>
            </form>
        </nav>
    </header>

    <main class="contenedor">
        <h1>Marketing digital</h1>
        <p>Servicios enfocados en mejorar la imagen, presencia digital y ventas de tu negocio a través de estrategias publicitarias y contenido creativo.</p>

        <div class="tarjetas-usuarios">
            @for ($i = 1; $i <= 9; $i++)
                <div class="usuario">
                    <img src="{{ asset('images/prestador'.$i.'.jpg') }}" alt="Prestador {{ $i }}">
                    <div class="info">
                        <h3>Prestador {{ $i }}</h3>
                        <p>
                            @switch($i)
                                @case(1)
                                    Diseño estrategias para aumentar la visibilidad de tu marca en redes sociales. Creo contenido llamativo y publicaciones que conecten con tus clientes ideales.
                                    @break
                                @case(2)
                                    Ofrezco servicios de manejo de redes sociales para negocios pequeños y emprendimientos. Me encargo de los posts, historias y atención básica al cliente para mantener tu comunidad activa.
                                    @break
                                @case(3)
                                    Me especializo en publicidad digital en Facebook e Instagram Ads. Creo campañas que generan resultados reales, con segmentación adecuada y seguimiento constante.
                                    @break
                                @case(4)
                                    Diseño y optimizo perfiles de negocio en redes sociales. Me aseguro de que tu marca tenga una presencia clara, atractiva y coherente en cada plataforma.
                                    @break
                                @case(5)
                                    Brindo asesorías para emprendedores que quieren iniciar su marca personal o negocio online. Te oriento paso a paso en branding, contenidos y cómo captar tus primeros clientes.
                                    @break
                                @case(6)
                                    Creo contenido gráfico y visual para redes sociales, como flyers, historias y anuncios. Uso herramientas de diseño para que tus publicaciones se vean profesionales y llamativas.
                                    @break
                                @case(7)
                                    Realizo análisis de métricas y resultados de tus redes para mejorar el rendimiento. Evalúo qué funciona, qué no y propongo acciones concretas para crecer.
                                    @break
                                @case(8)
                                    Apoyo en la creación de catálogos digitales y contenido promocional para WhatsApp Business. Te ayudo a mostrar tus productos o servicios de forma ordenada y atractiva.
                                    @break
                                @case(9)
                                    Redacto textos publicitarios para redes, páginas web y anuncios. Me enfoco en mensajes claros y persuasivos que conecten con tu público y generen acción.
                                    @break
                            @endswitch
                        </p>
                        <a href="#" class="btn">Ver perfil</a>
                    </div>
                </div>
            @endfor
        </div>
    </main>
</body>
</html>
