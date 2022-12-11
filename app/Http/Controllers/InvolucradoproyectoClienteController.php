<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Involucrado;
use App\Models\InvolucradoProyecto;
use App\Models\Persona;
use App\Models\Organizacion;
use App\Models\CantonOrganizacion;
use App\Models\TipoOrganizacion;
use App\Models\Provincia;
use App\Models\canton;
use App\Models\Proyecto;



class InvolucradoproyectoClienteController extends Controller
{
    public function index( )
    {

        $invop=  InvolucradoProyecto::where('id','!=',0)
        ->orderBy('id','asc')->get();

    

         return view('involucrado-proyecto.involucradoproyecto',['lista'=>$invop]);
    }
}