<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\BloodType;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\DonationRequest;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = DonationRequest::all();
        return view("Donations.index",compact("records"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cities = City::all();
        $bloodTypes = BloodType::all();
        $clients = Client::all();
        return view("Donations.create",compact("bloodTypes","cities","clients"));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
            "patient_name"=> "required|string",
            "patient_phone"=> "required|string",
            "hospital_name"=> "required|string",
            "hospital_address"=> "required|string",
            "age"=> "required|numeric",
            "bags_number"=>"required|numeric",
            "latitude"=>"required|numeric",
            "longitude"=>"required|numeric",
            "details"=> "required|string",
            "blood_type_id"=>"required",
            "city_id"=>"required",
            "client_id"=> "required"
            ]);
    
            DonationRequest::create($data);
            flash('Message')->success("Success");
            return redirect(route('donations.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $donation = DonationRequest::findOrFail($id);
        return view("Donations.show",compact("donation"));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $donation = DonationRequest::findOrFail($id);
        $donation->delete();
        flash('Message')->success("Deleted");
        return back();
    }
}
