<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticaleClient extends Model 
{

    protected $table = 'articale_client';
    public $timestamps = true;
    protected $fillable = array('client_id', 'articale_id');

}