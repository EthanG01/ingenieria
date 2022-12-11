<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Involucrado extends Model
{
    static $rules = [
		'descripcionInvolucrado' => 'required',
        'persona_id' => 'required',
        'canton_organizacion_id' => 'required',
        'implicacion_id' => 'required',
        
    ];
    protected $fillable = ['persona_id','canton_organizacion_id','implicacion_id','descripcionInvolucrado'];

    use HasFactory;
    protected $table = 'involucrados';
   
    public function cantonorganizacion(){
        return $this->belongsTo(CantonOrganizacion::class,'canton_organizacion_id');
    }
    public function persona(){
        return $this->belongsTo(Persona::class,'persona_id');
    }
    public function implicacion(){
        return $this->belongsTo(Implicacion::class,'implicacion_id');
    }


}
