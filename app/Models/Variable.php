<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Variable extends Model
{
    
    static $rules = [
		'nombreVariable' => 'required',
    ];

    protected $fillable = ['dimension_id','nombreVariable'];
    protected $table = 'variables';

    use HasFactory;
   
    public function dimension(){
        return $this->belongsTo(Dimension::class,'dimension_id');
    }
    

}
