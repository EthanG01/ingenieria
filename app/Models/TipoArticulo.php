<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoArticulo extends Model
{
    
    static $rules = [
		'nombreArticulo' => 'required',
		'descripcionArticulo' => 'required',
    ];

    protected $fillable = ['nombreArticulo','descripcionArticulo'];
    protected $table = 'tipo_articulos';
  

}
