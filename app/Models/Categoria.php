<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Categoria
 *
 * @property $id
 * @property $nombreCategoria
 * @property $logo
 * @property $created_at
 * @property $updated_at
 *
 * @property Proyecto[] $proyectos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Categoria extends Model
{
    static $rules = [
		'nombreCategoria' => 'required',
		'logo' => 'required|image|mimes:jpeg,png,svg|max:1024',
    ];
    protected $fillable = ['nombreCategoria','logo'];
    protected $table = 'categorias';
  
}
