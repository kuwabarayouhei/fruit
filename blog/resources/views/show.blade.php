<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <div class="content">
            <div class="content__post">
                <h3>車種</h3>
                <p>{{ $post->model }}</p>
                <h3>ナンバープレート</h3>
                <p>{{ $post->number }}</p>
                <h3>色</h3>
                <p>{{ $post->color }}</p>
                <h3>盗難された場所</h3>
                <p>{{ $post->location }}</p>  
                <h3>盗難された時間</h3>
                <p>{{ $post->time }}</p>
                <h3>盗難時の状況</h3>
                <p>{{ $post->situation }}</p>
                <h3>その他の情報</h3>
                <p>{{ $post->Information }}</p>
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>