<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoOrganizacion extends Model
{
    protected $fillable = ['nombreTipoOrganizacion'];
    static $rules = [
		'nombreTipoOrganizacion' => 'required',
    ];
    protected $table = 'tipo_organizacions';
}
