<?php

namespace App\Http\Controllers;

use App\Models\TipoArticulo;
use Illuminate\Http\Request;

/**
 * Class TipoArticuloController
 * @package App\Http\Controllers
 */
class TipoArticuloController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-tipoArticulo|crear-tipoArticulo|editar-tipoArticulo|borrar-tipoArticulo')->only('index');
         $this->middleware('permission:crear-tipoArticulo', ['only' => ['create','store']]);
         $this->middleware('permission:editar-tipoArticulo', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-tipoArticulo', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $tipoArticulos = TipoArticulo::paginate();

    //     return view('tipo-articulo.index', compact('tipoArticulos'))
    //         ->with('i', (request()->input('page', 1) - 1) * $tipoArticulos->perPage());
    // }

    const PAGINACION=10;
    public function index(Request $request)
    {
        $buscarpor=$request->get('buscarpor');
        $tipoArticulos=TipoArticulo::where('nombreArticulo','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
        
        return view('tipo-articulo.index', compact('tipoArticulos','buscarpor'))
        ->with('i', (request()->input('page', 1) - 1) * $tipoArticulos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoArticulo = new TipoArticulo();
        return view('tipo-articulo.create', compact('tipoArticulo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TipoArticulo::$rules);

        $tipoArticulo = TipoArticulo::create($request->all());

        return redirect()->route('tipo-articulos.index')
            ->with('success', 'TipoArticulo creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoArticulo = TipoArticulo::find($id);

        return view('tipo-articulo.show', compact('tipoArticulo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoArticulo = TipoArticulo::find($id);

        return view('tipo-articulo.edit', compact('tipoArticulo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TipoArticulo $tipoArticulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoArticulo $tipoArticulo)
    {
        request()->validate(TipoArticulo::$rules);

        $tipoArticulo->update($request->all());

        return redirect()->route('tipo-articulos.index')
            ->with('success', 'Tipo artículo actualizado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoArticulo = TipoArticulo::find($id)->delete();

        return redirect()->route('tipo-articulos.index')
            ->with('success', 'TipoArticulo deleted successfully');
    }
}
