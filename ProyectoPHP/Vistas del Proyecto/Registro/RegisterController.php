<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Mostrar formulario de registro
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Procesar registro de usuario
     */
    public function register(Request $request)
    {
        $data = $request->validate([
            'nombre'     => 'required|string|max:20',
            'apellido'   => 'required|string|max:20',
            'email'      => 'required|email|max:30|unique:usuarios,email',
            'contrasena' => 'required|string|min:6|max:255',
            'telefono'   => 'required|string|max:10',
            'direccion'  => 'required|string|max:50',
            'id_rol'     => 'required|in:1,2', // 1 = cliente, 2 = prestador
        ]);

        // Guardar con contraseña encriptada
        $usuario = Usuario::create([
            'nombre'     => $data['nombre'],
            'apellido'   => $data['apellido'],
            'email'      => $data['email'],
            'contrasena' => Hash::make($data['contrasena']),
            'telefono'   => $data['telefono'],
            'direccion'  => $data['direccion'],
            'id_rol'     => $data['id_rol'],
        ]);

        // Redirigir al login después de registrarse
        return redirect()->route('login')->with('success', 'Registro exitoso, ahora puedes iniciar sesión.');
    }
}