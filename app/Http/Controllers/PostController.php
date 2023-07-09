<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    
    function show() {
        $posts = new Post();
        $posts =$posts::with("user:id,name")->get();
        return view("posts.index",["posts" =>$posts]);
    }
    function view_post(Request $request){
        $id = $request->route()->parameter("id");
        if ($id == null){
            return response("Invalid id",505);
        }
        $post = Post::where("id",$id)->first();
        return view("posts.view",["post"=>$post]);
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
    function edit(Request $request){
        $id = $request->route()->parameter("id");
        if ($id == null){
        return response("Invalid id",505);
        }
        $post = Post::where("id",$id)->first();
        if($request->user()->id != $post->user_id){
            return response("You must be the author ",501);
        }
        return view('posts.edit',["post"=>$post]);
    }
    function edit_form(Request $request){
        $id = $request->route()->parameter("id");
        if ($id == null){
            return response("Invalid id",505);
        }
        $post = Post::where("id",$id)->first();
        $x = $request->user()->id == $post->user_id;
        error_log($x);
        echo "ldsjflkj";
            
        
        if($request->user()->id != $post->user_id){
            return response("You must be the author ",501);
        }
        $title= $request->input("title");
        $content= $request->input("content");
        $post->title = $title;
        $post->content = $content;
        $post->save();
        return redirect("/posts");
        
    }
}