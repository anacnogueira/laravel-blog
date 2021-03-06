<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Add to homescreen -->
    <link rel="manifest" href="manifest.json">

    <!-- Fallback to homescreen for Chrome <39 on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Material Design Lite">
    <link rel="icon" sizes="192x192" href="{{ asset('/img/android-desktop.png') }}">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon" href="{{ asset('/img/ios-desktop.png') }}">

    <!-- TODO: Tile icon for Win8 (144x144 + tile color) -->
    <!-- <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png"> -->
    <!-- <meta name="msapplication-TileColor" content="#3372DF"> -->

    <meta name="theme-color" content="#263238">

    <link rel="shortcut icon" href="{{ asset('/img/favicon.png') }}">
    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <!-- Page styles -->
    <link rel="stylesheet" href="{{ asset('/css/prism-default.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/material.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body class="templates">

  <div class="image-preloader"></div>
  <div class="docs-layout mdl-layout mdl-js-layout">
    <header class="docs-layout-header mdl-layout__header">
       <div class="docs-navigation__container">
        <nav class="docs-navigation mdl-navigation">
          <a href="#" class="mdl-navigation__link about">Laravel</a>
          <a href="#" class="mdl-navigation__link started">Home</a>         
        </nav>
      </div>
      <i class="material-icons scrollindicator scrollindicator--right">&#xE315;</i>
      <i class="material-icons scrollindicator scrollindicator--left">&#xE314;</i>
    </header>
    <main class="docs-layout-content mdl-layout__content mdl-color-text--grey-600">
      <div class="content mdl-grid mdl-grid--no-spacing" id="content">
        @yield('content')
      </div>

      <footer class="docs-text-styling docs-footer mdl-mini-footer mdl-color--grey-900">
       Ana Claudia - 2016
      </footer>
    </main>
  </div>

    <!-- IE Compatibility shims -->
      <!--[if lt IE 9]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js""></script>
      <![endif]-->

      <!--[if IE]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/es5-shim/4.1.7/es5-shim.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/classlist/2014.01.31/classList.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/flexie/1.0.3/flexie.min.js"></script>
        <link href="../assets/ie.css" rel="stylesheet">
      <![endif]-->
    <!-- end shims -->


    <!-- Material Design Lite -->
    <script src="{{ asset('/js/material.min.js') }}"></script>
    <!-- Add Copy-to-CodePen buttons to code blocks -->
    <script src="{{ asset('/js/codepen.js') }}"></script>
    <!-- Enable Prism syntax highlighting -->
    <script src="{{ asset('/js/prism.js') }}"></script>
    <script src="{{ asset('/js/prism-markup.min.js') }}"></script>
    <script src="{{ asset('/js/prism-javascript.min.js') }}"></script>
    <script src="{{ asset('/js/prism-css.min.js') }}"></script>
    <script src="{{ asset('/js/prism-bash.min.js') }}"></script>
    <script src="{{ asset('/js/main.js') }}"></script>
    <!-- Built with love using Material Design Lite -->
  </body>
</html>