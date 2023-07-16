@extends('layouts.base')
@section('content')
    <div
        class="flex flex-col items-center text-center rounded-lg justify-center my-8 w-4/5  bg-white dark:bg-gray-800 text-gray-600  dark:text-gray-400 py-6 p-4">
        @if ($post)
            <h1 class="text-4xl font-bold dark:text-white text-black">{{ $post->title }}</h1>
            <hr class="h-0.5 w-full my-4 bg-gray-100 dark:bg-gray-400 color-black " />
            <small> <a href="/profile/{{ $post->user_id }}"
                    class="text-xl font-bold text-gray-600 dark:text-gray-400 hover:text-red-600 dark:hover:text-red-400">{{ $post->user->name }}</a>
                -
                {{ $post->created_at->format('j F, Y - H:i') }}</small>
            <hr class="h-0.5 w-full my-4 bg-gray-100 color-black" />
            <p name="content" class="sm:p-8 sm:rounded-lg py-full h-full w-full flex justify-left" value={{ $post->content }}>
                {{ $post->content }}</p>
    </div>
@else
    <h2> Nothing to display</h2>
    @endif
    </div>
@endsection
