@forelse ($posts as $post)
    <div>{{ $post->title }}</div>
@empty
    <div> There is no posts right now</div>
@endforelse
