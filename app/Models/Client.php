<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model 
{

    protected $table = 'clients';
    public $timestamps = true;
    protected $fillable = array('name', 'email', 'password', 'phone', 'd_o_b', 'last_donation_date', 'pin_code', 'blood_type_id', 'city_id', 'api_token');

    public function bloodType()
    {
        return $this->belongsTo('App\Models\BloodType');
    }

    public function cities()
    {
        return $this->belongsTo('App\Models\City');
    }

    public function donation_request()
    {
        return $this->hasMany('App\Models\DonationRequest');
    }

    public function contact()
    {
        return $this->hasMany('App\Models\Contact');
    }

}