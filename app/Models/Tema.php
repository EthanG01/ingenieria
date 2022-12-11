<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Tema extends Model
{
    
    static $rules = [
		'tema' => 'required',
    ];

    
    protected $fillable = ['tema'];
    protected $table = 'temas';
    public function galerias()
    {
        return $this->hasMany('App\Models\Galeria', 'tema_id', 'id');
    }
    

}
