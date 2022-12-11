<?php

namespace App\Exports;

use App\Models\Proyecto;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProyectoExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
       // return Proyecto::all();
       return Proyecto::select("nombreProyecto","fechaInicial","fechaFinalizacion","descripcionProyecto")->get();
    }
}
