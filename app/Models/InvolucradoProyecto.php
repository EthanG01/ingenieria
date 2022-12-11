<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvolucradoProyecto extends Model
{

    protected $fillable = ['involucrados_id','proyecto_id'];
    static $rules = [
		
        'involucrados_id' => 'required',
        'proyecto_id' => 'required',


    ];

    use HasFactory;
    protected $table = 'involucrado_proyectos';
    public function involucrado(){
        return $this->belongsTo(Involucrado::class,'involucrados_id');
    }
    public function proyecto(){
        return $this->belongsTo(Proyecto::class,'proyecto_id');
    }
}