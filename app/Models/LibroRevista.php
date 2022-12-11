<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class LibroRevista extends Model
{
    
    static $rules = [
		'edicion' => 'required',
		'titulo' => 'required',
		'cant_pag' => 'required',
		
		'documentoLR' => 'required|mimes:pdf|max:10024',
		'fechaPublicacionLR' => 'required',
    ];

    protected $fillable = ['editorial_id','tipolibro_id','autor_id','etiqueta_id','edicion','titulo','cant_pag','documentoLR','fechaPublicacionLR'];

   
    use HasFactory;
    protected $stable="libro_revistas";
   
    public function autor(){
         return $this->belongsTo(Autor::class,'autor_id');
        // return $this->belongsTo('App\Models\Tema');
    } 
    public function etiqueta(){
      return $this->belongsTo(Etiqueta::class,'etiqueta_id');
     // return $this->belongsTo('App\Models\Tema');
 } 

    public function editorial(){
        return $this->belongsTo(Editorial::class,'editorial_id');
       // return $this->belongsTo('App\Models\Tema');
   } 
   public function tipoLibro(){
    return $this->belongsTo(TipoLibro::class,'tipolibro_id');
   // return $this->belongsTo('App\Models\Tema');
} 
   
    

}
