<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Carrera extends Model
{
    
    static $rules = [
		'nombreCarrera' => 'required',
		'descripcionCarrera' => 'required',
    ];

    protected $fillable = ['nombreCarrera','descripcionCarrera'];
    protected $table = 'carreras';
    

}
