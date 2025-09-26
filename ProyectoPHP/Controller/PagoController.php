<?php

namespace App\Http\Controllers;

use App\Models\Pago;
use App\Models\Contratacion;
use App\Models\MetodosPago;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    public function index()
    {
        $pagos = Pago::with(['contratacion','metodoPago'])->get();
        return view('pago.index', compact('pagos'));
    }

    public function create()
    {
        $contrataciones = Contratacion::all();
        $metodos = MetodosPago::all();
        return view('pago.create', compact('contrataciones','metodos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_metodo_pago' => 'required|integer',
            'monto' => 'required|numeric',
            'fecha_pago' => 'required|date',
            'id_contratacion' => 'required|integer',
        ]);

        Pago::create($request->all());

        return redirect()->route('pago.index')
                         ->with('success', 'Pago registrado correctamente.');
    }

    public function show($id)
    {
        $pago = Pago::with(['contratacion','metodoPago'])->findOrFail($id);
        return view('pago.show', compact('pago'));
    }

    public function edit($id)
    {
        $pago = Pago::findOrFail($id);
        $contrataciones = Contratacion::all();
        $metodos = MetodosPago::all();
        return view('pago.edit', compact('pago','contrataciones','metodos'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_metodo_pago' => 'required|integer',
            'monto' => 'required|numeric',
            'fecha_pago' => 'required|date',
            'id_contratacion' => 'required|integer',
        ]);

        $pago = Pago::findOrFail($id);
        $pago->update($request->all());

        return redirect()->route('pago.index')
                         ->with('success', 'Pago actualizado correctamente.');
    }

    public function destroy($id)
    {
        $pago = Pago::findOrFail($id);
        $pago->delete();

        return redirect()->route('pago.index')
                         ->with('success', 'Pago eliminado correctamente.');
    }
}
