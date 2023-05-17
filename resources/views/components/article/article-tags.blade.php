<div class="mt-3">
    <b>Теги:</b>
    @foreach ($article->tags as $tag_index => $tag)
        <a href="{{ route('article.tag', $tag->id) }}" class="btn btn-outline-secondary btn-sm">{{ $tag->title }}</a>
    @endforeach
</div>
