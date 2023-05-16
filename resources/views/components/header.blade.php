<header class="d-flex justify-content-center py-3">
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ activeLink('/') }}">Главная</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('article.index') }}" class="nav-link {{ activeArticleLink() }}">Статьи</a>
        </li>
    </ul>
</header>
