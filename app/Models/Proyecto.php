<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $fillable = ['categoria_id','canton_id','nombreProyecto','fechaInicial','fechaFinalizacion','descripcionProyecto'];

    static $rules = [
		'nombreProyecto' => 'required',
		'fechaInicial' => 'required',
		'fechaFinalizacion' => 'required',
		'descripcionProyecto' => 'required',
        'categoria_id' => 'required',
		'canton_id' => 'required',
        
    ];

    use HasFactory;
    protected $table = 'proyectos';
    public function categoria(){
        return $this->belongsTo(Categoria::class,'categoria_id');
    }
    public function canton(){
        return $this->belongsTo(Canton::class,'canton_id');
    }
}
