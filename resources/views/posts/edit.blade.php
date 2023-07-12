@extends('layouts.base')
@section('content')
    <div class="flex flex-col py-4 items-center w-full h-full">
        @if ($post)
            <form action="/posts/{{ $post->id }}/edit" method="POST"
                class="w-4/5 bg-white dark:bg-gray-800 shadow dark:text-white p-4 sm:rounded-lg h-4/5">
                <h2 class="text-4xl font-bold p-3">Edit post</h2>
                <div class="flex flex-col gap-5 w-full h-4/5 p-3  ">
                    @csrf
                    <label class="text-xl font-bold ">Title</label>
                    <input placeholder="Enter the title of this blog post" name="title" value={{ $post->title }}
                        class="sm:rounded-lg p-2 active:bg-blue-100 bg-gray-200 border border-black outline-blue-400 outline-1 dark:bg-gray-600" />
                    {{-- <label>Author</label>
            <input placeholder="Enter author's name" name="author" /> --}}
                    <label class="text-xl font-bold">Content</label>
                    <textarea placeholder="Enter the content of this post" name="content" value={{ $post->content }}
                        class=" sm:rounded-lg decoration-none bg-gray-200 dark:bg-gray-600 border border-black outline-blue-400 outline-1">{{ $post->content }}</textarea>
                    <div class="flex justify-center items-center">
                        <input type="submit" value="Edit"
                            class="bg-green-400 dark:bg-green-500 sm:rounded-lg shadow p-3 w-1/5" />
                    </div>
                </div>
            </form>
        @else
            <h2> There is no post to modify </h2>
        @endif
    </div>
@endsection
