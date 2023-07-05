<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class PostController extends Controller
{
    
    function show($post) {
        return view("posts.post",$post);
    }
    function create_form(){
        return view("/posts/create");
    }
    function create(Request $request){
        $author= $request->input("author");
        // Log::info($author);
        return redirect("/");

    }
}