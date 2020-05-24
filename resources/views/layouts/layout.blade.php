<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> @yield('titolo')-Boolpress </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>

    {{-- HEADER --}}
    @include('partials.header')
    {{-- HEADER --}}

    {{-- MAIN --}}
    @yield('main')
    {{-- MAIN --}}

    {{-- FOOTER --}}
    @yield('footer')
    {{-- FOOTER --}}

  </body>
</html>
