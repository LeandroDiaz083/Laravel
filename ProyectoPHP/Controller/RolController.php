<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    public function index()
    {
        $roles = Rol::all();
        return view('rol.index', compact('roles'));
    }

    public function create()
    {
        return view('rol.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'rol' => 'required|string|max:50',
        ]);

        Rol::create([
            'rol' => $request->rol,
        ]);

        return redirect()->route('rol.index')
                         ->with('success', 'Rol creado correctamente.');
    }

    public function show($id)
    {
        $rol = Rol::findOrFail($id);
        return view('rol.show', compact('rol'));
    }

    public function edit($id)
    {
        $rol = Rol::findOrFail($id);
        return view('rol.edit', compact('rol'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'rol' => 'required|string|max:50',
        ]);

        $rol = Rol::findOrFail($id);
        $rol->update([
            'rol' => $request->rol,
        ]);

        return redirect()->route('rol.index')
                         ->with('success', 'Rol actualizado correctamente.');
    }

    public function destroy($id)
    {
        $rol = Rol::findOrFail($id);
        $rol->delete();

        return redirect()->route('rol.index')
                         ->with('success', 'Rol eliminado correctamente.');
    }
}
