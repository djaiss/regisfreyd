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
<div class="blog-post h-entry mb5 bb b--black-20 pb4">
  <div class="mb4">&LeftArrow; <a href="/">Back to homepage</a></div>
  <h1 class="p-name mb2 lh-copy fw5 f3">{{ $page->title }}</h1>
  <p class="f6 mb4 mt0 gray">Published on <span class="dt-published" datetime="{{ date('Y-m-d 12:00:00', $page->date) }}">{{ date('F j, Y', $page->date) }}</span></p>

  @if ($page->cover_image)
  <img src="{{ $page->cover_image }}" alt="{{ $page->title }} cover image" class="mb-2">
  @endif

  @if ($page->categories)
  @foreach ($page->categories as $i => $category)
  <a href="{{ '/blog/categories/' . $category }}" title="View posts in {{ $category }}" class="inline-block bg-gray-300 hover:bg-blue-200 leading-loose tracking-wide text-gray-800 uppercase text-xs font-semibold rounded mr-4 px-3 pt-px">{{ $category }}</a>
  @endforeach
  @endif

  <div class="f4">
    @yield('content')
  </div>

  <div class="tc mt6 bb b--black-20 pb4 mb4">
    <div class="">
      <img src="/assets/img/avatar.png" alt="avatar regis freyd">
    </div>
    <p>Regis Freyd is an indie hacker living in Montreal. He’s the author of the popular open source personal CRM <a href="https://github.com/monicahq/monica">Monica</a>. You should <a href="https://twitter.com/djaiss">follow him on Twitter</a>.</p>
  </div>

  <nav class="flex justify-between">
    <div>
      @if ($next = $page->getNext())
      <a href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
        &LeftArrow; {{ $next->title }}
      </a>
      @endif
    </div>

    <div>
      @if ($previous = $page->getPrevious())
      <a href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
        {{ $previous->title }} &RightArrow;
      </a>
      @endif
    </div>
  </nav>
</div>

<p class="tc mb2">Hi from Canada 🇨🇦</p>
<p class="f6 lh-copy">You are not being tracked. Analytics of this site are provided by <a href="https://usefathom.com/ref/APPNBJ">Fathom</a>, a privacy-friendly analytics tool.</p>

@endsection
