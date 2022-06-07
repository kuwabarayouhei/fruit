@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')

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
        <a href='/posts/create'>create</a>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                    <h3>車種</h3>
                    <p class='model'>{{ $post->model }}</p>
                    <h3>ナンバープレート</h3>
                    <p class='number'>{{ $post->number }}</p>
                    <h3>色</h3>
                    <p class='color'>{{ $post->color }}</p>
                    <h3>盗難された場所</h3>
                    <p class='location'>{{ $post->location }}</p>
                    <h3>盗難された時間</h3>
                    <p class='time'>{{ $post->time }}</p>
                    <h3>盗難時の状況</h3>
                    <p class='situation'>{{ $post->situation }}</p>
                    <h3>その他の情報</h3>
                    <p class='information'>{{ $post->information }}</p>
                    <h3>盗難された車の画像</h3>
                    @if ($post->image_path)
                    <!-- 画像を表示 -->
                    <img src="{{ $post->image_path }}">
                    @endif
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>
@endsection