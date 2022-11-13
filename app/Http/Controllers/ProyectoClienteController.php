<?php

namespace App\Http\Controllers;
use App\Models\InvolucradoProyecto;
use Illuminate\Http\Request;

class ProyectoClienteController extends Controller
{
    public function index( )
    {

        $invo=InvolucradoProyecto::where('id','!=',0)
        ->orderBy('id','asc')->get();

    

         return view('proyecto.proyecto',['lista'=>$invo]);

       
    }
}
