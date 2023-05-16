@extends('layouts.base')
@section('content')
    <div class="row row-cols-1 row-cols-md-3 g-2">
        @foreach ($articles as $article)
            <div class="col">
                @include('components.article.articles-card', ['article' => $article])
            </div>
        @endforeach
    </div>
@endsection
