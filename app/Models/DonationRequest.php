<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonationRequest extends Model 
{

    protected $table = 'donation_requests';
    public $timestamps = true;
    protected $fillable = array('patient_name', 'patient_phone', 'city_id', 'hospital_name', 'hospital_address', 'blood_type_id', 'age', 'bags_number', 'details', 'latitude', 'longitude', 'client_id');

    public function clients()
    {
        return $this->belongsTo('App\Models\Client');
    }
    public function bloodType()
    {
        return $this->belongsTo('App\Models\BloodType');
    }

    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }

    public function notification()
    {
        return $this->hasMany('App\Models\Notification');
    }


}