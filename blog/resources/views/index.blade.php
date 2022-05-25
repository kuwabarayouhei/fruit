<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>盗難車対策掲示板</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>盗難車対策掲示板</h1>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>{{ $post->title }}</h2>
                    <p class='model'>{{ $post->model }}</p>
                    <p class='number'>{{ $post->number }}</p>
                    <p class='color'>{{ $post->color }}</p>
                    <p class='location'>{{ $post->location }}</p>
                    <p class='time'>{{ $post->time }}</p>
                    <p class='situation'>{{ $post->situation }}</p>
                    <p class='information'>{{ $post->information }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>