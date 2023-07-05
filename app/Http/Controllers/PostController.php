<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    
    function show($post) {
        return view("posts.post",$post);
    }
}
