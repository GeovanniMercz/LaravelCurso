<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

Route::resource('post', 'api\PostController')->only([
    'index','show'
])->middleware('auth:api');

Route::get('post/all', [PostController::class, 'all']);
Route::get('post/slug/{post:slug}', [PostController::class, 'slug']);
Route::get('category/all', [CategoryController::class, 'all']);
Route::get('category/slug/{slug}', [CategoryController::class, 'slug']);
Route::get('category/{category}/posts', [CategoryController::class, 'posts']);

Route::apiResource('post', PostController::class)->except(['create', 'edit']);
Route::apiResource('category', CategoryController::class)->except(['create', 'edit']);


Route::post('login', [AuthController::class, 'login']);

// INFO  Personal access client created successfully.  

// Client ID .......................... ............................................................................................................ 1
// Client secret ........................................................................................... vr53IEWYnpP0PEXA1wJhcswtbgY2945lS6v5teDK

//  INFO  Password grant client created successfully.

// Client ID ...................................................................................................................................... 2
// Client secret ........................................................................................... KdaRDpWUpxQQukX8GTmc4XYtzNmQhkddmrHOl8VY
 