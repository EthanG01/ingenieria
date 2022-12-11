<?php

namespace App\Http\Controllers;

use App\Models\Canton;
use App\Models\Categoria;
use App\Models\Proyecto;
use Illuminate\Http\Request;
use App\Exports\ProyectoExport;
use Excel;
use PDF;

/**
 * Class ProyectoController
 * @package App\Http\Controllers
 */
class ProyectoController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-proyecto|crear-proyecto|editar-proyecto|borrar-proyecto')->only('index');
         $this->middleware('permission:crear-proyecto', ['only' => ['create','store']]);
         $this->middleware('permission:editar-proyecto', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-proyecto', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $proyectos = Proyecto::paginate();

    //     return view('proyecto.index', compact('proyectos'))
    //         ->with('i', (request()->input('page', 1) - 1) * $proyectos->perPage());
    // }

    const PAGINACION=10;
    public function index(Request $request)
    {
        $buscarpor=$request->get('buscarpor');
        $proyectos=Proyecto::where('nombreProyecto','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
        
        return view('proyecto.index', compact('proyectos','buscarpor'))
        ->with('i', (request()->input('page', 1) - 1) * $proyectos->perPage());
    }

    public function pdf()
    {
        $proyectos = Proyecto::paginate(10000);

        $pdf = PDF::loadView('proyecto.pdf', compact('proyectos'));
        return $pdf->download('proyecto.pdf');
       
    }
    public function excel()
    {
        return Excel::download(new ProyectoExport, 'proyectos-list.xls');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $proyecto = new Proyecto();
        $categorias = Categoria::pluck('nombreCategoria','id');
        $cantons = Canton::pluck('nombreCanton','id');
        return view('proyecto.create', compact('proyecto','categorias','cantons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Proyecto::$rules);

        $proyecto = Proyecto::create($request->all());

        return redirect()->route('proyectos.index')
            ->with('success', 'Proyecto creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyecto = Proyecto::find($id);

        return view('proyecto.show', compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyecto = Proyecto::find($id);
        $categorias = Categoria::pluck('nombreCategoria','id');
        $cantons = Canton::pluck('nombreCanton','id');
        return view('proyecto.edit', compact('proyecto','categorias','cantons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Proyecto $proyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proyecto $proyecto)
    {
        request()->validate(Proyecto::$rules);

        $proyecto->update($request->all());

        return redirect()->route('proyectos.index')
            ->with('success', 'Proyecto actualizado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $proyecto = Proyecto::find($id)->delete();

        return redirect()->route('proyectos.index')
        ->with('eliminar', 'ok');
    }
}
