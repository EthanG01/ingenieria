<?php

namespace App\Exports;

use App\Models\Involucrado;
use Maatwebsite\Excel\Concerns\FromCollection;

class InvolucradoExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Involucrado::all();
        return Involucrado::select("descripcionInvolucrado")->get();
    }
}
