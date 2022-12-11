<?php

namespace App\Http\Controllers;

use App\Models\Canton;
use App\Models\Provincia;
use Illuminate\Http\Request;

/**
 * Class CantonController
 * @package App\Http\Controllers
 */
class CantonController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-canton|crear-canton|editar-canton|borrar-canton')->only('index');
         $this->middleware('permission:crear-canton', ['only' => ['create','store']]);
         $this->middleware('permission:editar-canton', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-canton', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $cantons = Canton::paginate();

    //     return view('canton.index', compact('cantons'))
    //         ->with('i', (request()->input('page', 1) - 1) * $cantons->perPage());
    // }

    const PAGINACION=10;
    public function index(Request $request)
    {
        $buscarpor=$request->get('buscarpor');
        $cantons=Canton::where('nombreCanton','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
        
        return view('canton.index', compact('cantons','buscarpor'))
        ->with('i', (request()->input('page', 1) - 1) * $cantons->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $canton = new Canton();
        $provincias = Provincia::pluck('nombreProvincia','id');
        return view('canton.create', compact('canton','provincias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Canton::$rules);

        $canton = Canton::create($request->all());

        return redirect()->route('cantons.index')
            ->with('success', 'Canton creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $canton = Canton::find($id);

        return view('canton.show', compact('canton'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $canton = Canton::find($id);
        $provincias = Provincia::pluck('nombreProvincia','id');
        return view('canton.edit', compact('canton','provincias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Canton $canton
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Canton $canton)
    {
        request()->validate(Canton::$rules);

        $canton->update($request->all());

        return redirect()->route('cantons.index')
            ->with('success', 'Cantón actualizado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $canton = Canton::find($id)->delete();

        return redirect()->route('cantons.index')
        ->with('eliminar', 'ok');
    }
}