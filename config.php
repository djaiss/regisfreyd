<?php

use Illuminate\Support\Str;

return [
    'baseUrl' => 'http://localhost:3000',
    'production' => false,
    'siteTitle' => 'Regis',
    'siteName' => 'Regis',
    'siteDescription' => 'Personal blog etc...',
    'siteAuthor' => 'Regis',

    // collections
    'collections' => [
        'posts' => [
            'author' => 'Regis',
            'twitter_author' => 'https://twitter.com/maazarin',
            'sort' => '-date',
            'path' => 'posts/{date|Y-m-d}-{slug}',
        ],
        'comics' => [
            'author' => 'Regis',
            'twitter_author' => 'https://twitter.com/maazarin',
            'sort' => '-date',
            'path' => 'comics/{id}/{slug}',
        ],
        'categories' => [
            'path' => '/blog/categories/{filename}',
            'posts' => function ($page, $allPosts) {
                return $allPosts->filter(function ($post) use ($page) {
                    return $post->categories ? in_array($page->getFilename(), $post->categories, true) : false;
                });
            },
        ],
    ],

    // helpers
    'getDate' => function ($page) {
        return Datetime::createFromFormat('U', $page->date);
    },
    'getExcerpt' => function ($page, $length = 255) {
        if ($page->excerpt) {
            return $page->excerpt;
        }

        $content = preg_split('/<!-- more -->/m', $page->getContent(), 2);
        $cleaned = trim(
            strip_tags(
                preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $content[0]),
                '<code>'
            )
        );

        if (count($content) > 1) {
            return $content[0];
        }

        $truncated = substr($cleaned, 0, $length);

        if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
            $truncated .= '</code>';
        }

        return strlen($cleaned) > $length
            ? preg_replace('/\s+?(\S+)?$/', '', $truncated) . '...'
            : $cleaned;
    },
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
    'age' => function () {
        return \Carbon\Carbon::createFromDate(1981, 10, 29)->diff(\Carbon\Carbon::now())->format('%y');
    },
];
