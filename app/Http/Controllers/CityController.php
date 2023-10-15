<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Governorate;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = City::all();
        return view("cities.index",compact("records"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $records = City::all();
        return view("cities.create",compact("records"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
            "name"=> "required|string",
            "governorate_id"=> "numeric"
            ]);
    
            City::create([
                "name"=>$request->name,
                "governorate_id"=>$request->governorate_id
            ]);
            flash('Message')->success("Success");
            return redirect(route("cities.index"));
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
        $records = City::findOrFail($id);
        $cities = City::all();
        return view("cities.edit",compact("records","cities"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $city = City::findOrFail($id);
        if ($city != null) 
        {
            $data = $request->validate(
                [
                "name"=> "required|string",
                "governorate_id"=> "numeric"
                ]);

            $city->update([
                "name"=>$request->name,
                "governorate_id"=>$request->governorate_id
            ]); 
            flash('Message')->success("Edit");
            return redirect(route('cities.index'));

        }
        else
        {
            echo "city not found";
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $city = City::findOrFail($id);
        $city->delete();
        flash('Message')->success("Deleted");
        return back();
    }
}
