<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ContratacionController;
use App\Http\Controllers\CalificacionController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\MetodosPagoController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController; // ✅ agregado para registro

/*
|--------------------------------------------------------------------------
| Rutas de Recursos
|--------------------------------------------------------------------------
*/
Route::resource('rol', RolController::class);

Route::get('usuarios/pdf', [UsuarioController::class, 'exportPdf'])->name('usuarios.pdf');
Route::resource('usuarios', UsuarioController::class);

Route::get('servicio/pdf', [ServicioController::class, 'exportPdf'])->name('servicio.pdf');
Route::resource('servicio', ServicioController::class);

Route::resource('categoria', CategoriaController::class);

Route::get('contratacion/pdf', [ContratacionController::class, 'exportPdf'])->name('contratacion.pdf');
Route::resource('contratacion', ContratacionController::class);

Route::resource('calificacion', CalificacionController::class);

Route::resource('pago', PagoController::class);

Route::resource('metodospago', MetodosPagoController::class);

/*
|--------------------------------------------------------------------------
| Autenticación
|--------------------------------------------------------------------------
*/
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit'); 
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// ✅ NUEVAS RUTAS DE REGISTRO (cliente o prestador)
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

/*
|--------------------------------------------------------------------------
| Rutas protegidas por login
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {


// Ruta principal de la aplicación
Route::get('/', function () {
    return view('home');
})->name('home');

    // =============================
    // CLIENTE
    // =============================
    Route::get('/cliente/home', fn() => view('inicio'))->name('cliente.home');
    Route::view('/cliente/perfil', 'perfilcliente')->name('cliente.perfil');
    Route::view('/cliente/chat', 'chatcliente')->name('cliente.chat');
    Route::view('/cliente/dashboard', 'dashboardcli')->name('cliente.dashboard');

    // =============================
    // PRESTADOR
    // =============================
    Route::get('/prestador/home', fn() => view('prestador'))->name('prestador.home');
    Route::view('/prestador', 'prestador')->name('prestador');
    Route::view('/servicioprestador', 'servicioprestador')->name('servicioprestador');
    Route::view('/perfilprestador', 'perfilprestador')->name('perfilprestador');
    Route::view('/chatprestador', 'chatprestador')->name('chatprestador');
    Route::view('/gananciasprestador', 'gananciasprestador')->name('gananciasprestador');
    Route::view('/valoracionespres', 'valoracionespres')->name('valoracionespres');
    Route::view('/agendapres', 'agendapres')->name('agendapres');
    Route::view('/dashboardprestador', 'dashboardprestador')->name('dashboardprestador');

    // =============================
    // ADMIN
    // =============================
    Route::get('/admin/home', fn() => view('admin'))->name('admin.home');
    Route::view('/admin', 'admin')->name('admin.dashboard');
    Route::view('/admin/usuarios', 'adminusuarios')->name('admin.usuarios');

    // =============================
    // SERVICIOS
    // =============================
    Route::view('/carpinteria', 'carpinteria')->name('carpinteria');
    Route::view('/cuidaranimales', 'cuidaranimales')->name('cuidaranimales');
    Route::view('/electricidad', 'electricidad')->name('electricidad');
    Route::view('/fisioterapia', 'fisioterapia')->name('fisioterapia');
    Route::view('/instalacionnequi', 'instalacionnequi')->name('instalacionnequi');
    Route::view('/limpiezagen', 'limpiezagen')->name('limpiezagen');
    Route::view('/marketing', 'marketing')->name('marketing');
    Route::view('/plomeria', 'plomeria')->name('plomeria');
    Route::view('/redaccion', 'redaccion')->name('redaccion');
    Route::view('/salud', 'salud')->name('salud');
    Route::view('/soportetec', 'soportetec')->name('soportetec');

    // =============================
    // OTROS
    // =============================
    Route::view('/asesorias', 'asesorias')->name('asesorias');
    Route::view('/inicio', 'inicio')->name('inicio');

    // =============================
// Registro de usuarios
// =============================


Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

    
});