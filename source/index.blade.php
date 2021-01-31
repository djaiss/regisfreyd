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

<p>Hi 👋</p>
<p class="lh-copy">I’m Regis Freyd, a developer, product designer and <a href="https://www.indiehackers.com/start">indie-hacker</a> based in Montréal, and quite active in <a href="https://github.com/djaiss">the open source community</a>. I’m currently building <a href="https://officelife.io">OfficeLife</a>, an open-source ERP for humans.</p>
<p class="lh-copy">The most successful project I've created and still maintain is <a href="https://monicahq.com">Monica</a>, an open source personal CRM. You can read more about me on the <a href="/about">About page</a>.</p>
<p class="lh-copy mb5">You should follow me on Twitter (<a href="https://twitter.com/djaiss">@djaiss</a>).</p>

<h2 class="fw4 f4">Latest posts</h2>

<ul class="list mb5 pl0">
  @foreach ($posts as $post)
  <li class="h-entry mb3 lh-copy">
    <a href="{{ $post->getUrl() }}" title="Read more - {{ $post->title }}" class="p-name f4">{{ $post->title }}</a>
    <span class="db f6">{{ date('F j, Y', $post->date) }}</span>
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
    <span class="lh-copy"><a href="https://twitter.com/djaiss">@djaiss</a></span>
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
