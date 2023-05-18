@extends('layouts.base')
@section('content')
    <div id="app">
        <article-main :article_id="{{ $article->id }}">
            <template #tags>
                @include('components.article.article-tags')
            </template>
        </article-main>
    </div>
@endsection
@section('vue')
    @vite('resources/js/app.js')
@endsection
