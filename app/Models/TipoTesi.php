<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class TipoTesi extends Model
{
    
    static $rules = [
		'nombreTesis' => 'required',
		'descripcionTesis' => 'required',
    ];

 
    protected $fillable = ['nombreTesis','descripcionTesis'];

    protected $table = 'tipo_tesis';
    

}
