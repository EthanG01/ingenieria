<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Editorial;
use App\Models\Etiqueta;
use App\Models\LibroRevista;
use App\Models\TipoLibro;
use Illuminate\Http\Request;

class LibroRevistaClienteController extends Controller
{
    public function index()
    {
        
        $articulos=LibroRevista::where('id','!=',0)
        ->orderBy('id','asc')->get();

    

         return view('libro-revista.libro',['lista'=>$articulos]);
       
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
