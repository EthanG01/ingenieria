<?php

namespace App\Http\Controllers;

use App\Models\Involucrado;
use App\Models\Persona;
use App\Models\Implicacion;
use App\Models\CantonOrganizacion;
use App\Models\Organizacion;
use Illuminate\Http\Request;
use App\Exports\InvolucradoExport;
use Excel;
use PDF;

/**
 * Class InvolucradoController
 * @package App\Http\Controllers
 */
class InvolucradoController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-involucrado|crear-involucrado|editar-involucrado|borrar-involucrado')->only('index');
         $this->middleware('permission:crear-involucrado', ['only' => ['create','store']]);
         $this->middleware('permission:editar-involucrado', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-involucrado', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $involucrados = Involucrado::paginate();

    //     return view('involucrado.index', compact('involucrados'))
    //         ->with('i', (request()->input('page', 1) - 1) * $involucrados->perPage());
    // }

    const PAGINACION=10;
    public function index(Request $request)
    {
        $buscarpor=$request->get('buscarpor');
        $involucrados=Involucrado::where('descripcionInvolucrado','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
        
        return view('involucrado.index', compact('involucrados','buscarpor'))
        ->with('i', (request()->input('page', 1) - 1) * $involucrados->perPage());
    }

    public function pdf()
    {
        $involucrados = Involucrado::paginate(10000);

        $pdf = PDF::loadView('involucrado.pdf', compact('involucrados'));
        return $pdf->download('involucrado.pdf');
       
    }
    public function excel()
    {
        return Excel::download(new InvolucradoExport, 'involucrado-list.xls');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $involucrado = new Involucrado();
        $personas = Persona::pluck('nombrePersona','id');
        $implicacions = Implicacion::pluck('nombreImplicacion','id');
        $CantonOrganizacions = CantonOrganizacion::pluck('direccion', 'id');
         $Organizacions=Organizacion::pluck('nombreOrganizacion','id'); 
        return view('involucrado.create', compact('involucrado', 'personas', 'implicacions', 'CantonOrganizacions','Organizacions'));
    }
  


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Involucrado::$rules);

        $involucrado = Involucrado::create($request->all());

        return redirect()->route('involucrados.index')
            ->with('success', 'Involucrado creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $involucrado = Involucrado::find($id);

        return view('involucrado.show', compact('involucrado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Organizacions=Organizacion::pluck('nombreOrganizacion','id');
        $involucrado = Involucrado::find($id);
        $personas = Persona::pluck('nombrePersona','id');
        $implicacions = Implicacion::pluck('nombreImplicacion','id');
        $CantonOrganizacions = CantonOrganizacion::pluck('organizacion_id', 'id');
        return view('involucrado.edit', compact('involucrado', 'personas', 'implicacions', 'CantonOrganizacions','Organizacions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Involucrado $involucrado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Involucrado $involucrado)
    {
        request()->validate(Involucrado::$rules);

        $involucrado->update($request->all());

        return redirect()->route('involucrados.index')
            ->with('success', 'Involucrado actualizado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $involucrado = Involucrado::find($id)->delete();

        return redirect()->route('involucrados.index')
        ->with('eliminar', 'ok');
    }
}
