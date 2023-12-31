<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model 
{

    protected $table = 'categories';
    public $timestamps = true;
    protected $fillable = array('name');

    public function articales()
    {
        return $this->hasMany('App\Models\Articale');
    }

}