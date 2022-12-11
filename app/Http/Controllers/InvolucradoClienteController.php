<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Involucrado;
use App\Models\Persona;
use App\Models\Organizacion;
use App\Models\CantonOrganizacion;
use App\Models\TipoOrganizacion;
use App\Models\Provincia;
use App\Models\canton;



class InvolucradoClienteController extends Controller
{
    // protected $CantOrg = '';
    // public function __construct(CantonOrganizacion $CantOrg)
    // {
    //     $this->CantOrg = $CantOrg;
  
    // }
    public function index( )
    {

        $invo=Involucrado::where('id','!=',0)
        ->orderBy('id','asc')->paginate(3);

    

        return view('involucrado.involucrado', compact('invo'));
       
        // ->orderBy('id','asc')->get();

        //  return view('involucrado.involucrado',['lista'=>$invo]);

        // $Suma= $CantOrgs -> concat($CantOrgs1);
        // $Provincia = Provincia::join('cantons', 'provincias.id', '=', 'cantons.provincia_id')
        // -> join('canton_organizacions','cantons.id','=','canton_organizacions.canton_id')
        // ->join('involucrados','canton_organizacions.id','=','involucrados.canton_organizacion_id')
        // ->get(['provincias.nombreProvincia','cantons.nombreCanton',
        // 'canton_organizacions.direccion','involucrados.descripcionInvolucrado']);

        // $Organizacion = TipoOrganizacion::join('organizacions','tipo_organizacions.id','=','organizacions.tipo_organizacion_id')
        // -> join('canton_organizacions','organizacions.id','=','canton_organizacions.organizacion_id')
        // ->join('involucrados','canton_organizacions.id','=','involucrados.canton_organizacion_id')
        // ->get(['tipo_organizacions.nombreTipoOrganizacion','organizacions.nombreOrganizacion','organizacions.fotoOrganizacion']);

        // $Persona = Persona::join('involucrados','personas.id','=','involucrados.persona_id')
        // ->get(['personas.nombrePersona','personas.apellido1','personas.apellido2'
        // ,'personas.telefonoPersona','personas.emailPersona']);
        
        // return view('involucrados.involucrado', compact('Organizacion'));
    }
}
