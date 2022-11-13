<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indicador extends Model
{
    
    static $rules = [
		'nombreIndicador' => 'required',
    ];

    protected $table = 'indicadors';
    protected $fillable = ['variable_id','nombreIndicador'];


    use HasFactory;
   
    public function variable(){
        return $this->belongsTo(Variable::class,'variable_id');
    }
   
   
  

}


