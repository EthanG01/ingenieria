<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Repositorio extends Model
{

    static $rules = [
    'persona_id' => 'required',
    'carrera_id' => 'required',
		'nombre' => 'required',
		'fecha' => 'required',
		'descripcion' => 'required',
		'tipo' => 'required',
    'documento' => 'required|mimes:pdf|max:10024',
		'estado' => 'required',
        
    ];
    protected $fillable = ['persona_id', 'carrera_id', 'nombre','fecha','descripcion','tipo','documento', 'estado'];

    use HasFactory;
    protected $stable="repositorios";

    public function persona(){
      return $this->belongsTo(Persona::class,'persona_id');
    } 
    public function carrera(){
      return $this->belongsTo(Carrera::class,'carrera_id');
    } 
}
