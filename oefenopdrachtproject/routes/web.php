<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;

Route::get('/home', [HomeController::class, 'index']);

Route::get('/', function (){
    return view('home');
});

Route::get('/about', function (){
    return view('about');
});

Route::get('/about-us', function() {
    return view('about-us');
});
Route::get('/test', [AboutUsController::class, 'index']);

Route::get('/contact', function (){
    return view('contact');
});



