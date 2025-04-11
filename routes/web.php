<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/test',function(){
    return "Welcome";
});*/

Route::get('/contact',function(){
    $data = ['name'=> 'Geovanni'];
    return to_route('contact2');
    //return redirect () -> route('contact2');
    //return view('contact1',$data);
})->name('contact');

Route::get('/contact2',function(){
    return view('contact2');
})->name('contact2');