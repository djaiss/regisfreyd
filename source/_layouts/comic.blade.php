@extends('_layouts.master')

@push('meta')
<meta property="og:title" content="{{ $page->title }}" />
<meta property="og:type" content="article" />
<meta property="og:url" content="{{ $page->getUrl() }}" />
<meta property="og:image" content="{{ $page->baseUrl.'/assets/img/post/'.$page->slug }}.png" />
<meta property="og:image:height" content="628" />
<meta property="og:image:width" content="1200" />
<meta property="og:description" content="{{ $page->description }}" />

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:description" content="{{ $page->description }}" />
<meta name="twitter:title" content="{{ $page->title }}" />
<meta name="twitter:image" content="{{ $page->baseUrl.'/assets/img/post/'.$page->slug }}.png" />
@endpush

@section('body')
<div class="mx-auto max-w-2xl mb-4 sm:mb-20 p-4 sm:p-0">
  <div class="mb-4">&LeftArrow; <a href="/" class="text-sm underline decoration-sky-500 hover:decoration-2">Back to homepage</a></div>
  <h1 class="p-name mb0 lh-copy font-bold text-xl">
    {{ $page->title }}
    <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800"># {{ $page->id }}</span>
  </h1>
  <p class="text-xs mb-4 mt-1 text-gray-500">Published on <span class="dt-published" datetime="{{ date('Y-m-d 12:00:00', $page->date) }}">{{ date('F j, Y', $page->date) }}</span></p>

  <div class="post mb-12">
    <a href="{{ $page->img }}">
      <img loading="lazy" src="{{ $page->img }}" alt="{{ $page->title }}" />
    </a>
  </div>

  <div class="mb-2 text-xs">
    <p>Other comics</p>
  </div>
  <nav class="flex justify-between">
    <div>
      @if ($next = $page->getNext())
      <a href="{{ $next->getUrl() }}" class="underline decoration-sky-500 hover:decoration-2" title="Older Post: {{ $next->title }}">
        &LeftArrow; {{ $next->title }}
      </a>
      @endif
    </div>

    <div>
      @if ($previous = $page->getPrevious())
      <a href="{{ $previous->getUrl() }}" class="underline decoration-sky-500 hover:decoration-2" title="Newer Post: {{ $previous->title }}">
        {{ $previous->title }} &RightArrow;
      </a>
      @endif
    </div>
  </nav>
</div>

<div class="mx-auto max-w-2xl mb-4 sm:mb-20 p-4 sm:p-0">
  <p class="text-center mb-2">Hi from Canada 🇨🇦</p>
</div>

@endsection
