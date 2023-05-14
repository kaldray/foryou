<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>For you</title>
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link
      href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap"
      rel="stylesheet"
    />
  </head>
  <body class="antialiased">
    <header>@include("components.navbar")</header>
    <main class="min-h-screen">@yield("main")</main>
    <footer>@include("components.footer")</footer>
  </body>
</html>
