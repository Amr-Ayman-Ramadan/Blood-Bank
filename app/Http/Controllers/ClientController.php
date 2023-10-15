<?php

namespace App\Http\Controllers;

use App\Models\BloodType;
use App\Models\City;
use App\Models\Client;
use App\Models\Governorate;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = Client::all();
        return view("Clients.index",compact("records"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $records = City::all();
        $bloodTypes = BloodType::all();
        return view("Clients.create",compact("records","bloodTypes"));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
            "name"=> "required|string",
            "email" => "required|unique:clients,email",
            "password" => "required",
            "phone" => "required|string",
            "d_o_b" => "required",
            "last_donation_date"=> "required",
            "pin_code"=> "required|numeric",
            "city_id"=>"required",
            "blood_type_id"=>"required"
            ]);
            Client::create($data);
            flash('Message')->success("Success");
            return redirect(route("clients.index"));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        $client = Client::findOrFail($id);
        $client->delete();
        flash('Message')->success("Deleted");
        return back();
    }
}
