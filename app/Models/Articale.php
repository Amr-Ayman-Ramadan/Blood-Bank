<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articale extends Model 
{

    protected $table = 'articales';
    public $timestamps = true;
    protected $fillable = array('title', 'image', 'content', 'category_id');

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

}