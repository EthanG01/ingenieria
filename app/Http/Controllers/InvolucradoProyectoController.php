<?php

namespace App\Http\Controllers;

use App\Models\Involucrado;
use App\Models\InvolucradoProyecto;
use App\Models\Persona;
use App\Models\Proyecto;

use Illuminate\Http\Request;

/**
 * Class InvolucradoProyectoController
 * @package App\Http\Controllers
 */
class InvolucradoProyectoController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-invProyecto|crear-invProyecto|editar-invProyecto|borrar-invProyecto')->only('index');
         $this->middleware('permission:crear-invProyecto', ['only' => ['create','store']]);
         $this->middleware('permission:editar-invProyecto', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-invProyecto', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $involucradoProyectos = InvolucradoProyecto::paginate();

    //     return view('involucrado-proyecto.index', compact('involucradoProyectos'))
    //         ->with('i', (request()->input('page', 1) - 1) * $involucradoProyectos->perPage());
    // }

    const PAGINACION=10;
    public function index(Request $request)
    {
        $buscarpor=$request->get('buscarpor');
        $involucradoProyectos=InvolucradoProyecto::where('id','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
        
        return view('involucrado-proyecto.index', compact('involucradoProyectos','buscarpor'))
        ->with('i', (request()->input('page', 1) - 1) * $involucradoProyectos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $involucradoProyecto = new InvolucradoProyecto();
        $proyectos = Proyecto::pluck('nombreProyecto','id');
        $involucrados = Involucrado::pluck('descripcionInvolucrado','id');
        $personas = Persona::pluck('nombrePersona','id');
        return view('involucrado-proyecto.create', compact('involucradoProyecto','proyectos','involucrados','personas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(InvolucradoProyecto::$rules);

        $involucradoProyecto = InvolucradoProyecto::create($request->all());

        return redirect()->route('involucrado-proyectos.index')
            ->with('success', 'InvolucradoProyecto creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $involucradoProyecto = InvolucradoProyecto::find($id);

        return view('involucrado-proyecto.show', compact('involucradoProyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $involucradoProyecto = InvolucradoProyecto::find($id);
        $proyectos = Proyecto::pluck('nombreProyecto','id');
        $involucrados = Involucrado::pluck('descripcionInvolucrado','id');
        $personas = Persona::pluck('nombrePersona','id');
        return view('involucrado-proyecto.edit', compact('involucradoProyecto','proyectos','involucrados','personas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  InvolucradoProyecto $involucradoProyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InvolucradoProyecto $involucradoProyecto)
    {
        request()->validate(InvolucradoProyecto::$rules);

        $involucradoProyecto->update($request->all());

        return redirect()->route('involucrado-proyectos.index')
            ->with('success', 'Involucrado-Proyecto actualizado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $involucradoProyecto = InvolucradoProyecto::find($id)->delete();

        return redirect()->route('involucrado-proyectos.index')
        ->with('eliminar', 'ok');
    }
}