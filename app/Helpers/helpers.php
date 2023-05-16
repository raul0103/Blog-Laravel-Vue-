<?php

if (!function_exists('activeLink')) {
    function activeLink($link)
    {
        if (request()->is($link)) {
            return 'active';
        }
    }
}

if (!function_exists('activeArticleLink')) {
    function activeArticleLink()
    {
        if (request()->is('articles') or request()->is('articles/*')) {
            return 'active';
        }
    }
}
