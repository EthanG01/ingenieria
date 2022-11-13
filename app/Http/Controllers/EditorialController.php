<?php

namespace App\Http\Controllers;

use App\Models\Editorial;
use Illuminate\Http\Request;

/**
 * Class EditorialController
 * @package App\Http\Controllers
 */
class EditorialController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-editorial|crear-editorial|editar-editorial|borrar-editorial')->only('index');
         $this->middleware('permission:crear-editorial', ['only' => ['create','store']]);
         $this->middleware('permission:editar-editorial', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-editorial', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $editorials = Editorial::paginate();

    //     return view('editorial.index', compact('editorials'))
    //         ->with('i', (request()->input('page', 1) - 1) * $editorials->perPage());
    // }

    const PAGINACION=10;
    public function index(Request $request)
    {
        $buscarpor=$request->get('buscarpor');
        $editorials=Editorial::where('nombreEditorial','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
        
        return view('editorial.index', compact('editorials','buscarpor'))
        ->with('i', (request()->input('page', 1) - 1) * $editorials->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $editorial = new Editorial();
        return view('editorial.create', compact('editorial'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Editorial::$rules);

        $editorial = Editorial::create($request->all());

        return redirect()->route('editorials.index')
            ->with('success', 'Editorial creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $editorial = Editorial::find($id);

        return view('editorial.show', compact('editorial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editorial = Editorial::find($id);

        return view('editorial.edit', compact('editorial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Editorial $editorial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Editorial $editorial)
    {
        request()->validate(Editorial::$rules);

        $editorial->update($request->all());

        return redirect()->route('editorials.index')
            ->with('success', 'Editorial actualizado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $editorial = Editorial::find($id)->delete();

        return redirect()->route('editorials.index')
            ->with('success', 'Editorial deleted successfully');
    }
}
