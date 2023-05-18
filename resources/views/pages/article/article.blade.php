@extends('layouts.base')
@section('content')
    <div id="app">
        <h1 class="card-title">{{ $article->title }}</h1>
        <div class="card">
            <img class="card-img-top" src="{{ $article->image }}" style=" max-width: 135px; ">

            <div class="card-body">
                <p class="card-text">{{ $article->body }}</p>
                @include('components.article.article-tags')
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-between">
                    <small class="text-muted"> {{ $article->createdForHumans() }}</small>
                    <article-tags></article-tags>
                </div>
            </div>
        </div>
        <h2 class="mt-3 mb-2 text-center">Комментарии</h2>
        <div class="row row-cols-1 gy-3 gx-0 w-50 m-auto">
            @foreach ($article->comments as $comment)
                <div class="card">
                    <div class="card-header">
                        {{ $comment->subject }}
                        <span class="float-end"> {{ $comment->created_at }}</span>
                    </div>
                    <div class="card-body">
                        <p class="card-text"> {{ $comment->body }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
@section('vue')
    @vite('resources/js/app.js')
@endsection
