<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get("home", [PageController::class, "home"])->name("home");
Route::get("executives", [PageController::class, "executives"])->name("executives");
Route::get("teachers", [PageController::class, "teachers"])->name("teachers");
Route::get("students", [PageController::class, "students"])->name("students");
Route::get("majors", [PageController::class, "majors"])->name("majors");
