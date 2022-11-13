<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Editorial;
use App\Models\Etiqueta;
use App\Models\LibroRevista;
use App\Models\TipoLibro;
use Illuminate\Http\Request;
use App\Exports\LibrosRevistaExport;
use Excel;
use PDF;

/**
 * Class LibroRevistaController
 * @package App\Http\Controllers
 */
class LibroRevistaController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-libroRevista|crear-libroRevista|editar-libroRevista|borrar-libroRevista')->only('index');
         $this->middleware('permission:crear-libroRevista', ['only' => ['create','store']]);
         $this->middleware('permission:editar-libroRevista', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-libroRevista', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $libroRevistas = LibroRevista::paginate();

    //     return view('libro-revista.index', compact('libroRevistas'))
    //         ->with('i', (request()->input('page', 1) - 1) * $libroRevistas->perPage());
    // }

    const PAGINACION=10;
    public function index(Request $request)
    {
        $buscarpor=$request->get('buscarpor');
        $libroRevistas=LibroRevista::where('titulo','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
        
        return view('libro-revista.index', compact('libroRevistas','buscarpor'))
        ->with('i', (request()->input('page', 1) - 1) * $libroRevistas->perPage());
    }

    public function pdf()
    {
        $libroRevistas = LibroRevista::paginate(10000);

        $pdf = PDF::loadView('libro-revista.pdf', compact('libroRevistas'));
        return $pdf->download('libro-revista.pdf');
       
    }
    public function excel()
    {
        return Excel::download(new LibrosRevistaExport, 'libroResvista-list.xls');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $libroRevista = new LibroRevista();
        $editorials = Editorial::pluck('nombreEditorial','id');
        $etiquetas = Etiqueta::pluck('nombreEtiqueta','id');
        $autors = Autor::pluck('nombreAutor','id');
        $tipolibros = TipoLibro::pluck('nombreLibro','id');
        return view('libro-revista.create', compact('libroRevista','etiquetas','editorials','autors','tipolibros'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   request()->validate(LibroRevista::$rules);
        
             $libroRevista = $request->all();
        
                if($documentoLR = $request->file('documentoLR')) {
                    $rutaGuardarLibro = 'libros/';
                    $documentoLRLibroRevista = date('YmdHis'). "." .$documentoLR->getClientOriginalExtension();
                    $documentoLR->move($rutaGuardarLibro, $documentoLRLibroRevista);
                    $libroRevista['documentoLR'] = "$documentoLRLibroRevista";
                }
                LibroRevista::create($libroRevista);
                      return redirect()->route('libro-revistas.index')
            ->with('success', 'LibroRevista creado exitosamente.');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $libroRevista = LibroRevista::find($id);

        return view('libro-revista.show', compact('libroRevista'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $etiquetas = Etiqueta::pluck('nombreEtiqueta','id');
        $libroRevista = LibroRevista::find($id);
        $editorials = Editorial::pluck('nombreEditorial','id');
        $autors = Autor::pluck('nombreAutor','id');
        $tipolibros = TipoLibro::pluck('nombreLibro','id');
        return view('libro-revista.edit', compact('libroRevista','etiquetas','editorials','autors','tipolibros'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  LibroRevista $libroRevista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
   
        $libroRevista = LibroRevista::findOrFail($id);
        $libroRevista->edicion= $request->get('edicion');
        $libroRevista->titulo= $request->get('titulo');
        $libroRevista->cant_pag= $request->get('cant_pag');
        $libroRevista->editorial_id= $request->get('editorial_id');
        $libroRevista->tipolibro_id= $request->get('tipolibro_id');
        $libroRevista->autor_id= $request->get('autor_id');
        $libroRevista->etiqueta_id= $request->get('etiqueta_id');
     

        $libroRevista->fechaPublicacionLR= $request->get('fechaPublicacionLR');
            if($request->hasFile('documentoLR')){
                $file = $request->documentoLR;
                $file->move(public_path(). '/libros', $file->getClientOriginalName());
                $libroRevista->documentoLR = $file->getClientOriginalName();
            }
    
        $libroRevista->update(); 
        return redirect()->route('libro-revistas.index')
        ->with('success', 'Libro/Revista actualizado correctamente');

        
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $libroRevista = LibroRevista::find($id)->delete();

        return redirect()->route('libro-revistas.index')
            ->with('success', 'LibroRevista deleted successfully');
    }
}
