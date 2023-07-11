@extends('layouts.base')
@section('content')
    <div class="flex flex-col py-4">
        <h2>Create post</h2>
        <form action="/posts/create" method="POST">
            <div style="display:flex; flex-direction:column;">
                @csrf
                <!-- {{ csrf_field() }} -->
                <label>Title</label>
                <input placeholder="Enter the title of this blog post" name="title" />
                {{-- <label>Author</label>
            <input placeholder="Enter author's name" name="author" /> --}}
                <label>Content</label>
                <textarea placeholder="Enter the content of this post" name="content"></textarea>
                <input type="submit" />
            </div>
        </form>
    </div>
    </body>
@endsection
