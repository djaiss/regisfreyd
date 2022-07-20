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
  <h1 class="p-name mb0 lh-copy font-bold text-xl">{{ $page->title }}</h1>
  <p class="text-xs mb-4 mt-1 text-gray-500">Published on <span class="dt-published" datetime="{{ date('Y-m-d 12:00:00', $page->date) }}">{{ date('F j, Y', $page->date) }}</span></p>

  @if ($page->cover_image)
  <img src="{{ $page->cover_image }}" alt="{{ $page->title }} cover image" class="mb-2">
  @endif

  @if ($page->categories)
  @foreach ($page->categories as $i => $category)
  <a href="{{ '/blog/categories/' . $category }}" title="View posts in {{ $category }}" class="inline-block bg-gray-300 hover:bg-blue-200 leading-loose tracking-wide text-gray-800 uppercase text-xs font-semibold rounded mr-4 px-3 pt-px">{{ $category }}</a>
  @endforeach
  @endif

  <div class="post mb-12">
    @yield('content')
  </div>

  <div class="mb-2 text-xs">
    <p>Other posts</p>
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
