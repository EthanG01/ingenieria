<?php

namespace App\Http\Controllers;

use App\Models\Implicacion;
use Illuminate\Http\Request;

/**
 * Class ImplicacionController
 * @package App\Http\Controllers
 */
class ImplicacionController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-implicacion|crear-implicacion|editar-implicacion|borrar-implicacion')->only('index');
         $this->middleware('permission:crear-implicacion', ['only' => ['create','store']]);
         $this->middleware('permission:editar-implicacion', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-implicacion', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $implicacions = Implicacion::paginate();

    //     return view('implicacion.index', compact('implicacions'))
    //         ->with('i', (request()->input('page', 1) - 1) * $implicacions->perPage());
    // }

    const PAGINACION=10;
    public function index(Request $request)
    {
        $buscarpor=$request->get('buscarpor');
        $implicacions=Implicacion::where('nombreImplicacion','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
        
        return view('implicacion.index', compact('implicacions','buscarpor'))
        ->with('i', (request()->input('page', 1) - 1) * $implicacions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $implicacion = new Implicacion();
        return view('implicacion.create', compact('implicacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Implicacion::$rules);

        $implicacion = Implicacion::create($request->all());

        return redirect()->route('implicacions.index')
            ->with('success', 'Implicacion creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $implicacion = Implicacion::find($id);

        return view('implicacion.show', compact('implicacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $implicacion = Implicacion::find($id);

        return view('implicacion.edit', compact('implicacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Implicacion $implicacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Implicacion $implicacion)
    {
        request()->validate(Implicacion::$rules);

        $implicacion->update($request->all());

        return redirect()->route('implicacions.index')
            ->with('success', 'Implicación actualizada correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $implicacion = Implicacion::find($id)->delete();

        return redirect()->route('implicacions.index')
        ->with('eliminar', 'ok');
    }
}
