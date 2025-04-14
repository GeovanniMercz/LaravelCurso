<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class PrimerControlador extends Controller
{
    function index() {
        $posts = [ 'post1','post2'];
        return view('contact1', compact('posts'));
        
    }
    function other ($post) {
        echo $post;
    }

}
