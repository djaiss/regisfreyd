<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="title" content="{{ $page->meta_title ?? $page->siteTitle }}">
  <meta name="description" content="{{ $page->meta_description ?? $page->siteDescription }}">
  <meta name="author" content="Regis Freyd">
  <link rel="canonical" href="{{ $page->getUrl() }}">
  <link rel="home" href="{{ $page->baseUrl }}">
  <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

  <!-- favicon -->
  <link rel="icon" href="/assets/img/favicon-32.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon-32.png">

  <title>{{ $page->title ?  $page->title.' | ' : '' }}{{ $page->siteName }}</title>

  @stack('meta')

  <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

  <script language="JavaScript">
    function unScramble(eMail1, eMail2, linkText, subjectText, statusText) {
      var a, b, c, d, e;
      a = eMail1;
      c = linkText;
      b = eMail2.substring(0, eMail2.length - 5);
      if (subjectText != "") {
        d = "?subject=" + escape(subjectText);
      } else {
        d = "";
      }
      if (statusText != "") {
        e = " onMouseOver=\"top.status=\'" + statusText +
          "\'\;return true\;\" onMouseOut=\"top.status=\'\'\;return true\;\"";
      } else {
        e = "";
      }
      document.write("<A HREF=\"mai" + "lto:" + a + "@" + b + d + "\"" + e + ">" + c + "</A>");
    }
  </script>
</head>

<body>
  <main role="main" class="mw7 center mt5 ph3 ph0-ns">
    <ul class="mb5 list pa0">
      <li class="di">
        <a href="/" class="mr2">Home</a>
        <a href="/about" class="mr2">About</a>
        <a href="/blog/feed.atom" class="mr2">RSS feed</a>
        <a href="https://twitter.com/djaiss">Twitter</a>
      </li>
    </ul>

    @yield('body')
  </main>

  @if ($page->production)
  <!-- Fathom - simple website analytics - https://usefathom.com -->
  <script>
    (function(f, a, t, h, o, m) {
      a[h] = a[h] || function() {
        (a[h].q = a[h].q || []).push(arguments)
      };
      o = f.createElement('script'),
        m = f.getElementsByTagName('script')[0];
      o.async = 1;
      o.src = t;
      o.id = 'fathom-script';
      m.parentNode.insertBefore(o, m)
    })(document, window, 'https://cdn.usefathom.com/tracker.js', 'fathom');
    fathom('set', 'siteId', 'HHOPDHUN');
    fathom('trackPageview');
  </script>
  <!-- / Fathom -->
  @endif
</body>

</html>
