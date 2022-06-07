@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')

<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>盗難車対策掲示板</title>
    </head>
    <body>
        <h1>盗難車対策掲示板</h1>
        <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="model">
                <h2>車種、型式</h2>
                <textarea name="post[model]" placeholder="TOYOTA86、zn6" value="{{ old('post.model') }}"></textarea>
                <p class="title__error" style="color:red">{{ $errors->first('post.model') }}</p>
            </div>
            <div class="number">
                <h2>ナンバープレート</h2>
                <textarea name="post[number]" placeholder="東京　000 わ 00-00" value="{{ old('post.number') }}"></textarea>
                <p class="title__error" style="color:red">{{ $errors->first('post.number') }}</p>
            </div>
            <div class="color">
                <h2>色</h2>
                <textarea name="post[color]" placeholder="赤" value="{{ old('post.color') }}"></textarea>
                <p class="title__error" style="color:red">{{ $errors->first('post.color') }}</p>
            </div>
            <div class="location">
                <h2>盗難された場所</h2>
                <textarea name="post[location]" placeholder="〇〇県〇〇市" value="{{ old('post.location') }}"></textarea>
                <p class="title__error" style="color:red">{{ $errors->first('post.location') }}</p>
            </div>
            <div class="time">
                <h2>盗難された時刻</h2>
                <textarea name="post[time]" placeholder="20xx年xx月xx日午前/午後xx時xx分頃" value="{{ old('post.time') }}"></textarea>
                <p class="title__error" style="color:red">{{ $errors->first('post.time') }}</p>
            </div>
            <div class="situation">
                <h2>盗難時の状況</h2>
                <textarea name="post[situation]" placeholder="盗難者の情報など" value="{{ old('post.situation') }}"></textarea>
                <p class="title__error" style="color:red">{{ $errors->first('post.situation') }}</p>
            </div>
            <div class="information">
                <h2>その他の情報</h2>
                <textarea name="post[information]" placeholder="捜索時の目印となるもの" value="{{ old('post.information') }}"></textarea>
                <p class="title__error" style="color:red">{{ $errors->first('post.information') }}</p>
            </div>
            <!-- アップロードフォームの作成 -->
            <input type="file" name="image">
            <input type="submit" value="アップロード">
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>
@endsection