<?php

namespace App\Http\Controllers;

use App\Models\Etiqueta;
use Illuminate\Http\Request;

/**
 * Class EtiquetaController
 * @package App\Http\Controllers
 */
class EtiquetaController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-etiqueta|crear-etiqueta|editar-etiqueta|borrar-etiqueta')->only('index');
         $this->middleware('permission:crear-etiqueta', ['only' => ['create','store']]);
         $this->middleware('permission:editar-etiqueta', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-etiqueta', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $etiquetas = Etiqueta::paginate();

    //     return view('etiqueta.index', compact('etiquetas'))
    //         ->with('i', (request()->input('page', 1) - 1) * $etiquetas->perPage());
    // }

    const PAGINACION=10;
    public function index(Request $request)
    {
        $buscarpor=$request->get('buscarpor');
        $etiquetas=Etiqueta::where('nombreEtiqueta','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
        
        return view('etiqueta.index', compact('etiquetas','buscarpor'))
        ->with('i', (request()->input('page', 1) - 1) * $etiquetas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $etiqueta = new Etiqueta();
        return view('etiqueta.create', compact('etiqueta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Etiqueta::$rules);

        $etiqueta = Etiqueta::create($request->all());

        return redirect()->route('etiquetas.index')
            ->with('success', 'Etiqueta creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $etiqueta = Etiqueta::find($id);

        return view('etiqueta.show', compact('etiqueta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $etiqueta = Etiqueta::find($id);

        return view('etiqueta.edit', compact('etiqueta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Etiqueta $etiqueta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etiqueta $etiqueta)
    {
        request()->validate(Etiqueta::$rules);

        $etiqueta->update($request->all());

        return redirect()->route('etiquetas.index')
            ->with('success', 'Etiqueta actualizado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $etiqueta = Etiqueta::find($id)->delete();

        return redirect()->route('etiquetas.index')
            ->with('success', 'Etiqueta deleted successfully');
    }
}
