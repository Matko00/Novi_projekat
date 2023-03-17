<?php

use Illuminate\Support\Facades\Route;
use App\Models\Desktop;
use App\Models\Processor;
use App\Models\Country;
use App\Models\City;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/processor', function() {
    $processor = Desktop::find(1)->processor;
    return $processor;
});

Route::get('/desktop', function() {
    $desktop = Processor::find(1)->desktop;
    return $desktop;
});

Route::get('/city', function() {
    $city = Country::find(1)->city;
    return $city;
});


Route::get('/country', function() {
    $country = City::find(2)->country;
    return $country;
});

