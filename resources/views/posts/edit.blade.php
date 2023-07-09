@extends('layouts.base')
@section('content')
    <div>
        @if ($post)
            <h2>Edit post</h2>
            <form action="/posts/{{ $post->id }}/edit" method="POST">
                <div style="display:flex; flex-direction:column;">
                    @csrf
                    <label>Title</label>
                    <input placeholder="Enter the title of this blog post" name="title" value={{ $post->title }} />
                    {{-- <label>Author</label>
            <input placeholder="Enter author's name" name="author" /> --}}
                    <label>Content</label>
                    <textarea placeholder="Enter the content of this post" name="content" value={{ $post->content }}>{{ $post->content }}</textarea>
                    <input type="submit" />
                </div>
            </form>
        @else
            <h2> There is no post to modify </h2>
        @endif
    </div>
@endsection
