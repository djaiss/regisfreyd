@extends('_layouts.master')

@push('meta')
<meta property="og:site_name" content="100xdeveloper" />
<meta property="og:title" content="{{ $page->title }}" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ $page->getUrl() }}" />
<meta property="og:description" content="{{ $page->siteDescription }}" />
@endpush

@section('body')

<div class="mx-auto max-w-2xl mb-4 sm:mb-20 p-4 sm:p-0">
  <div class="mb-4">&LeftArrow; <a href="/" class="text-sm underline decoration-sky-500 hover:decoration-2">Back to homepage</a></div>

  <p>These are the small comics I draw with an iPad and a pencil. They are meant to make you smile.</p>
</div>

<div class=" mx-auto max-w-6xl mb-8 p-4 sm:p-0">
  @php
  $latestComics = $comics->sortByDesc('id')->all();
  @endphp

  <div class="grid grid-cols-3 gap-6 content-center">
    @foreach ($latestComics as $comic)
    <div class="mb-2">
      <a href="{{ $comic->getUrl() }}"><img loading="lazy" src="{{ $comic->img }}" alt="{{ $comic->title }}"></a>
      <a href="{{ $comic->getUrl() }}" title="Read more - {{ $comic->title }}" class="underline decoration-sky-500 hover:decoration-2">{{ $comic->title }}</a>
      <span class="block text-xs text-gray-400">{{ date('F j, Y', $comic->date) }}</span>
    </div>
    @endforeach
  </div>
</div>

<div class="mx-auto max-w-2xl p-4 sm:p-0 mb-6">
  <h2 class="font-bold mb-6">Elsewhere</h2>

  <div class="flex items-start mb-2">
    <div class="flex items-center mr-4  gray w3">
      &#8203;
      Mastodon
    </div>
    <span class=""><a href="https://phpc.social/@regis">@regis</a></span>
  </div>
  <div class="flex items-start mb-2">
    <div class="flex items-center mr-4  gray w3">
      &#8203;
      GitHub
    </div>
    <span class=""><a href="https://github.com/djaiss">@maazarin</a></span>
  </div>
  <div class="flex items-start mb-2">
    <div class="flex items-center mr-4  gray w3">
      &#8203;
      Dribbble
    </div>
    <span class=""><a href="https://dribbble.com/djaiss">@djaiss</a></span>
  </div>
  <div class=" flex items-start mb-2">
    <div class="flex items-center mr-4  gray w3">
      &#8203;
      Email
    </div>
    <span class="">
      <script language="JavaScript">
        unScramble("personalblog", "fastmail.fmizzle", "Send me an email", "", "");
      </script><noscript>Email address: personalblog/ÄT/fastmail/DÖT/fm</noscript>
    </span>
  </div>
</div>

@stop
