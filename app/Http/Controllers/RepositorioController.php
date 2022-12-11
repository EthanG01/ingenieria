<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Repositorio;
use App\Exports\RepositorioExport;
use Excel;
use PDF;
use App\Models\Carrera;
use App\Models\Persona;

class RepositorioController extends Controller
{
    protected $repositorios;

    function __construct()
    {
         $this->middleware('permission:ver-repositorio|crear-repositorio|editar-repositorio|borrar-repositorio|permission:habilitar-repositorio')->only('index');
         $this->middleware('permission:crear-repositorio', ['only' => ['create','store']]);
         $this->middleware('permission:editar-repositorio', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-repositorio', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    const PAGINACION=10;
    public function index(Request $request)
    {
        $buscarpor=$request->get('buscarpor');
        $repositorios=Repositorio::where('nombre','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
    
        return view('repositorio.index', compact('repositorios','buscarpor'))
        ->with('i', (request()->input('page', 1) - 1) * $repositorios->perPage());
    }

    public function pdf()
    {
        $repositorios = Repositorio::paginate(10000);

        $pdf = PDF::loadView('repositorio.pdf', compact('repositorios'));
        return $pdf->download('repositorio.pdf');
       
    }
    public function excel()
    {
        return Excel::download(new RepositorioExport, 'repositorios-list.xls');
    }
    public function estado($id)
    {
        $repositorios = Repositorio::FindOrFail($id);
        if($repositorios['estado'] == 1){
            $repositorios['estado'] = 0;
        }else{
            $repositorios['estado'] = 1;
        }
        $repositorios->update(); 
        return redirect()->route('repositorioNuevo.index')
        ->with('success', 'Estado del repositorio actualizado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $repositorios = Repositorio::find($id);

        return view('repositorio.show', compact('repositorios'));
    }
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $repositorios = new Repositorio();
        $carreras = Carrera::pluck('nombreCarrera','id');
        $personas = Persona::pluck('nombrePersona','id');
        return view('repositorio.create', compact('repositorios','carreras','personas'));
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['estado'] = 0;
   request()->validate(Repositorio::$rules);

             $repositorios = $request->all();

             

                if($RepositorioPDF = $request->file('documento')) {
                    $rutaGuardarRepositorio = 'repositorio/';
                    $documentoRepositorioPDF = date('YmdHis'). "." .$RepositorioPDF->getClientOriginalExtension();
                    $RepositorioPDF->move($rutaGuardarRepositorio, $documentoRepositorioPDF);

                    $repositorios['documento'] = "$documentoRepositorioPDF";
                }

                Repositorio::create($repositorios);
                      return redirect()->route('repositorioNuevo.index')
            ->with('success', 'Repositorio creado exitosamente.');
    
    } 
        /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $repositorios = Repositorio::find($id);
        $carreras = Carrera::pluck('nombreCarrera','id');
        $personas = Persona::pluck('nombrePersona','id');
        return view('repositorio.edit', compact('repositorios','carreras','personas'));
    }
        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Repositorio $libroRevista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
   
        $repositorios = Repositorio::findOrFail($id);
        $repositorios->persona_id= $request->get('persona_id');
        $repositorios->carrera_id= $request->get('carrera_id');
        $repositorios->nombre= $request->get('nombre');
        $repositorios->fecha= $request->get('fecha');
        $repositorios->descripcion= $request->get('descripcion');
        $repositorios->tipo= $request->get('tipo');

            if($request->hasFile('documento')){
                $file = $request->documento;
                $file->move(public_path(). '/repositorio', $file->getClientOriginalName());
                $repositorios->documento = $file->getClientOriginalName();
            }
    
        $repositorios->update(); 
        return redirect()->route('repositorioNuevo.index')
        ->with('success', 'Repositorio actualizado correctamente');

        
    }
    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $repositorios = Repositorio::FindOrFail($id);

        if (file_exists('repositorio/' . $repositorios['documento']) and !empty($repositorios['documento'])) {
			unlink('repositorio/' . $repositorios['documento']);
		}

        $repositorios->delete();

        return redirect()->route('repositorioNuevo.index')
            ->with('success', 'repositorios deleted successfully');
    }
}
