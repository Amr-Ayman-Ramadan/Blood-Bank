<?php

use App\Http\Controllers\ArticaleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\Front\AuthController;
use App\Http\Controllers\Front\MainController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GovernorateController;
use App\Http\Controllers\SettingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::group(["namespace"=> "Front"],function(){
    Route::get('/',[ MainController::class,'home'])->name("home");
    Route::get('/articale',[MainController::class,'articale'])->name("articale");
    Route::get('/donation',[MainController::class,'donation'])->name("donation");
    Route::get('/search',[MainController::class,'search'])->name("search");
    Route::get('/contactUs',[MainController::class,'contactUsForm'])->name("contactUsForm");
    Route::post('/contactUs',[MainController::class,'contactUs'])->name("contactUs");
    Route::get('/toggle-favourite',[MainController::class,''])->name("toggle-favourite");
    Route::get('/register',[AuthController::class,'registerForm']);
    Route::post('/register',[AuthController::class,'register'])->name("register");
    Route::get('/login',[AuthController::class,'loginForm'])->name("loginForm");
    Route::post('/login',[AuthController::class,'login'])->name("login");
    Route::get("/about-us",function(){
        return view("front.about-us");
    });


});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource("governorates",GovernorateController::class);
Route::resource("cities",CityController::class);
Route::resource("categories",CategoryController::class);
Route::resource("clients",ClientController::class);
Route::resource("articales",ArticaleController::class);
Route::resource("contacts",ContactController::class);
Route::resource("donations",DonationController::class);
Route::resource("settings",SettingController::class);



