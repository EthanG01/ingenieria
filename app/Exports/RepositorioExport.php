<?php

namespace App\Exports;

use App\Models\Repositorio;
use Maatwebsite\Excel\Concerns\FromCollection;

class RepositorioExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
      //  return Tesi::all();
      return Repositorio::select("nombre","fecha","tipo","descripcion")->get();
    }
}
