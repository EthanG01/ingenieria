<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Persona extends Model
{
    
    static $rules = [
		'nombrePersona' => 'required',
		'apellido1' => 'required',
		'apellido2' => 'required',
		'telefonoPersona' => 'required',
		'emailPersona' => 'required',
    ];

    protected $fillable = ['nombrePersona','apellido1','apellido2','telefonoPersona','emailPersona'];
    protected $table = 'personas';

    public function involucrados()
    {
        return $this->hasMany('App\Models\Involucrado', 'persona_id', 'id');
    }
    

}
