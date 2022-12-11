<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Articulo
 *
 * @property $id
 * @property $indicador_id
 * @property $tipoarticulos_id
 * @property $autor_id
 * @property $nombreArt
 * @property $descripcionArt
 * @property $etiquetaArt
 * @property $doi
 * @property $documentoArt
 * @property $fechaPublicacionArt
 * @property $created_at
 * @property $updated_at
 *
 * @property Autor $autor
 * @property Indicador $indicador
 * @property TipoArticulo $tipoArticulo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Articulo extends Model
{
    
    static $rules = [
		'nombreArt' => 'required',
		'descripcionArt' => 'required',
	
		'doi' => 'required',
		'documentoArt' => 'required|mimes:pdf|max:10024',
		'fechaPublicacionArt' => 'required',
    ];

 
    protected $fillable = ['indicador_id','tipoarticulos_id','autor_id','etiqueta_id','nombreArt','descripcionArt','doi','documentoArt','fechaPublicacionArt'];

    use HasFactory;
    protected $table = 'articulos';
   
    public function autor(){
         return $this->belongsTo(Autor::class,'autor_id');
        // return $this->belongsTo('App\Models\Tema');
    } 
    public function etiqueta(){
      return $this->belongsTo(Etiqueta::class,'etiqueta_id');
     // return $this->belongsTo('App\Models\Tema');
 } 

    public function indicador(){
        return $this->belongsTo(Indicador::class,'indicador_id');
       // return $this->belongsTo('App\Models\Tema');
   } 
   public function tipoArticulo(){
    return $this->belongsTo(TipoArticulo::class,'tipoarticulos_id');
   // return $this->belongsTo('App\Models\Tema');
} 
}

