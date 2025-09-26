<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/stylesplomeria.css') }}">
    <title>Salud</title>
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
        <h1>Salud</h1>
        <p>Profesionales disponibles para brindarte atención médica, terapias, enfermería y cuidado especializado directamente en tu hogar.</p>

        <div class="tarjetas-usuarios">
            @for ($i = 1; $i <= 9; $i++)
                <div class="usuario">
                    <img src="{{ asset('images/prestador'.$i.'.jpg') }}" alt="Prestador {{ $i }}">
                    <div class="info">
                        <h3>Prestador {{ $i }}</h3>
                        <p>
                            @switch($i)
                                @case(1)
                                    Cuido pacientes postoperatorios, administro medicamentos, realizo curaciones y seguimiento diario de signos vitales.
                                    @break
                                @case(2)
                                    Cuido pacientes postoperatorios, administro medicamentos, realizo curaciones y seguimiento diario de signos vitales.
                                    @break
                                @case(3)
                                    Terapias físicas en casa para lesiones musculares, posturas, movilidad y recuperación después de cirugías o accidentes.
                                    @break
                                @case(4)
                                    Brindo acompañamiento, control de medicamentos, apoyo en higiene y actividades diarias para personas mayores.
                                    @break
                                @case(5)
                                    Terapias individuales, manejo del estrés, ansiedad o depresión desde la comodidad de tu hogar o vía virtual.
                                    @break
                                @case(6)
                                    Monitoreo y seguimiento de presión, glicemia, administración de insulina y educación al paciente.
                                    @break
                                @case(7)
                                    Manejo de inhaloterapia, oxigenoterapia y cuidados para pacientes con asma, EPOC o recuperación de COVID-19.
                                    @break
                                @case(8)
                                    Evaluación nutricional y planes alimenticios personalizados para bajar de peso, mejorar energía o tratar enfermedades.
                                    @break
                                @case(9)
                                    Consulta médica básica, revisión de síntomas, prescripción de medicamentos y formulación en casa.
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
