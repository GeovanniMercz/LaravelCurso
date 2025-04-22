<?php

use App\Http\Controllers\Api\CategoryController as ApiCategoryController;
use App\Http\Controllers\Api\PostController as ApiPostController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'dashboard'],function () {
    Route::resource('post', PostController::class);
    Route::resource('category', CategoryController::class);
});

Route::group(['prefix'=>'api'],function(){
    Route::apiResource('category',ApiCategoryController::class);
    Route::apiResource('post',ApiPostController::class);

});