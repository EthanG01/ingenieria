<?php

namespace App\Http\Controllers;

use App\Models\Provincia;
use Illuminate\Http\Request;

/**
 * Class ProvinciaController
 * @package App\Http\Controllers
 */
class ProvinciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:ver-pronvincia|crear-pronvincia|editar-pronvincia|borrar-pronvincia')->only('index');
         $this->middleware('permission:crear-pronvincia', ['only' => ['create','store']]);
         $this->middleware('permission:editar-pronvincia', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-pronvincia', ['only' => ['destroy']]);
    }
    
    // public function index()
    // {
    //     $provincias = Provincia::paginate();

    //     return view('provincia.index', compact('provincias'))
    //         ->with('i', (request()->input('page', 1) - 1) * $provincias->perPage());
    // }

    const PAGINACION=10;
    public function index(Request $request)
    {
        $buscarpor=$request->get('buscarpor');
        $provincias=Provincia::where('nombreProvincia','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
        
        return view('provincia.index', compact('provincias','buscarpor'))
        ->with('i', (request()->input('page', 1) - 1) * $provincias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provincia = new Provincia();
        return view('provincia.create', compact('provincia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Provincia::$rules);

        $provincia = Provincia::create($request->all());

        return redirect()->route('provincias.index')
            ->with('success', 'Provincia creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $provincia = Provincia::find($id);

        return view('provincia.show', compact('provincia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $provincia = Provincia::find($id);

        return view('provincia.edit', compact('provincia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Provincia $provincia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provincia $provincia)
    {
        request()->validate(Provincia::$rules);

        $provincia->update($request->all());

        return redirect()->route('provincias.index')
            ->with('success', 'Provincia actualizada correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $provincia = Provincia::find($id)->delete();

        return redirect()->route('provincias.index')
        ->with('eliminar', 'ok');
    }
}
