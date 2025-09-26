<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/cliente.css') }}">
    <title>JobXpress</title>
</head>
<body>
  <header class="navbar">
    <div class="logo">
      <h4>JobXpress</h4>
    </div>
    <nav class="nav-links">
      <a href="{{ route('cliente.home') }}">Inicio</a>
      <a href="#servicios">Servicios</a>
      <a href="{{ route('cliente.perfil') }}">Tu perfil</a>
      <a href="{{ route('cliente.chat') }}">Chat</a>
      <a href="{{ route('cliente.dashboard') }}">Dashboard</a>
      <a href="{{ route('login') }}">Cerrar sesión</a>
    </nav>
  </header>

  <main>
    <section id="inicio">
      <h1>Servicios que ofrecemos</h1>
      <p>
        En JobXpress ofrecemos una amplia gama de servicios diseñados para cubrir las necesidades cotidianas de nuestros usuarios...
      </p>
    </section>

    <section id="servicios">
      <div class="tarjetas">

        <div class="tarjeta">
          <img src="{{ asset('img/gratis-png-fontanero-iconos-de-equipo-fontaneria-reparacion-de-viviendas (1).png') }}" alt="plomeria" />
          <a href="{{ route('plomeria') }}"><h3>Plomería</h3></a>
          <p>Soluciones rápidas para fugas, instalaciones y reparaciones en el hogar.</p>
        </div>

        <div class="tarjeta">
          <img src="{{ asset('img/electrician-black-glyph-icon-electrical-wiring-system-installation-and-maintenance-operating-with-electric-devices-equipment-silhouette-symbol-on-white-space-isolated-illustration-vector-removebg-prev (1).png') }}" alt="electricidad" />
          <a href="{{ route('electricidad') }}"><h3>Electricidad</h3></a>
          <p>Instalaciones eléctricas, arreglos y mantenimiento con seguridad garantizada.</p>
        </div>

        <div class="tarjeta">
          <img src="{{ asset('img/gratis-png-hombre-cosiendo-barra-de-madera-artesano-de-carpintero-de-madera-de-silueta-con-un-artesano-de-madera-de-motosierra-removebg-preview.png') }}" alt="carpintería" />
          <a href="{{ route('carpinteria') }}"><h3>Carpintería</h3></a>
          <p>Reparación y fabricación de muebles, puertas, closets y más.</p>
        </div>

        <div class="tarjeta">
          <img src="{{ asset('img/ilustracion-vectorial-silueta-criada-limpieza-clipart-icono-criada-limpieza-ilustracion-vectorial-plana-negra-mujer-limpieza_812892-2082.png') }}" alt="limpieza" />
          <a href="{{ route('limpiezagen') }}"><h3>Limpieza general</h3></a>
          <p>Servicio de limpieza residencial o de oficinas, por horas o integral.</p>
        </div>

        <div class="tarjeta">
          <img src="{{ asset('img/computer-repair-service-black-glyph-icon-installing-software-on-notebook-upgrade-system-tech-support-for-electronics-laptop-problems-silhouette-symbol-on-white-space-isolated-illustration-vector-remov.png') }}" alt="soporte tecnico" />
          <a href="{{ route('soportetec') }}"><h3>Soporte técnico</h3></a>
          <p>Revisión y solución de problemas en computadores, celulares y redes.</p>
        </div>

        <div class="tarjeta">
          <img src="{{ asset('img/images__1_-removebg-preview.png') }}" alt="instalacion" />
          <a href="{{ route('instalacionnequi') }}"><h3>Instalación de equipos</h3></a>
          <p>Televisores, routers, aires acondicionados, cámaras y más.</p>
        </div>

        <div class="tarjeta">
          <img src="{{ asset('img/png-transparent-physical-therapy-computer-icons-health-care-physical-medicine-and-rehabilitation-knee-text-logo-silhouette-removebg-preview.png') }}" alt="fisioterapia" />
          <a href="{{ route('fisioterapia') }}"><h3>Fisioterapia</h3></a>
          <p>Sesiones de rehabilitación física y terapias personalizadas a domicilio.</p>
        </div>

        <div class="tarjeta">
          <img src="{{ asset('img/png-transparent-physician-medicine-health-care-clinic-surgery-sick-people-logo-pharmaceutical-drug-silhouette-removebg-preview.png') }}" alt="salud" />
          <a href="{{ route('salud') }}"><h3>Salud</h3></a>
          <p>Profesionales de la salud que brindan atención médica básica o especializada.</p>
        </div>

        <div class="tarjeta">
          <img src="{{ asset('img/images__2_-removebg-preview.png') }}" alt="tutores" />
          <a href="{{ route('asesorias') }}"><h3>Tutores y asesorías</h3></a>
          <p>Clases particulares, ayuda escolar y orientación académica en diversas materias.</p>
        </div>

        <div class="tarjeta">
          <img src="{{ asset('img/161061383-el-adiestrador-de-perros-de-silueta-camina-con-una-mascota-concepto-de-servicio-de-perros-removebg-preview.png') }}" alt="cuidador" />
          <a href="{{ route('cuidaranimales') }}"><h3>Cuidadores de animales</h3></a>
          <p>Cuidado, paseo y atención para mascotas con cariño y responsabilidad.</p>
        </div>

        <div class="tarjeta">
          <img src="{{ asset('img/png-transparent-writing-website-content-writer-essay-publishing-content-writing-angle-text-service-removebg-preview.png') }}" alt="redaccion" />
          <a href="{{ route('redaccion') }}"><h3>Redacción de contenido</h3></a>
          <p>Textos para blogs, productos, páginas web o redes con enfoque profesional.</p>
        </div>

        <div class="tarjeta">
          <img src="{{ asset('img/156194435-icono-lineal-negro-de-presentación-en-línea-análisis-de-datos-de-internet-presentador-con-análisis-removebg-preview.png') }}" alt="marketing" />
          <a href="{{ route('marketing') }}"><h3>Marketing digital</h3></a>
          <p>Estrategias de publicidad, gestión de redes sociales y posicionamiento web.</p>
        </div>

      </div>
    </section>
  </main>
</body>
</html>
