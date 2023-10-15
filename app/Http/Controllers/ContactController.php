<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = Contact::all();
        return view("Contacts.index",compact("records"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Contacts.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
            "name"=> "required|string",
            "email"=>"required|email|unique:contacts,email",
            "phone"=> "required|numeric",
            "subject"=>"required|string",
            "message"=>"required|string"
            ]);
            Contact::create($data);
            flash('Message')->success("Success");
            return redirect(route('contacts.index'));
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
        $record = Contact::findOrFail($id);
        return view("Contacts.edit",compact("record"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $record = Contact::findOrFail($id);
        if ($record != null) 
        {
            $data = $request->validate(
                [
                    "name"=> "required|string",
                    "email"=>"required|email|unique:contacts,email",
                    "phone"=> "required|numeric",
                    "subject"=>"required|string",
                    "message"=>"required|string"
                ]);

            $record->update($data); 
            flash('Message')->success("Edit");
            return redirect(route('contacts.index'));

        }
        else
        {
            echo "contact not found";
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        flash('Message')->success("Deleted");
        return back();
    }
}
