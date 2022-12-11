<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Carrera;
use App\Models\Etiqueta;
use App\Models\Tesi;
use App\Models\TipoTesi;
use Illuminate\Http\Request;

class TesisClienteController extends Controller
{
    public function index()
    {
        
        $tesi=Tesi::where('id','!=',0)
        ->orderBy('id','asc')->get();

    

         return view('tesi.tesi',['lista'=>$tesi]);
       
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
