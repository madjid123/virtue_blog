@extends('layouts.base')
@section('content')
    <div>
        @if ($post)
            <h1>{{ $post->title }}</h1>
            <hr />
            <smaLl> <a href="/profile/{{ $post->user_id }}">{{ $post->user->name }}</a> -
                {{ $post->created_at->format('j F, Y - H:i') }}</small>
            <hr />
            <p name="content" value={{ $post->content }}>{{ $post->content }}</p>
    </div>
    </form>
@else
    <h2> Nothing to display</h2>
    @endif
    </div>
@endsection
