<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CantonOrganizacion extends Model
{

    static $rules = [
		'direccion' => 'required',
        'canton_id' => 'required',
        'organizacion_id' => 'required',
   
    ];
    protected $fillable = ['canton_id','direccion','organizacion_id'];

    use HasFactory;
    protected $table = 'canton_organizacions';
   
    public function canton(){
        return $this->belongsTo(Canton::class,'canton_id');
    }
    public function organizacion(){
        return $this->belongsTo(Organizacion::class,'organizacion_id');
    }

}
