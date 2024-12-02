<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;

Route::get('/about-us', function() {
    return view('about-us');
});
Route::get('/test', [AboutUsController::class, 'index']);
