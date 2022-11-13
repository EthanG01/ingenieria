<?php

namespace App\Exports;

use App\Models\Tesi;
use Maatwebsite\Excel\Concerns\FromCollection;

class TesisExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
      //  return Tesi::all();
      return Tesi::select("nombreTes","descripcionTes","fechaPublicacionTes")->get();
    }
}
