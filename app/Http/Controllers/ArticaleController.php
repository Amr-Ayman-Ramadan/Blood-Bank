<?php

namespace App\Http\Controllers;

use App\Models\Articale;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = Articale::all();
        return view("Articales.index",compact("records"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view("Articales.create",compact("categories"));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
            "title"=> "required|string",
            "content"=> "required|string",
            "image"=> "required|image|mimes:png,jpg,jpeg",
            "category_id"=>"required"
            ]);
            
            $data["image"] = Storage::putFile("articales",$data["image"]);
            Articale::create($data);
            session()->flash("success","Data Inserted Successfully");
            return redirect(route("articales.index"));
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
        $record = Articale::findOrFail($id);
        $categories = Category::all();
        return view("Articales.edit",compact("record","categories"));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate(
            [
            "title"=> "required|string",
            "content"=> "required|string",
            "image"=> "image|mimes:png,jpg,jpeg"
            ]);
            $record = Articale::findOrFail($id);
            if ($request->has("image")) 
            {
                Storage::delete($record->image);
                $data["image"] = Storage::putFile("articales",$data["image"]);
            }
            $record->update($data);
            return redirect(route("articales.index"));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $articale = Articale::findOrFail($id);
        Storage::delete($articale->image);
        $articale->delete();
        flash('Message')->success("Deleted");
        return back();
    }
}
