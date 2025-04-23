<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\PostController;
use Illuminate\Support\Facades\Route;

Route::get('post/all', [PostController::class, 'all']);
Route::get('category/all', [CategoryController::class, 'all']);
Route::get('category/{category}/posts', [CategoryController::class, 'posts']);

Route::apiResource('post', PostController::class)->except(['create', 'edit']);
Route::apiResource('category', CategoryController::class)->except(['create', 'edit']);
