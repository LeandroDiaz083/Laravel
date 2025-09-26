<?php

namespace App\Http\Controllers;

use App\Models\Contratacion;
use App\Models\Usuario;
use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Barryvdh\DomPDF\Facade\Pdf;

class ContratacionController extends Controller
{
    // Listado con búsqueda y reporte
    public function index(Request $request): View
    {
        $query = Contratacion::with(['cliente', 'prestador', 'servicio']);

        if ($request->filled('fecha_solicitud')) {
            $query->whereDate('fecha_solicitud', $request->fecha_solicitud);
        }
        if ($request->filled('estado_contratacion')) {
            $query->where('estado_contratacion', $request->estado_contratacion);
        }
        if ($request->filled('id_cliente')) {
            $query->where('id_cliente', $request->id_cliente);
        }
        if ($request->filled('id_prestador')) {
            $query->where('id_prestador', $request->id_prestador);
        }

        $contrataciones = $query->paginate(10);
        $clientes = Usuario::whereHas('rol', fn($q) => $q->where('rol', 'Cliente'))->get();
        $prestadores = Usuario::whereHas('rol', fn($q) => $q->where('rol', 'Prestador'))->get();

        return view('contratacion.index', compact('contrataciones', 'clientes', 'prestadores'));
    }

    // Formulario crear
    public function create(): View
    {
        $clientes = Usuario::whereHas('rol', fn($q) => $q->where('rol', 'Cliente'))->get();
        $prestadores = Usuario::whereHas('rol', fn($q) => $q->where('rol', 'Prestador'))->get();
        $servicios = Servicio::all();

        return view('contratacion.create', compact('clientes', 'prestadores', 'servicios'));
    }

    // Guardar contratación
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'id_cliente' => 'required|exists:usuarios,id_usuario',
            'id_prestador' => 'required|exists:usuarios,id_usuario',
            'id_servicio' => 'required|exists:servicio,id_servicio',
            'fecha_solicitud' => 'required|date',
            'fecha_programada' => 'required|date',
            'estado_contratacion' => 'required|string|max:50',
            'observacion' => 'nullable|string'
        ]);

        Contratacion::create($data);
        return redirect()->route('contratacion.index')->with('success', 'Contratación creada correctamente.');
    }

    // Ver contratación
    public function show($id): View
    {
        $contratacion = Contratacion::with(['cliente', 'prestador', 'servicio'])->findOrFail($id);
        return view('contratacion.show', compact('contratacion'));
    }

    // Editar contratación
    public function edit($id): View
    {
        $contratacion = Contratacion::findOrFail($id);
        $clientes = Usuario::whereHas('rol', fn($q) => $q->where('rol', 'Cliente'))->get();
        $prestadores = Usuario::whereHas('rol', fn($q) => $q->where('rol', 'Prestador'))->get();
        $servicios = Servicio::all();

        return view('contratacion.edit', compact('contratacion', 'clientes', 'prestadores', 'servicios'));
    }

    // Actualizar contratación
    public function update(Request $request, $id): RedirectResponse
    {
        $contratacion = Contratacion::findOrFail($id);

        $data = $request->validate([
            'id_cliente' => 'required|exists:usuarios,id_usuario',
            'id_prestador' => 'required|exists:usuarios,id_usuario',
            'id_servicio' => 'required|exists:servicio,id_servicio',
            'fecha_solicitud' => 'required|date',
            'fecha_programada' => 'required|date',
            'estado_contratacion' => 'required|string|max:50',
            'observacion' => 'nullable|string'
        ]);

        $contratacion->update($data);
        return redirect()->route('contratacion.index')->with('success', 'Contratación actualizada correctamente.');
    }

    // Eliminar contratación
    public function destroy($id): RedirectResponse
    {
        $contratacion = Contratacion::findOrFail($id);
        $contratacion->delete();

        return redirect()->route('contratacion.index')->with('success', 'Contratación eliminada correctamente.');
    }

    // Exportar PDF
    public function exportPdf(Request $request)
    {
        $query = Contratacion::with(['cliente', 'prestador', 'servicio']);

        if ($request->filled('fecha_solicitud')) {
            $query->whereDate('fecha_solicitud', $request->fecha_solicitud);
        }
        if ($request->filled('estado_contratacion')) {
            $query->where('estado_contratacion', $request->estado_contratacion);
        }

        $contrataciones = $query->get();

        $pdf = Pdf::loadView('contratacion.reporte', compact('contrataciones'))
                  ->setPaper('a4', 'landscape');

        return $pdf->download('reporte_contrataciones.pdf');
    }
}