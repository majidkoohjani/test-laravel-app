<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, "showHomePage"]);
Route::get('/about', function() {
    return view("about", ["username" => "امتحانی"]);
});
