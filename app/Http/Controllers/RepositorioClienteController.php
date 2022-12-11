<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Repositorio;

class RepositorioClienteController extends Controller
{
    const PAGINACION=10;

    public function index()
    {

        $repositorios=Repositorio::where('id','!=',0,)
        ->orderBy('id','asc')->get();

         return view('repositorio.repositorio',['lista'=>$repositorios]);
    }

    
    public function filter(Request $request, $filtro)
    {
        $buscarpor= $filtro;
        $repositorios=Repositorio::where('tipo','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
    
        return view('repositorio.repositorio',['lista'=>$repositorios])
        ->with('i', (request()->input('page', 1) - 1) * $repositorios->perPage());
    }
}
