<?php

namespace App\Http\Controllers;

use App\Models\Galeria;
use App\Models\Tema;
use Illuminate\Http\Request;

/**
 * Class GaleriaController
 * @package App\Http\Controllers
 */
class GaleriaController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-galeria|crear-galeria|editar-galeria|borrar-galeria')->only('index');
         $this->middleware('permission:crear-galeria', ['only' => ['create','store']]);
         $this->middleware('permission:editar-galeria', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-galeria', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $galerias = Galeria::paginate();

    //     return view('galeria.index', compact('galerias'))
    //         ->with('i', (request()->input('page', 1) - 1) * $galerias->perPage());
    // }

    const PAGINACION=10;
    public function index(Request $request)
    {
        $buscarpor=$request->get('buscarpor');
        $galerias=Galeria::where('descripcionGaleria','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
        // $galerias=Galeria::where('tema_id','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
        // $temas = Tema::pluck('tema','id');
        return view('galeria.index', compact('galerias','buscarpor'))
        ->with('i', (request()->input('page', 1) - 1) * $galerias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $galeria = new Galeria();
        $temas = Tema::pluck('tema','id');
        return view('galeria.create', compact('galeria', 'temas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Galeria::$rules);

        $galeria = $request->all();

        if($imagen = $request->file('imagen')) {
            $rutaGuardarImg = 'imagenes/';
            $imagenGaleria = date('YmdHis'). "." .$imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenGaleria);
            $galeria['imagen'] = "$imagenGaleria";
        }
        Galeria::create($galeria);
        return redirect()->route('galerias.index')
            ->with('success', 'Galeria creado exitosamente.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $galeria = Galeria::find($id);

        return view('galeria.show', compact('galeria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galeria = Galeria::find($id);
        $temas = Tema::pluck('tema','id');
        return view('galeria.edit', compact('galeria', 'temas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Galeria $galeria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $galeria = Galeria::findOrFail($id);
        $galeria->descripcionGaleria  = $request->get('descripcionGaleria');
        $galeria->tema_id  = $request->get('tema_id');
        if($request->hasFile('imagen')){
            $file = $request->imagen;
            $file->move(public_path(). '/imagenes', $file->getClientOriginalName());
            $galeria->imagen = $file->getClientOriginalName();
        }

    $galeria->update(); 
        return redirect()->route('galerias.index')
            ->with('success', 'Galeria actualizado correctamente');
    }

   

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $galeria = Galeria::find($id)->delete();

        return redirect()->route('galerias.index')
        ->with('eliminar', 'ok');
    }
}