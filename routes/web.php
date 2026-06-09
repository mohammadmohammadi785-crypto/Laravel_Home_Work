<?php

use App\Http\Controllers\MechanicController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view("create-post", "createPost");
Route::post("create-p", [PostController::class,"store"]);

Route::get("mechanic", [MechanicController::class, "index"]);