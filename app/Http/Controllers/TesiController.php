<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Carrera;
use App\Models\Etiqueta;
use App\Models\Tesi;
use App\Models\TipoTesi;
use Illuminate\Http\Request;
use App\Exports\TesisExport;
use Excel;
use PDF;

/**
 * Class TesiController
 * @package App\Http\Controllers
 */
class TesiController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-tesis|crear-tesis|editar-tesis|borrar-tesis')->only('index');
         $this->middleware('permission:crear-tesis', ['only' => ['create','store']]);
         $this->middleware('permission:editar-tesis', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-tesis', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $tesis = Tesi::paginate();

    //     return view('tesi.index', compact('tesis'))
    //         ->with('i', (request()->input('page', 1) - 1) * $tesis->perPage());
    // }

    const PAGINACION=10;
    public function index(Request $request)
    {
        $buscarpor=$request->get('buscarpor');
        $tesis=Tesi::where('nombreTes','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
        
        return view('tesi.index', compact('tesis','buscarpor'))
        ->with('i', (request()->input('page', 1) - 1) * $tesis->perPage());
    }

    public function pdf()
    {
        $tesis = Tesi::paginate(10000);

        $pdf = PDF::loadView('tesi.pdf', compact('tesis'));
        return $pdf->download('tesi.pdf');
       
    }
    public function excel()
    {
        return Excel::download(new TesisExport, 'tesis-list.xls');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tesi = new Tesi();
        $etiquetas = Etiqueta::pluck('nombreEtiqueta','id');
        $carreras = Carrera::pluck('nombreCarrera','id');
        $autors = Autor::pluck('nombreAutor','id');
        $tipotesis = TipoTesi::pluck('nombreTesis','id');
    return view('tesi.create', compact('tesi','autors','etiquetas','tipotesis','carreras'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tesi::$rules);
            $tesi = $request->all();
       
               if($documentoTes = $request->file('documentoTes')) {
                   $rutaGuardarTesis = 'archivosTes/';
                   $documentoTesTesis = date('YmdHis'). "." .$documentoTes->getClientOriginalExtension();
                   $documentoTes->move($rutaGuardarTesis, $documentoTesTesis);
                   $tesi['documentoTes'] = "$documentoTesTesis";
               }
               Tesi::create($tesi);
                 return redirect()->route('tesis.index')
        ->with('success', 'Tesi creado exitosamente.');



    }
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tesi = Tesi::find($id);

        return view('tesi.show', compact('tesi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tesi = Tesi::find($id);
        $etiquetas = Etiqueta::pluck('nombreEtiqueta','id');
        $carreras = Carrera::pluck('nombreCarrera','id');
        $autors = Autor::pluck('nombreAutor','id');
        $tipotesis = TipoTesi::pluck('nombreTesis','id');
        return view('tesi.edit', compact('tesi','autors','etiquetas','tipotesis','carreras'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tesi $tesi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          
            $tesi = Tesi::findOrFail($id);
            $tesi->nombreTes= $request->get('nombreTes');
            $tesi->descripcionTes= $request->get('descripcionTes');
            $tesi->carrera_id= $request->get('carrera_id');
            $tesi->tipotesis_id= $request->get('tipotesis_id');
            $tesi->autor_id= $request->get('autor_id');
            $tesi->etiqueta_id= $request->get('etiqueta_id');
            $tesi->fechaPublicacionTes= $request->get('fechaPublicacionTes');
                if($request->hasFile('documentoTes')){
                    $file = $request->documentoTes;
                    $file->move(public_path(). '/archivosTes', $file->getClientOriginalName());
                    $tesi->documentoTes = $file->getClientOriginalName();
                }
        
            $tesi->update(); 
            return redirect()->route('tesis.index')
            ->with('success', 'Tesis actualizada correctamente');



    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tesi = Tesi::find($id)->delete();

        return redirect()->route('tesis.index')
            ->with('success', 'Tesi deleted successfully');
    }
}
