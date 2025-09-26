<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/stylesplomeria.css') }}">
    <title>Redacción de contenido</title>
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
        <h1>Redacción de contenido</h1>
        <p>Profesionales disponibles para redactar artículos, revisar textos y crear contenido digital para páginas, redes o proyectos académicos.</p>

        <div class="tarjetas-usuarios">
            @for ($i = 1; $i <= 9; $i++)
                <div class="usuario">
                    <img src="{{ asset('images/prestador'.$i.'.jpg') }}" alt="Prestador {{ $i }}">
                    <div class="info">
                        <h3>Prestador {{ $i }}</h3>
                        <p>
                            @switch($i)
                                @case(1)
                                    Creo artículos optimizados para blogs, páginas web y tiendas online. Uso palabras clave estratégicas para mejorar tu posicionamiento.
                                    @break
                                @case(2)
                                    Redacto trabajos universitarios, ensayos argumentativos y reviso estilo y normas APA, MLA o ICONTEC.
                                    @break
                                @case(3)
                                    Desarrollo textos persuasivos y creativos para Instagram, Facebook y TikTok, adaptados al lenguaje de tu marca.
                                    @break
                                @case(4)
                                    Redacto textos que venden: anuncios, slogans, correos y páginas de ventas con enfoque estratégico y emocional.
                                    @break
                                @case(5)
                                    Reviso y corrijo textos para que suenen naturales, sean coherentes y cumplan reglas ortográficas y gramaticales.
                                    @break
                                @case(6)
                                    Redactor especializado en temas de tecnología, software, procesos industriales y documentación corporativa.
                                    @break
                                @case(7)
                                    Redacto contenido confiable y accesible sobre nutrición, psicología, ejercicios y hábitos saludables.
                                    @break
                                @case(8)
                                    Escribo crónicas, reseñas y guías de destinos turísticos, con estilo cercano y descripciones atractivas.
                                    @break
                                @case(9)
                                    Redacto historias que conectan con tu audiencia para construir comunidad y marca personal.
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
