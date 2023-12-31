@extends('layouts.base')
@section('content')
    <div class="flex flex-col items-center py-4 w-full">
        <h2 class="text-4xl font-bold pb-4 dark:text-white"> Blog Posts </h2>
        <div class="flex items-start flex-col w-4/5">
            @forelse ($posts as $post)
                <div
                    class="blog-card p-4 bg-white dark:bg-gray-800 dark:text-white sm:rounded-lg shadow w-full my-1 flex flex-row justify-between">
                    <div>
                        <h3 class="text-2xl font-bold"> <a href="/posts/{{ $post->id }}/view"
                                class="hover:text-blue-400">{{ $post->title }}</a></h3>
                        <small> <a href="/posts/user/{{ $post->user_id }}"
                                class="hover:text-red-400 dark:text-gray-200 text-gray-700">{{ $post->user->name }}</a> -
                        </small>
                        <small>{{ $post->created_at->format('j F, Y ') }}</small>
                    </div>
                    @auth
                        <div class="flex flex-row  gap-2 justify-center p-3">
                            @if (Auth::user()->id == $post->user->id)
                                <form action="/posts/{{ $post->id }}/delete" method="post" class="flex flex-row">
                                    @csrf
                                    @method('DELETE')
                                    <input
                                        class="text-white  bg-red-600 dark:bg-red-400 p-1 rounded-lg px-2 text-sm hover:bg-gray-500 hover:dark:bg-gray-400 "
                                        type=submit value="Delete">
                                </form>
                                <button
                                    class="text-white bg-yellow-400 dark:bg-yellow-400 p-1 rounded-lg px-2 text-sm hover:bg-gray-500 hover:dark:bg-gray-400"
                                    type="submit"><a href="/posts/{{ $post->id }}/edit">Edit</a></button>
                            @endif
                        </div>
                    @endauth
                </div>

            @empty
                <div class="text-gray-600 dark:text-white"> This user do not have any posts</div>
            @endforelse
        </div>
    </div>
@endsection
