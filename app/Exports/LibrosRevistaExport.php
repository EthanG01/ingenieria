<?php

namespace App\Exports;

use App\Models\LibroRevista;
use Maatwebsite\Excel\Concerns\FromCollection;

class LibrosRevistaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return LibroRevista::all();
        return LibroRevista::select("edicion","titulo","cant_pag","fechaPublicacionLR")->get();
    }
}
