<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Barryvdh\DomPDF\Facade\Pdf;

class UsuarioController extends Controller
{
    // Mostrar listado con búsqueda multicriterio
    public function index(Request $request)
    {
        $query = Usuario::with('rol');

        if ($request->filled('nombre')) {
            $query->where('nombre', 'like', '%' . $request->nombre . '%');
        }

        if ($request->filled('apellido')) {
            $query->where('apellido', 'like', '%' . $request->apellido . '%');
        }

        if ($request->filled('email')) {
            $query->where('email', 'like', '%' . $request->email . '%');
        }

        if ($request->filled('telefono')) {
            $query->where('telefono', 'like', '%' . $request->telefono . '%');
        }

        // Si quieres paginar:
        // $usuarios = $query->paginate(15)->withQueryString();
        $usuarios = $query->get();

        return view('usuarios.index', compact('usuarios'));
    }

    // Vista crear
    public function create()
    {
        $roles = Rol::all();
        return view('usuarios.create', compact('roles'));
    }

    // Guardar nuevo usuario (contraseña encriptada)
    public function store(Request $request)
    {
        $data = $request->validate([
            'id_rol' => 'required|integer|exists:rol,id_rol',
            'nombre' => 'required|string|max:20',
            'apellido' => 'required|string|max:20',
            'email' => 'required|email|max:30|unique:usuarios,email',
            'contrasena' => 'required|string|min:6|max:255',
            'telefono' => 'required|string|max:10',
            'direccion' => 'required|string|max:50',
        ]);

        $data['contrasena'] = bcrypt($data['contrasena']);

        Usuario::create($data);

        return redirect()->route('usuarios.index')->with('success', 'Usuario creado correctamente.');
    }

    // Mostrar detalle
    public function show($id)
    {
        $usuario = Usuario::with('rol')->findOrFail($id);
        return view('usuarios.show', compact('usuario'));
    }

    // Vista editar
    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        $roles = Rol::all();
        return view('usuarios.edit', compact('usuario','roles'));
    }

    // Actualizar (no modifica contraseña a menos que quieras permitirlo)
    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);

        $data = $request->validate([
            'id_rol' => 'required|integer|exists:rol,id_rol',
            'nombre' => 'required|string|max:20',
            'apellido' => 'required|string|max:20',
            'email' => 'required|email|max:30|unique:usuarios,email,'.$id.',id_usuario',
            'telefono' => 'required|string|max:10',
            'direccion' => 'required|string|max:50',
            // 'contrasena' => 'nullable|string|min:6' // sólo si permites cambiar desde editar
        ]);

        // si quieres permitir cambiar contraseña desde edit, descomenta:
        // if ($request->filled('contrasena')) { $data['contrasena'] = bcrypt($request->contrasena); }

        $usuario->update($data);

        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado correctamente.');
    }

    // Eliminar
    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();

        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado correctamente.');
    }

    // Exportar PDF usando los mismos filtros que index
    public function exportPdf(Request $request)
    {
        $query = Usuario::with('rol');

        if ($request->filled('nombre')) {
            $query->where('nombre', 'like', '%' . $request->nombre . '%');
        }

        if ($request->filled('apellido')) {
            $query->where('apellido', 'like', '%' . $request->apellido . '%');
        }

        if ($request->filled('email')) {
            $query->where('email', 'like', '%' . $request->email . '%');
        }

        if ($request->filled('telefono')) {
            $query->where('telefono', 'like', '%' . $request->telefono . '%');
        }

        $usuarios = $query->get();

        $pdf = Pdf::loadView('usuarios.reporte', compact('usuarios'));
        return $pdf->download('usuarios_reporte.pdf');
    }
}
