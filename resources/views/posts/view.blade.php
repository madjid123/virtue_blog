<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @if ($post)
        <title>{{ $post->title }} </title>
    @endif
</head>

<body>
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
</body>

</html>
