@extends('layouts.base')
@section('content')
    <div class="flex flex-col justify-center items-center py-4 w-full">
        <h2 class="text-4xl font-bold pb-4 dark:text-white"> Blog Posts </h2>
        <div class="flex items-start flex-col w-4/5">
            @forelse ($posts as $post)
                <div class="blog-card p-4 bg-white dark:bg-gray-800 dark:text-white sm:rounded-lg shadow w-full my-1">
                    <h3 class="text-2xl font-bold"> <a href="/posts/{{ $post->id }}/view"
                            class="hover:text-blue-400">{{ $post->title }}</a></h3>
                    <small> <a href="/profile/{{ $post->user_id }}"
                            class="hover:text-red-400 dark:text-gray-200 text-gray-700">{{ $post->user->name }}</a> -
                    </small>
                    <small>{{ $post->created_at->format('j F, Y ') }}</small>
                    @auth

                        @if (Auth::user()->id == $post->user->id)
                            <form action="">

                                <button class="text-white bg-red-400 p-1 rounded-lg px-2">Delete</button>
                            </form>
                        @endif
                    @endauth
                </div>

            @empty
                <div> There is no posts right now</div>
            @endforelse
        </div>
    </div>
@endsection
