<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

/**
 * Class CategoriaController
 * @package App\Http\Controllers
 */
class CategoriaController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-categoria|crear-categoria|editar-categoria|borrar-categoria')->only('index');
        $this->middleware('permission:crear-categoria', ['only' => ['create','store']]);
        $this->middleware('permission:editar-categoria', ['only' => ['edit','update']]);
        $this->middleware('permission:borrar-categoria', ['only' => ['destroy']]);
   }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $categorias = Categoria::paginate();

    //     return view('categoria.index', compact('categorias'))
    //         ->with('i', (request()->input('page', 1) - 1) * $categorias->perPage());
    // }

    const PAGINACION=10;
    public function index(Request $request)
    {
        $buscarpor=$request->get('buscarpor');
        $categorias=Categoria::where('nombreCategoria','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
        
        return view('categoria.index', compact('categorias','buscarpor'))
        ->with('i', (request()->input('page', 1) - 1) * $categorias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria = new Categoria();
        return view('categoria.create', compact('categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        request()->validate(Categoria::$rules);
       $categoria = $request->all();
       
        if($logo = $request->file('logo')) {
            $rutaGuardarImg = 'logos/';
            $imagenCategoria = date('YmdHis'). "." .$logo->getClientOriginalExtension();
            $logo->move($rutaGuardarImg, $imagenCategoria);
            $categoria['logo'] = "$imagenCategoria";
        }
        Categoria::create($categoria);
        return redirect()->route('categorias.index')
            ->with('success', 'Categoria creado exitosamente.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoria = Categoria::find($id);

        return view('categoria.show', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

  

        return view('categoria.edit',['categoria' => Categoria::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Categoria $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $categoria = Categoria::findOrFail($id);
        $categoria->nombreCategoria  = $request->get('nombreCategoria');
            if($request->hasFile('logo')){
                $file = $request->logo;
                $file->move(public_path(). '/logos', $file->getClientOriginalName());
                $categoria->logo = $file->getClientOriginalName();
            }
   
        $categoria->update(); 
        return redirect('categorias/');

        // request()->validate(Categoria::$rules);

        // $categoria->update($request->all());

        // return redirect()->route('categorias.index')
        //     ->with('success', 'Categoria updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $categoria = Categoria::find($id)->delete();

        return redirect()->route('categorias.index')
        ->with('eliminar', 'ok');
    }
}
