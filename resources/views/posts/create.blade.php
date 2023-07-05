<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{title} - Create Post</title>
</head>

<body>
    <div>
        <h2>Create post</h2>
        <form action="/posts/create" method="POST">
            @csrf
            <!-- {{ csrf_field() }} -->
            <label>Title</label>
            <input placeholder="Enter the title of this blog post" name="title" />
            <label>Author</label>
            <input placeholder="Enter author's name" name="author" />
            <label>Content</label>
            <textarea placeholder="Enter the content of this post" name="content"></textarea>
            <input type="submit" />
        </form>
    </div>
</body>

</html>
