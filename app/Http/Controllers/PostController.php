<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    
    function show() {
        $posts = new Post();
        $posts =$posts->all();
        return view("posts.index",["posts" =>$posts]);
    }
    function create_form(){
        return view("/posts/create");
    }
    function create(Request $request){
        $user = $request->user()->id;
        $post = new Post();
        $post->title =  $request->input("title");
        $post->user_id = $user;
        $post->content = $request->input("content");
        $post->save();
        // Log::info($author);
        return redirect("/posts");

    }
}