{{-- @extends('layouts.navigation') --}}
{{-- @section('content') --}}
<h2> Blog Posts </h2>
@forelse ($posts as $post)
    <hr />
    <div class="blog-card">
        <h3> <a href="/posts/{{ $post->id }}/view">{{ $post->title }}</a></h3>
        <small> {{ $post->user->name }}</small>
        <small>{{ $post->created_at }}</small>
    </div>
    <hr />
@empty
    <div> There is no posts right now</div>
@endforelse
{{-- @endsection --}}
