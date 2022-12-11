<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Implicacion extends Model
{
    protected $fillable = ['nombreImplicacion'];
    static $rules = [
		'nombreImplicacion' => 'required',
    ];
    protected $table = 'implicacions';
}
