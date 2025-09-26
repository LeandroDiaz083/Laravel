<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/stylesplomeria.css') }}">
    <title>Fisioterapia</title>
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
        <h1>Fisioterapia</h1>
        <p>Acompañamos procesos de rehabilitación desde la comodidad de tu hogar.</p>

        <div class="tarjetas-usuarios">
            @for ($i = 1; $i <= 9; $i++)
                <div class="usuario">
                    <img src="{{ asset('images/prestador'.$i.'.jpg') }}" alt="Prestador {{ $i }}">
                    <div class="info">
                        <h3>Prestador {{ $i }}</h3>
                        <p>
                            @switch($i)
                                @case(1)
                                    Ofrezco sesiones de fisioterapia a domicilio para tratar dolores musculares y articulares. Trabajo con técnicas manuales, estiramientos y ejercicios personalizados.
                                    @break
                                @case(2)
                                    Ayudo a personas con lesiones o cirugías recientes a recuperar movimiento. Diseño planes de rehabilitación adaptados con acompañamiento constante.
                                    @break
                                @case(3)
                                    Realizo terapias de relajación muscular y manejo del estrés físico. Masajes terapéuticos y técnicas de respiración.
                                    @break
                                @case(4)
                                    Trabajo con deportistas en procesos de recuperación, fortalecimiento y prevención de lesiones.
                                    @break
                                @case(5)
                                    Atiendo adultos mayores con terapias físicas suaves para mantener independencia.
                                    @break
                                @case(6)
                                    Brindo fisioterapia neurológica para ACV, parálisis o Parkinson con ejercicios específicos.
                                    @break
                                @case(7)
                                    Sesiones de fisioterapia respiratoria para mejorar la capacidad pulmonar.
                                    @break
                                @case(8)
                                    Tratamientos para corregir malas posturas y aliviar dolores por sobrecarga.
                                    @break
                                @case(9)
                                    Acompaño procesos de rehabilitación física adaptados a lesiones, cirugías o dolor crónico.
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
