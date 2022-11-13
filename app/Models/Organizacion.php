<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizacion extends Model
{

  static $rules = [
		'nombreOrganizacion' => 'required',
        'fotoOrganizacion' => 'required|image|mimes:jpeg,png,svg|max:1024',
        'tipo_organizacion_id' => 'required',
   
    ];
   
    protected $fillable = ['tipo_organizacion_id','nombreOrganizacion','fotoOrganizacion',];

    use HasFactory;
    protected $table = 'organizacions';
   
    public function tipoOrganizacion(){
        return $this->belongsTo(TipoOrganizacion::class,'tipo_organizacion_id');
    }
    
}
