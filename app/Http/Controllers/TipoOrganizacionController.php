<?php

namespace App\Http\Controllers;

use App\Models\TipoOrganizacion;
use Illuminate\Http\Request;

/**
 * Class TipoOrganizacionController
 * @package App\Http\Controllers
 */
class TipoOrganizacionController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-tipoOrg|crear-tipoOrg|editar-tipoOrg|borrar-tipoOrg')->only('index');
         $this->middleware('permission:crear-tipoOrg', ['only' => ['create','store']]);
         $this->middleware('permission:editar-tipoOrg', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-tipoOrg', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $tipoOrganizacions = TipoOrganizacion::paginate();

    //     return view('tipo-organizacion.index', compact('tipoOrganizacions'))
    //         ->with('i', (request()->input('page', 1) - 1) * $tipoOrganizacions->perPage());
    // }


    const PAGINACION=10;
    public function index(Request $request)
    {
        $buscarpor=$request->get('buscarpor');
        $tipoOrganizacions=TipoOrganizacion::where('nombreTipoOrganizacion','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
        
        return view('tipo-organizacion.index', compact('tipoOrganizacions','buscarpor'))
        ->with('i', (request()->input('page', 1) - 1) * $tipoOrganizacions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoOrganizacion = new TipoOrganizacion();
        return view('tipo-organizacion.create', compact('tipoOrganizacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TipoOrganizacion::$rules);

        $tipoOrganizacion = TipoOrganizacion::create($request->all());

        return redirect()->route('tipo-organizacions.index')
            ->with('success', 'TipoOrganizacion creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoOrganizacion = TipoOrganizacion::find($id);

        return view('tipo-organizacion.show', compact('tipoOrganizacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoOrganizacion = TipoOrganizacion::find($id);

        return view('tipo-organizacion.edit', compact('tipoOrganizacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TipoOrganizacion $tipoOrganizacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoOrganizacion $tipoOrganizacion)
    {
        request()->validate(TipoOrganizacion::$rules);

        $tipoOrganizacion->update($request->all());

        return redirect()->route('tipo-organizacions.index')
            ->with('success', 'Tipo organización actualizado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoOrganizacion = TipoOrganizacion::find($id)->delete();

        return redirect()->route('tipo-organizacions.index')
            ->with('success', 'TipoOrganizacion deleted successfully');
    }
}
