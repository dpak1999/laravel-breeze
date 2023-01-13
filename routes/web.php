<?php

use App\Http\Controllers\Demo\DemoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(DemoController::class)->group(function () {
    Route::get("/about", "Index")->name('about.page');
    Route::get("/contact", "ContactMethod")->name('contact.page');
});
