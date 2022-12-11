<?php

namespace App\Http\Controllers;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoClienteController extends Controller
{
    public function index( )
    {

        $invo=Proyecto::where('id','!=',0)
        ->orderBy('id','asc')->get();

    

         return view('proyecto.proyecto',['lista'=>$invo]);

       
    }
}
