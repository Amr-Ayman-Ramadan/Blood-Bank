<?php

namespace App\Http\Controllers;

use App\Models\Governorate;
use Illuminate\Http\Request;

class GovernorateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = Governorate::all();
        return view("Governorates.index",compact("records"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Governorates.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate(
        [
        "name"=> "required|string"
        ]);

        Governorate::create($data);
        flash('Message')->success("Success");
        return redirect(route('governorates.index'));
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
        $governorate = Governorate::findOrFail($id);
        return view("Governorates.edit",compact("governorate"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $governorate = Governorate::findOrFail($id);
        if ($governorate != null) 
        {
            $data = $request->validate(
                [
                "name"=> "required|string"
                ]);

            $governorate->update($data); 
            flash('Message')->success("Edit");
            return redirect(route('governorates.index'));

        }
        else
        {
            echo "governorate not found";
        }
      
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $governorate = Governorate::findOrFail($id);
        $governorate->delete();
        flash('Message')->success("Deleted");
        return back();

    }
}
