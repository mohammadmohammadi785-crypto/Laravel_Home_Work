<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view("create-post", "createPost");
Route::post("create-p", [PostController::class,"store"]);

Route::get("mechanic", [MechanicController::class, "index"]);

Route::get("Country", [CountryController::class, "index"]);

Route::view('/product/create', 'Product.create');
Route::post('/product/add', [ProductController::class, 'create']);
Route::get('product', [ProductController::class, 'index']);
Route::put('product/update/{id}', [ProductController::class, 'update']);
Route::get('product/edit/{id}', [ProductController::class, 'edit']);
Route::delete("delete/{id}", [ProductController::class, "destroy"]);

Route::post("create-post",[PostController::class, "create"]);
Route::get("Post",[PostController::class, "index"]);
Route::view("Post/create", 'Post.create');
Route::put('Post/update/{id}', [PostController::class, 'update']);
Route::get('Post/edit/{id}', [PostController::class, 'edit']);