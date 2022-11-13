<?php

namespace App\Http\Controllers;

use App\Models\Dimension;
use Illuminate\Http\Request;

/**
 * Class DimensionController
 * @package App\Http\Controllers
 */
class DimensionController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-dimension|crear-dimension|editar-dimension|borrar-dimension')->only('index');
         $this->middleware('permission:crear-dimension', ['only' => ['create','store']]);
         $this->middleware('permission:editar-dimension', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-dimension', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $dimensions = Dimension::paginate();

    //     return view('dimension.index', compact('dimensions'))
    //         ->with('i', (request()->input('page', 1) - 1) * $dimensions->perPage());
    // }

    const PAGINACION=10;
    public function index(Request $request)
    {
        $buscarpor=$request->get('buscarpor');
        $dimensions=Dimension::where('nombreDimension','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
        
        return view('dimension.index', compact('dimensions','buscarpor'))
        ->with('i', (request()->input('page', 1) - 1) * $dimensions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dimension = new Dimension();
        
        return view('dimension.create', compact('dimension'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Dimension::$rules);

        $dimension = Dimension::create($request->all());

        return redirect()->route('dimensions.index')
            ->with('success', 'Dimension creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dimension = Dimension::find($id);

        return view('dimension.show', compact('dimension'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dimension = Dimension::find($id);

        return view('dimension.edit', compact('dimension'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Dimension $dimension
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dimension $dimension)
    {
        request()->validate(Dimension::$rules);

        $dimension->update($request->all());

        return redirect()->route('dimensions.index')
            ->with('success', 'Dimensión actualizado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $dimension = Dimension::find($id)->delete();

        return redirect()->route('dimensions.index')
            ->with('success', 'Dimension deleted successfully');
    }
}
