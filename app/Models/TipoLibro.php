<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoLibro
 *
 * @property $id
 * @property $nombreLibro
 * @property $descripcionLibro
 * @property $created_at
 * @property $updated_at
 *
 * @property LibroRevista[] $libroRevistas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoLibro extends Model
{
    
    static $rules = [
		'nombreLibro' => 'required',
		'descripcionLibro' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreLibro','descripcionLibro'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function libroRevistas()
    {
        return $this->hasMany('App\Models\LibroRevista', 'tipolibro_id', 'id');
    }
    

}
