<?php

use App\Http\Controllers\PrimerControlador;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test',action: [PrimerControlador::class,'index']);
Route::get('other/{post?}',action: [PrimerControlador::class,'other']);





