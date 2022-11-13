<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Autor
 *
 * @property $id
 * @property $nombreAutor
 * @property $apellidoAutor1
 * @property $apellidoAutor2
 * @property $created_at
 * @property $updated_at
 *
 * @property LibroRevista[] $libroRevistas
 * @property Tesi[] $teses
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Autor extends Model
{
    
    static $rules = [
		'nombreAutor' => 'required',
		'apellidoAutor1' => 'required',
		'apellidoAutor2' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreAutor','apellidoAutor1','apellidoAutor2'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function libroRevistas()
    {
        return $this->hasMany('App\Models\LibroRevista', 'autor_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teses()
    {
        return $this->hasMany('App\Models\Tesi', 'autor_id', 'id');
    }
    

}
