<?php

namespace App\Http\Controllers;

use App\Models\Dimension;
use App\Models\Indicador;
use App\Models\Variable;
use Illuminate\Http\Request;

/**
 * Class IndicadorController
 * @package App\Http\Controllers
 */
class IndicadorController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-indicador|crear-indicador|editar-indicador|borrar-indicador')->only('index');
         $this->middleware('permission:crear-indicador', ['only' => ['create','store']]);
         $this->middleware('permission:editar-indicador', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-indicador', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $indicadors = Indicador::paginate();

    //     return view('indicador.index', compact('indicadors'))
    //         ->with('i', (request()->input('page', 1) - 1) * $indicadors->perPage());
    // }

    const PAGINACION=10;
    public function index(Request $request)
    {
        $buscarpor=$request->get('buscarpor');
        $indicadors=Indicador::where('nombreIndicador','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
        
        return view('indicador.index', compact('indicadors','buscarpor'))
        ->with('i', (request()->input('page', 1) - 1) * $indicadors->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $indicador = new Indicador();
        $dimensions = Dimension::pluck('nombreDimension','id');
        $variables = Variable::pluck('nombreVariable','id');
        return view('indicador.create', compact('indicador','dimensions','variables'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Indicador::$rules);

        $indicador = Indicador::create($request->all());

        return redirect()->route('indicadors.index')
            ->with('success', 'Indicador creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $indicador = Indicador::find($id);

        return view('indicador.show', compact('indicador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $indicador = Indicador::find($id);
        $dimensions = Dimension::pluck('nombreDimension','id');
        $variables = Variable::pluck('nombreVariable','id');
        return view('indicador.edit', compact('indicador','dimensions','variables'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Indicador $indicador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Indicador $indicador)
    {
        request()->validate(Indicador::$rules);

        $indicador->update($request->all());

        return redirect()->route('indicadors.index')
            ->with('success', 'Indicador actualizado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $indicador = Indicador::find($id)->delete();

        return redirect()->route('indicadors.index')
            ->with('success', 'Indicador deleted successfully');
    }
}
