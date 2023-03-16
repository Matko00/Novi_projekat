<?php

use Illuminate\Support\Facades\Route;
use App\Models\Desktop;
use App\Models\Processor;

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
    $processor = Desktop::find(2)->processor;
    return $processor;
});

Route::get('/desktop', function() {
    $desktop = Processor::find(1)->desktop;
    return $desktop;
});
