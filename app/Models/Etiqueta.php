<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    
    static $rules = [
		'nombreEtiqueta' => 'required',
    ];
    protected $table = 'etiquetas';
    protected $fillable = ['nombreEtiqueta'];



}
