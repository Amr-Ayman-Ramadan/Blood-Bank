<?php

namespace App\Http\Controllers\Front;

use App\Models\City;
use App\Models\Articale;
use App\Models\BloodType;
use Illuminate\Http\Request;
use App\Models\DonationRequest;
use App\Http\Controllers\Controller;
use App\Models\Setting;

class MainController extends Controller
{
    public function home()
    {
        $articles = Articale::all();
        $donations= DonationRequest::all();
        return view("front.index",compact("articles","donations"));
    }
    public function articale()
    {
        $articles =  Articale::all();
        return view("front.article-details",compact("articles"));
    }
    public function donation()
    {
        $donations= DonationRequest::all();
        $cities = City::all();
        $bloodTypes = BloodType::all();
        return view("front.donation-requests",compact("donations","cities","bloodTypes"));
    }
    public function search(Request $request)
    {
        $bloodTypes = BloodType::all();
        $cities = City::all();
        $donations = DonationRequest::where(function ($query) use ($request) {
            if ($request->has('blood_type_id')) {
                $query->where('blood_type_id', $request->blood_type_id);
            }
        })
            ->orWhere(function ($query) use ($request) {
                if ($request->has('city_id')) {
                    $query->where('city_id', $request->city_id);
                }
            })
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view("front.donation-requests",compact("donations","bloodTypes","cities"));
    }
    public function contactUsForm()
    {

        return view("front.contact-us");
    }
    public function contactUs(Request $request)
    {
        $data = $request->validate([
            "name"=> "required|string",
            "email"=> "required|email",
            "phone"=>"required",
            'title' => "required",
            'message' => "required"
        ]);
        Setting::create($data);
        return redirect()->back()->with('success', 'تم الارسال بنجاح');
    }
    
// public function toggleFavourite(Request $request)
// {
//     $request->user()->favourites()->toggle($request->articales_id);
// }







}




