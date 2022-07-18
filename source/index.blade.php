@extends('_layouts.master')

@push('meta')
<meta property="og:site_name" content="Regis Freyd" />
<meta property="og:title" content="{{ $page->title }}" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ $page->getUrl() }}" />
<meta property="og:description" content="{{ $page->siteDescription }}" />
<meta property="twitter:site" content="@djaiss">
<meta property="twitter:creator" content="@djaiss">
@endpush

@section('body')

<p class="fw6">Hi 👋</p>
<p class="lh-copy mb5">My name is Regis. I've created <a href="https://monicahq.com">Monica</a>, an open source personal CRM, and <a href="https://officelife.io">OfficeLife</a>, an open source HR system.</p>

<h2 class="fw4 f4">Comics</h2>
@php
  $latestComics = $comics->sortByDesc('id')->take(3)->all();
@endphp

<ul class="list mb5 pl0">
  @foreach ($latestComics as $comic)
  <li class="h-entry mb3 lh-copy">
    <img src="{{ $comic->img }}" class="db index-img">
    <a href="{{ $comic->getUrl() }}" title="Read more - {{ $comic->title }}" class="p-name f5 fw5">{{ $comic->title }}</a>
    <span class="db f7 gray">{{ date('F j, Y', $comic->date) }}</span>
  </li>
  @endforeach
</ul>


<h2 class="fw4 f4">Posts</h2>

<ul class="list mb5 pl0">
  @foreach ($posts as $post)
  <li class="h-entry mb3 lh-copy">
    <a href="{{ $post->getUrl() }}" title="Read more - {{ $post->title }}" class="p-name f5 fw5">{{ $post->title }}</a>
    <span class="db f7 gray">{{ date('F j, Y', $post->date) }}</span>
  </li>
  @endforeach
</ul>

<h2 class="fw4 f4">Elsewhere</h2>

<div class="mb5">
  <div class="flex items-start mb3">
    <div class="flex items-center mr3 lh-copy gray w3">
      &#8203;
      Twitter
    </div>
    <span class="lh-copy"><a href="https://twitter.com/maazarin">@maazarin</a></span>
  </div>
  <div class="flex items-start mb3">
    <div class="flex items-center mr3 lh-copy gray w3">
      &#8203;
      GitHub
    </div>
    <span class="lh-copy"><a href="https://github.com/djaiss">@djaiss</a></span>
  </div>
  <div class="flex items-start mb3">
    <div class="flex items-center mr3 lh-copy gray w3">
      &#8203;
      Dribbble
    </div>
    <span class="lh-copy"><a href="https://dribbble.com/djaiss">@djaiss</a></span>
  </div>
  <div class=" flex items-start mb3">
    <div class="flex items-center mr3 lh-copy gray w3">
      &#8203;
      Email
    </div>
    <span class="lh-copy">
      <script language="JavaScript">
        unScramble("personalblog", "fastmail.fmizzle", "Send me an email", "", "");
      </script><noscript>Email address: personalblog/ÄT/fastmail/DÖT/fm</noscript>
    </span>
  </div>
</div>

@stop
