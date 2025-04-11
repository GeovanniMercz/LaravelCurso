<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    function index() {
        $data = ['name'=> 'Geovanni'];
        return view('contact1',$data);
        
    }
}
