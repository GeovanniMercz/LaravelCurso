<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/test',function(){
    return "Welcome";
});*/

Route::get('/test',function(){
    return view('test');
});
Route::get('/crudy',function(){
    $age = 21;
    $data = ['name' => 'Andres', 'age' => $age];
    return view('crud/index',$data);
})->name('crud');


