<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Weibo App') - Laravel 入门教程</title>
    {{-- <link rel="stylesheet" href="/css/app.css"> --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  </head>
  <body>
{{-- 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="/">Weibo App</a>
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item"><a class="nav-link" href="/help">help</a></li>
          <li class="nav-item" ><a class="nav-link" href="/about">about</a></li>
        </ul>
      </div>
    </nav> --}}
    @include('layouts._header')

    <div class="container">
      @include('shared._messages')
      @yield('content')
      @include('layouts._footer')
    </div>
  </body>
</html>