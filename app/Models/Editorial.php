<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Editorial
 *
 * @property $id
 * @property $nombreEditorial
 * @property $descripcionEditorial
 * @property $created_at
 * @property $updated_at
 *
 * @property LibroRevista[] $libroRevistas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Editorial extends Model
{
    
    static $rules = [
		'nombreEditorial' => 'required',
		'descripcionEditorial' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreEditorial','descripcionEditorial'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function libroRevistas()
    {
        return $this->hasMany('App\Models\LibroRevista', 'editorial_id', 'id');
    }
    

}
