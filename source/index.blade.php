@extends('_layouts.master')

@push('meta')
<meta property="og:site_name" content="Regis Freyd" />
<meta property="og:title" content="{{ $page->title }}" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ $page->getUrl() }}" />
<meta property="og:description" content="{{ $page->siteDescription }}" />
<meta property="twitter:site" content="@maazarin">
<meta property="twitter:creator" content="@maazarin">
@endpush

@section('body')

<div class="mx-auto max-w-2xl mb-4 sm:mb-20 p-4 sm:p-0">
  <p class="font-medium mb-4">Hi 👋</p>
  <p class=" mb5">My name is Regis. I've created <a href="https://monicahq.com" class="underline decoration-sky-500 hover:decoration-2">Monica</a>, an open source personal CRM, and <a href=" https://officelife.io" class="underline decoration-sky-500 hover:decoration-2">OfficeLife</a>, an open source HR system.</p>
</div>

<div class="mx-auto max-w-2xl flex p-4 sm:p-0 sm:mb-6">
  <h2 class="font-bold mr-2">Sometimes I draw comics</h2>
  <a href="/comics" class="underline decoration-sky-500 hover:decoration-2">See all ({{ $comics->count() }})</a>
</div>

<div class=" mx-auto max-w-6xl mb-8 p-4 sm:p-0">
  @php
  $latestComics = $comics->sortByDesc('id')->take(3)->all();
  @endphp

  <div class="grid grid-cols-3 gap-6">
    @foreach ($latestComics as $comic)
    <div class="mb-2 ">
      <a href="{{ $comic->getUrl() }}"><img src="{{ $comic->img }}" alt="{{ $comic->title }}"></a>
      <a href="{{ $comic->getUrl() }}" title="Read more - {{ $comic->title }}" class="underline decoration-sky-500 hover:decoration-2">{{ $comic->title }}</a>
      <span class="block text-xs text-gray-400">{{ date('F j, Y', $comic->date) }}</span>
    </div>
    @endforeach
  </div>
</div>

<div class="mx-auto max-w-2xl p-4 sm:p-0 mb-14">
  <div class="flex justify-between">
    <h2 class="font-bold mb-6">Sometimes I write</h2>
  </div>

  <ul class="">
    @foreach ($posts as $post)
    <li class="mb-2">
      <a href="{{ $post->getUrl() }}" title="Read more - {{ $post->title }}" class="underline decoration-sky-500 hover:decoration-2">{{ $post->title }}</a>
      <span class="text-xs text-gray-400">{{ date('F j, Y', $post->date) }}</span>
    </li>
    @endforeach
  </ul>
</div>

<div class="mx-auto max-w-2xl p-4 sm:p-0 mb-6">
  <h2 class="font-bold mb-6">Elsewhere</h2>

  <div class="flex items-start mb-2">
    <div class="flex items-center mr-4  gray w3">
      &#8203;
      Twitter
    </div>
    <span class=""><a href="https://twitter.com/maazarin">@maazarin</a></span>
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
    <span class=""><a href="https://dribbble.com/djaiss">@maazarin</a></span>
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
