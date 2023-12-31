<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::middleware("auth")->group(function(){
    Route::get("/posts/create",PostController::class . "@create_form");
    Route::get("/posts/{id}/edit",PostController::class . "@edit");
    Route::post("/posts/{id}/edit",PostController::class . "@edit_form");
    Route::delete("/posts/{id}/delete", PostController::class. "@delete_post");
});
Route::post("/posts/create",PostController::class . "@create");

Route::get("posts/{id}/view",PostController::class . "@view_post");
Route::get("posts",PostController::class . "@show");

Route::get("/posts/user/{id}",PostController::class."@show_user_posts");