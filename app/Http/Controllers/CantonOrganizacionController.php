<?php

namespace App\Http\Controllers;

use App\Models\Canton;
use App\Models\CantonOrganizacion;
use App\Models\Organizacion;
use Illuminate\Http\Request;
use App\Exports\CantonOrgExport;
use Excel;
use PDF;

/**
 * Class CantonOrganizacionController
 * @package App\Http\Controllers
 */
class CantonOrganizacionController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-cantonOrg|crear-cantonOrg|editar-cantonOrg|borrar-cantonOrg')->only('index');
         $this->middleware('permission:crear-cantonOrg', ['only' => ['create','store']]);
         $this->middleware('permission:editar-cantonOrg', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-cantonOrg', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $cantonOrganizacions = CantonOrganizacion::paginate();

    //     return view('canton-organizacion.index', compact('cantonOrganizacions'))
    //         ->with('i', (request()->input('page', 1) - 1) * $cantonOrganizacions->perPage());
    // }

    const PAGINACION=10;
    public function index(Request $request)
    {
        $buscarpor=$request->get('buscarpor');
        $cantonOrganizacions=CantonOrganizacion::where('direccion','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
        
        return view('canton-organizacion.index', compact('cantonOrganizacions','buscarpor'))
        ->with('i', (request()->input('page', 1) - 1) * $cantonOrganizacions->perPage());
    }

    public function pdf()
    {
        $cantonOrganizacions = CantonOrganizacion::paginate(10000);

        $pdf = PDF::loadView('canton-organizacion.pdf', compact('cantonOrganizacions'));
        return $pdf->download('canton-organizacion.pdf');
       
    }

    public function excel()
    {
        return Excel::download(new CantonOrgExport, 'CantonOrg-list.xls');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cantonOrganizacion = new CantonOrganizacion();
        $cantons = Canton::pluck('nombreCanton','id');
        $organizacions = Organizacion::pluck('nombreorganizacion','id');
        return view('canton-organizacion.create', compact('cantonOrganizacion','organizacions','cantons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CantonOrganizacion::$rules);

        $cantonOrganizacion = CantonOrganizacion::create($request->all());

        return redirect()->route('canton-organizacions.index')
            ->with('success', 'CantonOrganizacion creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cantonOrganizacion = CantonOrganizacion::find($id);

        return view('canton-organizacion.show', compact('cantonOrganizacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cantons = Canton::pluck('nombreCanton','id');
        $organizacions = Organizacion::pluck('nombreOrganizacion','id');
        $cantonOrganizacion = CantonOrganizacion::find($id);

        return view('canton-organizacion.edit', compact('cantonOrganizacion','organizacions','cantons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CantonOrganizacion $cantonOrganizacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CantonOrganizacion $cantonOrganizacion)
    {
        request()->validate(CantonOrganizacion::$rules);

        $cantonOrganizacion->update($request->all());

        return redirect()->route('canton-organizacions.index')
            ->with('success', 'Cantón Organización actualizado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cantonOrganizacion = CantonOrganizacion::find($id)->delete();

        return redirect()->route('canton-organizacions.index')
        ->with('eliminar', 'ok');
    }
}
