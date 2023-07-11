@extends('layouts.base')
@section('content')
    <div class="post flex flex-col ">
        @if ($post)
            <h1 class="text-4xl font-bold">{{ $post->title }}</h1>
            <hr class="h-0.5 w-full my-4 bg-gray-100 color-black" />
            <smaLl> <a href="/profile/{{ $post->user_id }}">{{ $post->user->name }}</a> -
                {{ $post->created_at->format('j F, Y - H:i') }}</small>
            <hr class="h-0.5 w-full my-4 bg-gray-100 color-black" />
            <p name="content" class="bg-white sm:p-8 sm:rounded-lg shadow py-full h-full w-full flex justify-center"
                value={{ $post->content }}>
                {{ $post->content }}</p>
    </div>
    </form>
@else
    <h2> Nothing to display</h2>
    @endif
    </div>
@endsection
