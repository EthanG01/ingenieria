<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Autor;
use App\Models\Etiqueta;
use App\Models\Indicador;
use App\Models\TipoArticulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Exports\ArticuloExport;
use Excel;
use PDF;

/**
 * Class ArticuloController
 * @package App\Http\Controllers
 */
class ArticuloController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-articulo|crear-articulo|editar-articulo|borrar-articulo')->only('index');
         $this->middleware('permission:crear-articulo', ['only' => ['create','store']]);
         $this->middleware('permission:editar-articulo', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-articulo', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $articulos = Articulo::paginate();

    //     return view('articulo.index', compact('articulos'))
    //         ->with('i', (request()->input('page', 1) - 1) * $articulos->perPage());
    // }

    const PAGINACION=10;
    public function index(Request $request)
    {
        $buscarpor=$request->get('buscarpor');
        $articulos=Articulo::where('nombreArt','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
        
        return view('articulo.index', compact('articulos','buscarpor'))
        ->with('i', (request()->input('page', 1) - 1) * $articulos->perPage());
    }

    public function pdf()
    {
        $articulos = Articulo::paginate(10000);

        $pdf = PDF::loadView('articulo.pdf', compact('articulos'));
        return $pdf->download('articulo.pdf');
       
    }
    public function excel()
    {
        return Excel::download(new ArticuloExport, 'articulos-list.xls');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articulo = new Articulo();
        $etiquetas = Etiqueta::pluck('nombreEtiqueta','id');
        $indicadors = Indicador::pluck('nombreIndicador','id');
        $autors = Autor::pluck('nombreAutor','id');
        $tipoarticulos = TipoArticulo::pluck('nombreArticulo','id');
        return view('articulo.create', compact('articulo','etiquetas','indicadors','autors','tipoarticulos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Articulo::$rules);
            $articulo = $request->all(); 
               if($documentoArt = $request->file('documentoArt')) {
                   $rutaGuardarArticulos = 'archivoArticulo/';
                   $documentoArtArticulo = date('YmdHis'). "." .$documentoArt->getClientOriginalExtension();
                   $documentoArt->move($rutaGuardarArticulos, $documentoArtArticulo);
                   $tesi['documentoArt'] = "$documentoArtArticulo";
               }
               Articulo::create($articulo);
                 return redirect()->route('articulos.index')
        ->with('success', 'Articulo creado exitosamente.');



    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articulo = Articulo::find($id);

        return view('articulo.show', compact('articulo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articulo = Articulo::find($id);
        $etiquetas = Etiqueta::pluck('nombreEtiqueta','id');
        $indicadors = Indicador::pluck('nombreIndicador','id');
        $autors = Autor::pluck('nombreAutor','id');
        $tipoarticulos = TipoArticulo::pluck('nombreArticulo','id');
        return view('articulo.edit', compact('articulo','etiquetas','indicadors','tipoarticulos','autors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Articulo $articulo
     * @return \Illuminate\Http\Response
     */
  
        public function update(Request $request, $id)
        {
      
                $articulo = Articulo::findOrFail($id);
                $articulo->nombreArt= $request->get('nombreArt');
                $articulo->descripcionArt= $request->get('descripcionArt');
                $articulo->doi= $request->get('doi');
                $articulo->tipoarticulos_id= $request->get('tipoarticulos_id');
                $articulo->autor_id= $request->get('autor_id');
                $articulo->etiqueta_id= $request->get('etiqueta_id');
                $articulo->indicador_id= $request->get('indicador_id');
                $articulo->fechaPublicacionArt= $request->get('fechaPublicacionArt');
             
                    if($request->hasFile('documentoArt')){
                        $file = $request->documentoArt;
                        $file->move(public_path(). '/archivoArticulo', $file->getClientOriginalName());
                        $articulo->documentoArt = $file->getClientOriginalName();
                    }
            
                $articulo->update(); 
        return redirect()->route('articulos.index')
            ->with('success', 'Artículo editado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $articulo = Articulo::find($id)->delete();

        return redirect()->route('articulos.index')
            ->with('success', 'Articulo deleted successfully');
    }
}
