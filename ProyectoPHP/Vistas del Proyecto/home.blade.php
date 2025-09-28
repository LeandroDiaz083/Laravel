@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">

<!-- Navbar -->
<header class="navbar">
    <div class="logo">JobXpress</div>
    <nav class="nav-links">
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Registro</a>
    </nav>
</header>

<!-- Hero -->
<section class="hero" style="text-align:center; padding:4rem 2rem; color:white; background:linear-gradient(135deg,#007bff,#00c6ff);">
    <h1 style="font-size:3rem; font-weight:700;">Conecta con los mejores prestadores de servicios</h1>
    <p style="margin-top:1rem; font-size:1.2rem;">
        JobXpress te ayuda a encontrar y contratar expertos en plomería, electricidad, limpieza, fisioterapia y mucho más.
    </p>
    <a href="{{ route('register') }}" style="margin-top:2rem; display:inline-block; padding:0.8rem 1.5rem; background:#fff; color:#007bff; border-radius:8px; font-weight:600; text-decoration:none;">
        Comienza ahora
    </a>
</section>

<!-- Servicios destacados -->
<section style="padding:3rem 2rem; background:#f9f9f9;">
    <h2 style="text-align:center; font-size:2rem; margin-bottom:2rem;">Servicios más buscados</h2>
    <div style="display:grid; grid-template-columns:repeat(3, 1fr); gap:1.5rem; max-width:1100px; margin:0 auto;">

        <div style="background:white; padding:2rem; border-radius:10px; box-shadow:0 2px 8px rgba(0,0,0,0.1); text-align:center;">
            <h3>Plomería</h3>
            <p>Soluciones rápidas para fugas, instalaciones y reparaciones.</p>
        </div>
        <div style="background:white; padding:2rem; border-radius:10px; box-shadow:0 2px 8px rgba(0,0,0,0.1); text-align:center;">
            <h3>Electricidad</h3>
            <p>Instalaciones eléctricas seguras y mantenimiento confiable.</p>
        </div>
        <div style="background:white; padding:2rem; border-radius:10px; box-shadow:0 2px 8px rgba(0,0,0,0.1); text-align:center;">
            <h3>Limpieza</h3>
            <p>Hogares y oficinas impecables con profesionales confiables.</p>
        </div>
        <div style="background:white; padding:2rem; border-radius:10px; box-shadow:0 2px 8px rgba(0,0,0,0.1); text-align:center;">
            <h3>Fisioterapia</h3>
            <p>Atención personalizada para tu bienestar físico y recuperación.</p>
        </div>
        <div style="background:white; padding:2rem; border-radius:10px; box-shadow:0 2px 8px rgba(0,0,0,0.1); text-align:center;">
            <h3>Carpintería</h3>
            <p>Fabricación y reparación de muebles a medida para tu hogar u oficina.</p>
        </div>
        <div style="background:white; padding:2rem; border-radius:10px; box-shadow:0 2px 8px rgba(0,0,0,0.1); text-align:center;">
            <h3>Marketing Digital</h3>
            <p>Haz crecer tu negocio con expertos en redes sociales y publicidad online.</p>
        </div>
    </div>
</section>

<!-- Cómo funciona -->
<section style="padding:3rem 2rem; background:white;">
    <h2 style="text-align:center; font-size:2rem; margin-bottom:2rem;">¿Cómo funciona JobXpress?</h2>
    <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(250px,1fr)); gap:2rem; max-width:1000px; margin:0 auto;">
        <div style="text-align:center;">
            <div style="font-size:2.5rem; color:#007bff; font-weight:bold;">1</div>
            <h3>Regístrate</h3>
            <p>Crea tu cuenta como cliente o prestador de servicios.</p>
        </div>
        <div style="text-align:center;">
            <div style="font-size:2.5rem; color:#007bff; font-weight:bold;">2</div>
            <h3>Busca o publica</h3>
            <p>Encuentra el servicio que necesitas o publica el que ofreces.</p>
        </div>
        <div style="text-align:center;">
            <div style="font-size:2.5rem; color:#007bff; font-weight:bold;">3</div>
            <h3>Conecta y califica</h3>
            <p>Agenda, paga y califica el servicio fácilmente desde la app.</p>
        </div>
    </div>
</section>

<!-- Footer -->
<footer style="text-align:center; padding:1.5rem; margin-top:3rem; background:#007bff; color:white;">
    <p>&copy; {{ date('Y') }} JobXpress - Todos los derechos reservados</p>
</footer>
@endsection
