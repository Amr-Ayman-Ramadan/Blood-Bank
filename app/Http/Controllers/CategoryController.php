<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = Category::all();
        return view("Categories.index",compact("records"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Categories.create");

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
    
            Category::create($data);
            flash('Message')->success("Success");
            return redirect(route("categories.index"));
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
        
        $category = Category::findOrFail($id);
        return view("Categories.edit",compact("category"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category =  Category::findOrFail($id);
        if ($category != null) 
        {
            $data = $request->validate(
                [
                "name"=> "required|string"
                ]);

            $category->update($data); 
            flash('Message')->success("Edit");
            return redirect(route("categories.index"));

        }
        else
        {
            echo "Category not found";
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        flash('Message')->success("Deleted");
        return back();
    }
}
