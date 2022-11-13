<?php

namespace App\Http\Controllers;

use App\Models\Dimension;
use App\Models\Variable;
use Illuminate\Http\Request;

/**
 * Class VariableController
 * @package App\Http\Controllers
 */
class VariableController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-variable|crear-variable|editar-variable|borrar-variable')->only('index');
         $this->middleware('permission:crear-variable', ['only' => ['create','store']]);
         $this->middleware('permission:editar-variable', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-variable', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $variables = Variable::paginate();
       
    //     return view('variable.index', compact('variables'))
    //         ->with('i', (request()->input('page', 1) - 1) * $variables->perPage());
    // }

    const PAGINACION=10;
    public function index(Request $request)
    {
        $buscarpor=$request->get('buscarpor');
        $variables=Variable::where('nombreVariable','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
        
        return view('variable.index', compact('variables','buscarpor'))
        ->with('i', (request()->input('page', 1) - 1) * $variables->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $variable = new Variable();
        $dimensions = Dimension::pluck('nombreDimension','id');
        return view('variable.create', compact('variable','dimensions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Variable::$rules);

        $variable = Variable::create($request->all());

        return redirect()->route('variables.index')
            ->with('success', 'Variable creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $variable = Variable::find($id);

        return view('variable.show', compact('variable'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $variable = Variable::find($id);
        $dimensions = Dimension::pluck('nombreDimension','id');
        return view('variable.edit', compact('variable','dimensions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Variable $variable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Variable $variable)
    {
        request()->validate(Variable::$rules);

        $variable->update($request->all());

        return redirect()->route('variables.index')
            ->with('success', 'Variable actualizada correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $variable = Variable::find($id)->delete();

        return redirect()->route('variables.index')
            ->with('success', 'Variable deleted successfully');
    }
}
