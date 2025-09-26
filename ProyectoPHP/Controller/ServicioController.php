<?php
namespace App\Http\Controllers;

use App\Models\Servicio;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ServicioController extends Controller
{
    public function index(Request $request)
    {
        $query = Servicio::with('categoria');

        if ($request->filled('nombre')) {
            $query->where('nombre', 'like', "%{$request->nombre}%");
        }
        if ($request->filled('descripcion')) {
            $query->where('descripcion', 'like', "%{$request->descripcion}%");
        }
        if ($request->filled('precio_min')) {
            $query->where('precio', '>=', $request->precio_min);
        }
        if ($request->filled('precio_max')) {
            $query->where('precio', '<=', $request->precio_max);
        }
        if ($request->filled('categoria')) {
            $query->whereHas('categoria', function($q) use ($request) {
                $q->where('nombre', 'like', "%{$request->categoria}%");
            });
        }

        $servicios = $query->paginate(10);

        return view('servicio.index', compact('servicios'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        return view('servicio.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_categoria' => 'required|exists:categoria,id_categoria',
            'nombre' => 'required|string|max:100',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric|min:0',
        ]);

        Servicio::create($request->all());

        return redirect()->route('servicio.index')->with('success', 'Servicio creado correctamente');
    }

    public function show($id)
    {
        $servicio = Servicio::with('categoria')->findOrFail($id);
        return view('servicio.show', compact('servicio'));
    }

    public function edit($id)
    {
        $servicio = Servicio::findOrFail($id);
        $categorias = Categoria::all();
        return view('servicio.edit', compact('servicio','categorias'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_categoria' => 'required|exists:categoria,id_categoria',
            'nombre' => 'required|string|max:100',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric|min:0',
        ]);

        $servicio = Servicio::findOrFail($id);
        $servicio->update($request->all());

        return redirect()->route('servicio.index')->with('success', 'Servicio actualizado correctamente');
    }

    public function destroy($id)
    {
        $servicio = Servicio::findOrFail($id);
        $servicio->delete();
        return redirect()->route('servicio.index')->with('success', 'Servicio eliminado correctamente');
    }

    // 📌 Exportar a PDF
    public function exportPdf(Request $request)
    {
        $query = Servicio::with('categoria');

        if ($request->filled('nombre')) {
            $query->where('nombre', 'like', "%{$request->nombre}%");
        }
        if ($request->filled('descripcion')) {
            $query->where('descripcion', 'like', "%{$request->descripcion}%");
        }
        if ($request->filled('precio_min')) {
            $query->where('precio', '>=', $request->precio_min);
        }
        if ($request->filled('precio_max')) {
            $query->where('precio', '<=', $request->precio_max);
        }
        if ($request->filled('categoria')) {
            $query->whereHas('categoria', function($q) use ($request) {
                $q->where('nombre', 'like', "%{$request->categoria}%");
            });
        }

        $servicios = $query->get();

        $pdf = Pdf::loadView('servicio.reporte', compact('servicios'))
          ->setPaper('a4', 'landscape');

        return $pdf->download('servicios.pdf');
    }
}
