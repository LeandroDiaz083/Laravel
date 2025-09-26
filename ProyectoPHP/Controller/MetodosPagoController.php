<?php

namespace App\Http\Controllers;

use App\Models\MetodosPago;
use Illuminate\Http\Request;

class MetodosPagoController extends Controller
{
    public function index()
    {
        $metodos = MetodosPago::all();
        return view('metodospago.index', compact('metodos'));
    }

    public function create()
    {
        return view('metodospago.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'formas_pago' => 'required|string|max:20',
        ]);

        MetodosPago::create($request->all());

        return redirect()->route('metodospago.index')
                         ->with('success', 'Método de pago creado correctamente.');
    }

    public function show($id)
    {
        $metodo = MetodosPago::findOrFail($id);
        return view('metodospago.show', compact('metodo'));
    }

    public function edit($id)
    {
        $metodo = MetodosPago::findOrFail($id);
        return view('metodospago.edit', compact('metodo'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'formas_pago' => 'required|string|max:20',
        ]);

        $metodo = MetodosPago::findOrFail($id);
        $metodo->update($request->all());

        return redirect()->route('metodospago.index')
                         ->with('success', 'Método de pago actualizado correctamente.');
    }

    public function destroy($id)
    {
        $metodo = MetodosPago::findOrFail($id);
        $metodo->delete();

        return redirect()->route('metodospago.index')
                         ->with('success', 'Método de pago eliminado correctamente.');
    }
}
