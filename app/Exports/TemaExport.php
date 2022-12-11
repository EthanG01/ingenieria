<?php

namespace App\Exports;

use App\Models\Tema;
use Maatwebsite\Excel\Concerns\FromCollection;

class TemaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Tema::all();
        return Tema::select("id","tema")->get();
    }
}