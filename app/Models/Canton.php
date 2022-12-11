<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Canton extends Model
{
     protected $fillable = ['provincia_id','nombreCanton'];
    static $rules = [
		'nombreCanton' => 'required',
    'provincia_id' => 'required',
    ];

    use HasFactory;
    protected $table = 'cantons';
   
    public function provincia(){
        return $this->belongsTo(Provincia::class,'provincia_id');
    }
}