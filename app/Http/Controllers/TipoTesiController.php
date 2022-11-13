<?php

namespace App\Http\Controllers;

use App\Models\TipoTesi;
use Illuminate\Http\Request;

/**
 * Class TipoTesiController
 * @package App\Http\Controllers
 */
class TipoTesiController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-tipoTesis|crear-tipoTesis|editar-tipoTesis|borrar-tipoTesis')->only('index');
         $this->middleware('permission:crear-tipoTesis', ['only' => ['create','store']]);
         $this->middleware('permission:editar-tipoTesis', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-tipoTesis', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $tipoTesis = TipoTesi::paginate();

    //     return view('tipo-tesi.index', compact('tipoTesis'))
    //         ->with('i', (request()->input('page', 1) - 1) * $tipoTesis->perPage());
    // }

    const PAGINACION=10;
    public function index(Request $request)
    {
        $buscarpor=$request->get('buscarpor');
        $tipoTesis=TipoTesi::where('nombreTesis','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
        
        return view('tipo-tesi.index', compact('tipoTesis','buscarpor'))
        ->with('i', (request()->input('page', 1) - 1) * $tipoTesis->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoTesi = new TipoTesi();
        return view('tipo-tesi.create', compact('tipoTesi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TipoTesi::$rules);

        $tipoTesi = TipoTesi::create($request->all());

        return redirect()->route('tipo-tesis.index')
            ->with('success', 'TipoTesi creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoTesi = TipoTesi::find($id);

        return view('tipo-tesi.show', compact('tipoTesi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoTesi = TipoTesi::find($id);

        return view('tipo-tesi.edit', compact('tipoTesi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TipoTesi $tipoTesi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoTesi $tipoTesi)
    {
        request()->validate(TipoTesi::$rules);

        $tipoTesi->update($request->all());

        return redirect()->route('tipo-tesis.index')
            ->with('success', 'Tipo tesis actualizado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoTesi = TipoTesi::find($id)->delete();

        return redirect()->route('tipo-tesis.index')
            ->with('success', 'TipoTesi deleted successfully');
    }
}
