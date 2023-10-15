<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\BloodType;
use App\Models\City;
use App\Models\Client;
use App\Models\Governorate;
use GuzzleHttp\Psr7\Uri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registerForm()
    {
        $governorates = Governorate::all();
        $cities = City::all();
        $bloodTypes = BloodType::all();
        return view("front.Auth.create-account",compact("governorates","cities","bloodTypes"));
    }

    public function register(Request $request)
    {
        
        // $data = $request->validate([
        //     "name"=> "required|string",
        //     "email" => "required|email",
        //     "d_o_b" => "required",
        //     "blood_type_id"=>"required",
        //     "Governorates"=>"required",
        //     "city_id"=>"required",
        //     "phone" => "required|string",
        //     "last_donation_date"=> "required",
        //     "password" => "required|string|confirmed",
        // ]);
        // dd("amr");
        // $data["password"] = bcrypt($data["password"]); 
        Client::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "d_o_b"=>$request->d_o_b,
            "blood_type_id"=>$request->blood_type_id,
            "Governorates"=>$request->Governorates,
            "city_id"=>$request->city_id,
            "phone"=>$request->phone,
            "last_donation_date"=>$request->last_donation_date,
            "password"=>$request->password
        ]);
        return redirect(route("login"));
    }

    public function loginForm()
    {
        return view("front.Auth.signin-account");
    }

    public  function login(Request $request)
    {
        // $data = $request->validate([
        //     "email" => "required|email",
        //     "password" => "required|string",
        // ]);
       
       $is_auth = Auth::attempt(["email"=>$request->email,"password"=>$request->password]);
       return redirect(url("/"));

    //    if (! $is_auth) 
    //    {
       
    //      return redirect(route("loginForm"));
    //    }
    //    dd("hello");
    //    return redirect(url("/"));

    }







}
