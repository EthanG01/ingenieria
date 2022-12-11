<?php

namespace App\Http\Controllers;

use App\Models\TipoLibro;
use Illuminate\Http\Request;

/**
 * Class TipoLibroController
 * @package App\Http\Controllers
 */
class TipoLibroController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-tipoLibro|crear-tipoLibro|editar-tipoLibro|borrar-tipoLibro')->only('index');
         $this->middleware('permission:crear-tipoLibro', ['only' => ['create','store']]);
         $this->middleware('permission:editar-tipoLibro', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-tipoLibro', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $tipoLibros = TipoLibro::paginate();

    //     return view('tipo-libro.index', compact('tipoLibros'))
    //         ->with('i', (request()->input('page', 1) - 1) * $tipoLibros->perPage());
    // }

    const PAGINACION=10;
    public function index(Request $request)
    {
        $buscarpor=$request->get('buscarpor');
        $tipoLibros=TipoLibro::where('nombreLibro','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
        
        return view('tipo-libro.index', compact('tipoLibros','buscarpor'))
        ->with('i', (request()->input('page', 1) - 1) * $tipoLibros->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoLibro = new TipoLibro();
        return view('tipo-libro.create', compact('tipoLibro'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TipoLibro::$rules);

        $tipoLibro = TipoLibro::create($request->all());

        return redirect()->route('tipo-libros.index')
            ->with('success', 'TipoLibro creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoLibro = TipoLibro::find($id);

        return view('tipo-libro.show', compact('tipoLibro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoLibro = TipoLibro::find($id);

        return view('tipo-libro.edit', compact('tipoLibro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TipoLibro $tipoLibro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoLibro $tipoLibro)
    {
        request()->validate(TipoLibro::$rules);

        $tipoLibro->update($request->all());

        return redirect()->route('tipo-libros.index')
            ->with('success', 'Tipo libro/revista actualizado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoLibro = TipoLibro::find($id)->delete();

        return redirect()->route('tipo-libros.index')
            ->with('success', 'TipoLibro deleted successfully');
    }
}
