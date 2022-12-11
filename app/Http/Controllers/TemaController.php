<?php

namespace App\Http\Controllers;

use App\Models\Tema;
use Illuminate\Http\Request;
//use Maatwebside\Excel\Facades\Excel;
use App\Exports\TemaExport;
use PDF;
use Excel;
// use Barryvdh\Snappy\Facades\SnappyPdf;

/**
 * Class TemaController
 * @package App\Http\Controllers
 */
class TemaController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-tema|crear-tema|editar-tema|borrar-tema')->only('index');
         $this->middleware('permission:crear-tema', ['only' => ['create','store']]);
         $this->middleware('permission:editar-tema', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-tema', ['only' => ['destroy']]);
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
        $temas=Tema::where('tema','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
        // $temas = Tema::paginate();

        return view('tema.index', compact('temas','buscarpor'))
        ->with('i', (request()->input('page', 1) - 1) * $temas->perPage());
    }

    // public function index()
    // {
    //     $temas = Tema::paginate();

    //     return view('tema.index', compact('temas'))
    //         ->with('i', (request()->input('page', 1) - 1) * $temas->perPage());
    // }


    public function pdf()
    {
        $temas = Tema::paginate(10000);
        // $pdf = SnappyPdf::loadView('tema.pdf', compact('temas'));
        // return $pdf->inline('tema.pdf');

        $pdf = PDF::loadView('tema.pdf', compact('temas'));
        return $pdf->download('tema.pdf');
       
    }

    public function excel()
    {
        return Excel::download(new TemaExport, 'tema-list.xls');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tema = new Tema();
        return view('tema.create', compact('tema'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tema::$rules);

        $tema = Tema::create($request->all());

        return redirect()->route('temas.index')
            ->with('success', 'Tema creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tema = Tema::find($id);

        return view('tema.show', compact('tema'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tema = Tema::find($id);

        return view('tema.edit', compact('tema'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tema $tema
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tema $tema)
    {
        request()->validate(Tema::$rules);

        $tema->update($request->all());

        return redirect()->route('temas.index')
            ->with('success', 'Tema actualizado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tema = Tema::find($id)->delete();

        return redirect()->route('temas.index')
        ->with('eliminar', 'ok');
    }
}
