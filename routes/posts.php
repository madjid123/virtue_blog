<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::middleware("auth")->group(function(){
Route::get("/posts/create",PostController::class . "@create_form");
});
Route::post("/posts/create",PostController::class . "@create");

Route::get("posts",PostController::class . "@show");