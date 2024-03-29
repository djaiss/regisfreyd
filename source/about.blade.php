@extends('_layouts.master')

@push('meta')
<meta property="og:title" content="About {{ $page->siteName }}" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ $page->getUrl() }}" />
<meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')

<div class="flex mb5">
  <img src="/assets/img/picture.png" class="self-center br3 mr3" alt="regis freyd picture">

  <div>
    <p class="lh-copy">I'm an <a href="https://www.indiehackers.com/start">indie hacker</a> working mainly on OfficeLife and Monica in my spare time, currently living in Montréal.</p>
    <p class="lh-copy">I like working on products that improve people’s lives. I work in the open, and everything I do is <a href="https://github.com/djaiss">freely available</a>.</p>
    <p class="lh-copy">In the past, I worked at <a href="https://gitlab.com">GitLab</a>, <a href="https://cakemail.com">Cakemail</a> and <a href="https://dailymotion.com">Dailymotion</a> as product manager.</p>
    <p class="lh-copy">While I’m originally from France, I’ve lived in many countries (UK, Mali, Ivory Coast, Guinea and now Canada) and visited many more.</p>
    <p class="lh-copy">Right now, my focus is on my family and growing my side projects to businesses that can support me full time. I document my journey on Twitter. You should <a href="https://twitter.com/djaiss">follow me</a> if you want want real time updates on how it’s going on.</p>
  </div>

</div>


<h2 class="fw4 f4">What you’ll find on GitHub</h2>

<div class="ba br2 repositories border mb3">
  <div class="relative">
    <p class="ma0 bb ph2 pv3 info br2 br--top border">
      <a href="https://github.com/officelifehq" class="org no-underline">officelifehq</a><span class="mh1">/</span><a href="https://github.com/officelifehq/officelife" class="name fw6 no-underline">officelife</a>
      <span class="fr bg-white f6">
        <span class="fw6 bl bt bb ph2 pv1 br2 br--left border">Star</span><span class="ph2 pv1 ba br2 br--right border">67</span>
      </span>
    </p>
    <p class="ma0 pa2 lh-copy"> 🚀 It’s like SAP™ for humans</p>
  </div>
</div>

<div class="ba br2 repositories border mb3">
  <div class="relative">
    <p class="ma0 bb ph2 pv3 info br2 br--top border">
      <a href="https://github.com/monicahq" class="org no-underline">monicahq</a><span class="mh1">/</span><a href="https://github.com/monicahq/monica" class="name fw6 no-underline">monica</a>
      <span class="fr bg-white f6">
        <span class="fw6 bl bt bb ph2 pv1 br2 br--left border">Star</span><span class="ph2 pv1 ba br2 br--right border">12.5k</span>
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

<h2 class="fw4 f4">Work highlights</h2>

<div class="mb5">
  <div class="flex items-start mb3">
    <div class="flex items-center mr3 lh-copy gray">
      &#8203;
      2019
    </div>
    <span class="lh-copy">Director of Product at Quebecor</span>
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
    <span class="lh-copy">Product designer, and after, Director of Product at <a href="https://cakemail.com">CakeMail</a></span>
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

<h2 class="fw4 f4">Latest shots on <a href="https://dribbble.com/djaiss">Dribbble</a></h2>

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
@endsection
