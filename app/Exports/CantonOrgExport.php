<?php

namespace App\Exports;

use App\Models\CantonOrganizacion;
use Maatwebsite\Excel\Concerns\FromCollection;

class CantonOrgExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return CantonOrganizacion::all();
        return CantonOrganizacion::select("canton_id","direccion")->get();
    }
}
