<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); 
    }

    public function login(Request $request)
    {
        // Validar
        $credentials = $request->validate([
            'email' => 'required|email',
            'contrasena' => 'required|string',
            'rol' => 'required|string',
        ]);

        // Buscar usuario
        $usuario = Usuario::with('rol')->where('email', $credentials['email'])->first();

        if ($usuario && Hash::check($credentials['contrasena'], $usuario->contrasena)) {
            
            if (!$usuario->rol) {
                return back()->withErrors(['rol' => 'Este usuario no tiene un rol asignado.']);
            }

            if ($usuario->rol->rol !== $credentials['rol']) {
                return back()->withErrors(['rol' => 'El rol seleccionado no corresponde con este usuario.']);
            }

            // Iniciar sesión
            Auth::login($usuario);
            $request->session()->regenerate(); // 🔥 evita problemas al reingresar

            // Redirigir según rol
            return match ($usuario->rol->rol) {
                'cliente'   => redirect()->route('cliente.home'),
                'prestador' => redirect()->route('prestador.home'),
                'admin'     => redirect()->route('admin.home'),
                default     => redirect()->route('login')->withErrors(['rol' => 'Rol no reconocido.']),
            };
        }

        return back()->withErrors(['email' => 'Las credenciales no coinciden con nuestros registros.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
