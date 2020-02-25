@extends('_layouts.master')

@section('body')

<p>Hi 👋</p>
<p class="lh-copy">I’m Regis Freyd, product manager by career and product designer/full stack developer by passion based in Montréal, and very active in the open source community.</p>
<p class="lh-copy">My tools of choice are Figma, Laravel, Vue and a good sense of pragmatism.</p>
<p class="lh-copy mb5">For the past 15 years, I’ve worked at major companies as product manager, and shipped several side projects, some of them being pretty successful.</p>

<h2 class="fw4 f4">Latest posts</h2>

@foreach ($posts->where('featured', false)->take(6)->chunk(2) as $row)
<ul class="list mb5 pl0">
  @foreach ($row as $post)
  <li class="h-entry">
    <a href="{{ $post->getUrl() }}" title="Read more - {{ $post->title }}" class="p-name">{{ $post->title }}</a>
  </li>
  @endforeach
</ul>
@endforeach

<h2 class="fw4 f4">My most popular repositories</h2>

<div class="ba br2 repositories border mb3">
  <div class="relative">
    <p class="ma0 bb ph2 pv3 info br2 br--top border">
      <a href="https://github.com/monicahq" class="org no-underline">monicahq</a><span class="mh1">/</span><a href="https://github.com/monicahq/monica" class="name fw6 no-underline">monica</a>
      <span class="fr bg-white f6">
        <span class="fw6 bl bt bb ph2 pv1 br2 br--left border">Star</span><span class="ph2 pv1 ba br2 br--right border">9.3k</span>
      </span>
    </p>
    <p class="ma0 pa2 lh-copy">Personal CRM. Remember everything about your friends and family.</p>
  </div>
</div>

<div class="ba br2 repositories border mb3">
  <div class="relative">
    <p class="ma0 bb ph2 pv3 info br2 br--top border">
      <a href="https://github.com/djaiss" class="org no-underline">djaiss</a><span class="mh1">/</span><a href="https://github.com/djaiss/mapsicon" class="name fw6 no-underline">mapsicon</a>
      <span class="fr bg-white f6">
        <span class="fw6 bl bt bb ph2 pv1 br2 br--left border">Star</span><span class="ph2 pv1 ba br2 br--right border">1.9k</span>
      </span>
    </p>
    <p class="ma0 pa2 lh-copy">A free collection of maps for every country in the world, available in 11 sizes or in SVG.</p>
  </div>
</div>

<div class="ba br2 repositories border mb5">
  <div class="relative">
    <p class="ma0 bb ph2 pv3 info br2 br--top border">
      <a href="https://github.com/djaiss" class="org no-underline">djaiss</a><span class="mh1">/</span><a href="https://github.com/djaiss/egonotifier" class="name fw6 no-underline">egonotifier</a>
      <span class="fr bg-white f6">
        <span class="fw6 bl bt bb ph2 pv1 br2 br--left border">Star</span><span class="ph2 pv1 ba br2 br--right border">8</span>
      </span>
    </p>
    <p class="ma0 pa2 lh-copy">👀 Monitors repositories you care about and sends you an email when they reach new milestones.</p>
  </div>
</div>

<h2 class="fw4 f4">Latest shots on Dribbble</h2>

<div class="flex mb3">
  <div class="bg-white pa2 dribbble mr3">
    <a href="https://dribbble.com/djaiss">
      <img src="/assets/img/0085ddd22e50d7aa8f86d2c0e33943d1.png" alt="">
    </a>
  </div>
  <div class="bg-white pa2 dribbble">
    <a href="https://dribbble.com/djaiss">
      <img src="/assets/img/5ea7ad5f1ad3f4d88901c7026e671b39.png" alt="">
    </a>
  </div>
</div>

<div class="flex mb5">
  <div class="bg-white pa2 dribbble mr3">
    <a href="https://dribbble.com/djaiss">
      <img src="/assets/img/96fddb2d90d74f0ffe347c4ccac1d4be.png" alt="">
    </a>
  </div>
  <div class="bg-white pa2 dribbble">
    <a href="https://dribbble.com/djaiss">
      <img src="/assets/img/2d4708d0bd4bb064c343a9a02d15a988.png" alt="">
    </a>
  </div>
</div>

<h2 class="fw4 f4">Work highlights</h2>

<div class="mb5">
  <div class="flex items-start mb3">
    <div class="flex items-center mr3 lh-copy gray">
      &#8203;
      2019
    </div>
    <span class="lh-copy">Director of Product at Quebecor</span>
  </div>
  <div class="flex items-start mb3">
    <div class="flex items-center mr3 lh-copy gray">
      &#8203;
      2019
    </div>
    <span class="lh-copy">Launched <a href="https://egonotifier.com">Egonotifier</a></span>
  </div>
  <div class=" flex items-start mb3">
    <div class="flex items-center mr3 lh-copy gray">
      &#8203;
      2017
    </div>
    <span class="lh-copy">Launched <a href="https://github.com/monicahq/monica">Monica</a>, a personal CRM, released as open source with 40k users and 5M+ downloads</span>
  </div>
  <div class="flex items-start mb3">
    <div class="flex items-center mr3 lh-copy gray">
      &#8203;
      2016
    </div>
    <span class="lh-copy">Product manager at <a href="https://about.gitlab.com">GitLab</a></span>
  </div>
  <div class="flex items-start mb3">
    <div class="flex items-center mr3 lh-copy gray">
      &#8203;
      2011
    </div>
    <span class="lh-copy">Product designer at <a href="https://cakemail.com">CakeMail</a></span>
  </div>
  <div class="flex items-start mb3">
    <div class="flex items-center mr3 lh-copy gray">
      &#8203;
      2011
    </div>
    <span class="lh-copy">Launched <a href="https://totalwireframe.com">Totalwireframe</a>, selling Axure libraries to 1600 companies, including Blizzard and Siemens</span>
  </div>
  <div class="flex items-start mb3">
    <div class="flex items-center mr3 lh-copy gray">
      &#8203;
      2008
    </div>
    <span class="lh-copy">UX designer at SidLee</span>
  </div>
  <div class="flex items-start mb3">
    <div class="flex items-center mr3 lh-copy gray">
      &#8203;
      2007
    </div>
    <span class="lh-copy">Product manager at Dailymotion</span>
  </div>
</div>

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
        unScramble("personalblog", "fastmail.fmizzle", "Email address", "", "");
      </script><noscript>Email address: personalblog/ÄT/fastmail/DÖT/fm</noscript>
    </span>
  </div>
</div>

@stop
