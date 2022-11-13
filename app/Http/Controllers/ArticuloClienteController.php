<?php

namespace App\Http\Controllers;
use App\Models\Articulo;
use App\Models\Autor;
use App\Models\Etiqueta;
use App\Models\Indicador;
use App\Models\TipoArticulo;
use Illuminate\Http\Request;

class ArticuloClienteController extends Controller
{
    public function index()
    {
        
        $articulos=Articulo::where('id','!=',0)
        ->orderBy('id','asc')->get();

    

         return view('articulo.articulo',['lista'=>$articulos]);
       
        // $galerias= Tema::join('galerias', 'temas.id', '=', 'galerias.tema_id')

        // ->get(['temas.tema', 'galerias.descripcionGaleria','galerias.imagen']);

    
    }
    public function list()
    {
        
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
 

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
