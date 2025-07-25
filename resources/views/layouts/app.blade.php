<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="zombie, apocalypse, strategy, survival, online game, construction, combat, resources, alliance, raid, thelaststanddeadzone, laststand, socialgame, revive, game, videogame">
    <meta name="viewport" content="width=device-width" />

    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">

    <title>@yield('title', 'The Last Stand: Dead Zone Revive')</title>

    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/foundation.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/conartist.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/dead-zone.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@3.1.0/dist/cookieconsent.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@3.1.0/dist/cookieconsent.umd.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/custom.modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-1.9.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/foundation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.post.message.js') }}"></script>
    <script type="application/javascript">
      $(document).foundation();
      $(document).onMessage(function(e) {
        data = e.data;
        if (isNaN(data)) {
          return;
        }
        var height = parseInt(data) + 32;
        $('#iframe').css('height', height);
      });
    </script>
  </head>
  <body>
      <!-- Header -->
      @include('partials.header')

      <!-- Main Content -->
      <main>
          @yield('content')
      </main>
      
      <!-- Footer -->
      <script type="module" src="{{ asset('assets/js/cookieconsent-config.js') }}"></script>
      @include('partials.footer')
  </body>
</html>