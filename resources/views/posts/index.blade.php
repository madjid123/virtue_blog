{{-- @extends('layouts.navigation') --}}
{{-- @section('content') --}}
@forelse ($posts as $post)
    <h2> Blog Posts </h2>
    <hr />
    <div class="blog-card">
        <h3>{{ $post->title }}</h3>
        <small> {{ $post->user->name }}</small>
        <small>{{ $post->created_at }}</small>
    </div>
    <hr />
@empty
    <div> There is no posts right now</div>
@endforelse
{{-- @endsection --}}
