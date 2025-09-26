<?php

namespace App\Http\Controllers;

use App\Models\Calificacion;
use App\Models\Usuario;
use App\Models\Contratacion;
use Illuminate\Http\Request;

class CalificacionController extends Controller
{
    public function index()
    {
        $calificaciones = Calificacion::with(['cliente','prestador','contratacion'])->get();
        return view('calificacion.index', compact('calificaciones'));
    }

    public function create()
    {
        $clientes = Usuario::all();
        $prestadores = Usuario::all();
        $contrataciones = Contratacion::all();
        return view('calificacion.create', compact('clientes','prestadores','contrataciones'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'puntuacion' => 'required|integer|min:1|max:5',
            'comentario' => 'required|string',
            'fecha_calificacion' => 'required|date',
            'id_cliente' => 'required|integer',
            'id_prestador' => 'required|integer',
            'id_contratacion' => 'required|integer',
        ]);

        Calificacion::create($request->all());

        return redirect()->route('calificacion.index')
                         ->with('success', 'Calificación registrada correctamente.');
    }

    public function show($id)
    {
        $calificacion = Calificacion::with(['cliente','prestador','contratacion'])->findOrFail($id);
        return view('calificacion.show', compact('calificacion'));
    }

    public function edit($id)
    {
        $calificacion = Calificacion::findOrFail($id);
        $clientes = Usuario::all();
        $prestadores = Usuario::all();
        $contrataciones = Contratacion::all();
        return view('calificacion.edit', compact('calificacion','clientes','prestadores','contrataciones'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'puntuacion' => 'required|integer|min:1|max:5',
            'comentario' => 'required|string',
            'fecha_calificacion' => 'required|date',
            'id_cliente' => 'required|integer',
            'id_prestador' => 'required|integer',
            'id_contratacion' => 'required|integer',
        ]);

        $calificacion = Calificacion::findOrFail($id);
        $calificacion->update($request->all());

        return redirect()->route('calificacion.index')
                         ->with('success', 'Calificación actualizada correctamente.');
    }

    public function destroy($id)
    {
        $calificacion = Calificacion::findOrFail($id);
        $calificacion->delete();

        return redirect()->route('calificacion.index')
                         ->with('success', 'Calificación eliminada correctamente.');
    }
}
