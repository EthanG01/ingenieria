<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
  static $rules = [
		'descripcionGaleria' => 'required',
        'imagen' => 'required|image|mimes:jpeg,png,svg|max: 8388608',
        'tema_id' => 'required',

    ];
    protected $fillable =
     ['descripcionGaleria','imagen','tema_id'];

    use HasFactory;
    protected $stable="galerias";
   
    public function tema(){
         return $this->belongsTo(Tema::class,'tema_id');
        // return $this->belongsTo('App\Models\Tema');
    } 


 
     /*
    public function temas(){
        return $this->belongsTo('App\Models\Tema');
    } */

}