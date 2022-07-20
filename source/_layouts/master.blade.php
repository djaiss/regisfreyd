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

  <link rel="stylesheet" href="{{ mix('css/main.css') }}">

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
  <div class="mx-auto max-w-2xl flex justify-between mt-4 mb-8 sm:p-0 p-4">
      <ul class="">
        <li class="inline">
          <a href="/" class="mr-4 font-bold underline decoration-sky-500 hover:decoration-2">Home</a>
        </li>
        <li class="inline">
          <a href="/about" class="font-bold underline decoration-sky-500 hover:decoration-2">About</a>
        </li>
      </ul>
      <ul class="">
        <li class="inline">
          <a href="https://twitter.com/maazarin" class="font-bold underline decoration-sky-500 hover:decoration-2">Twitter</a>
        </li>
      </ul>
  </div>

  @yield('body')

  @if ($page->production)
  @endif
</body>

</html>
