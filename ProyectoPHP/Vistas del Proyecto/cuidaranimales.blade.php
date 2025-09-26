<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/stylesplomeria.css') }}">
    <title>Cuidadores de animales</title>
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
        <h1>Cuidadores de animales</h1>
        <p>Profesionales dedicados al cuidado y bienestar de tus mascotas. Ya sea en casa, durante tus viajes o en paseos diarios.</p>

        <div class="tarjetas-usuarios">
            @for ($i = 1; $i <= 9; $i++)
                <div class="usuario">
                    <img src="{{ asset('images/prestador'.$i.'.jpg') }}" alt="Prestador {{ $i }}">
                    <div class="info">
                        <h3>Prestador {{ $i }}</h3>
                        <p>
                            @switch($i)
                                @case(1)
                                    Me encanta salir a caminar con los peluditos. Hago paseos seguros con rutas adecuadas para que tu perro se ejercite.
                                    @break
                                @case(2)
                                    Cuido de tus mascotas en casa cuando estás de viaje o en el trabajo. Les doy comida y cariño como si fueran míos.
                                    @break
                                @case(3)
                                    Ofrezco alojamiento temporal para perros o gatos en mi hogar, asegurando su cuidado y compañía constante.
                                    @break
                                @case(4)
                                    Servicios básicos como baño, cepillado y limpieza de orejas, con paciencia y amor para tu mascota.
                                    @break
                                @case(5)
                                    Administro medicamentos y tratamientos, cuidando especialmente mascotas postoperatorias.
                                    @break
                                @case(6)
                                    Cuido mascotas como conejos, aves, hámsters o reptiles, con alimentación y rutinas específicas.
                                    @break
                                @case(7)
                                    Entreno perros para mejorar su comportamiento y aprender comandos básicos con refuerzo positivo.
                                    @break
                                @case(8)
                                    Transporte seguro de mascotas a veterinarios, guarderías o peluquerías, con cuidado y atención.
                                    @break
                                @case(9)
                                    Organizo guarderías y socialización para perros, asegurando diversión y bienestar.
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
