<?php

namespace App\Exports;

use App\Models\Articulo;
use App\Models\Autor;
use Maatwebsite\Excel\Concerns\FromCollection;

class ArticuloExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Articulo::all();
        return Articulo::select("nombreArt","descripcionArt","doi","fechaPublicacionArt")->get();
    }
}
