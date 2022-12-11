<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dimension extends Model
{
    
    static $rules = [
		'nombreDimension' => 'required',
    ];

    protected $fillable = ['nombreDimension'];
    protected $table = 'dimensions';
    
    public function variables()
    {
        return $this->hasMany('App\Models\Variable', 'dimension_id', 'id');
    }
    

}
