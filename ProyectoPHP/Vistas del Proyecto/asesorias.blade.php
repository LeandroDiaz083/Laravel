<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/stylesplomeria.css') }}">
    <title>Tutorías y asesorías</title>
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
        <h1>Tutorías y asesorías</h1>
        <p>Apoyo personalizado en tareas, exámenes y refuerzos escolares para todos los que necesiten.</p>

        <div class="tarjetas-usuarios">
            @for ($i = 1; $i <= 9; $i++)
                <div class="usuario">
                    <img src="{{ asset('images/prestador'.$i.'.jpg') }}" alt="Prestador {{ $i }}">
                    <div class="info">
                        <h3>Prestador {{ $i }}</h3>
                        <p>
                            @switch($i)
                                @case(1)
                                    Ayudo con tareas escolares y refuerzo en diferentes materias. Trabajo con niños y jóvenes para que comprendan mejor sus clases.
                                    @break
                                @case(2)
                                    Ofrezco asesorías en matemáticas para primaria, secundaria y bachillerato con paciencia y ejemplos prácticos.
                                    @break
                                @case(3)
                                    Apoyo en preparación de exámenes, organizando temas y resolviendo dudas con ejercicios prácticos.
                                    @break
                                @case(4)
                                    Brindo asesoría en inglés: vocabulario, gramática, lectura y conversación, adaptado a tu nivel.
                                    @break
                                @case(5)
                                    Tutorías virtuales y presenciales en todas las materias de primaria con técnicas didácticas divertidas.
                                    @break
                                @case(6)
                                    Asesoro estudiantes universitarios en redacción, trabajos escritos y normas APA.
                                    @break
                                @case(7)
                                    Clases de refuerzo en ciencias naturales y biología con ejemplos simples, gráficos y ejercicios.
                                    @break
                                @case(8)
                                    Acompaño procesos de alfabetización y lectura para niños o adultos con calma y dedicación.
                                    @break
                                @case(9)
                                    Asesorías en historia, sociales y geografía con repasos y mapas mentales.
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
