<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;


Route::get('/', function () {
    return view('welcome');
});

Route::get("site" , [SiteController::class, "index"]);
