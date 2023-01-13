<?php

use App\Http\Controllers\Demo\DemoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(DemoController::class)->group(function () {
    Route::get("/about", "Index");
    Route::get("/contact", "ContactMethod");
});
