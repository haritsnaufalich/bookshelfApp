<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BookShelf | {{ $title }}</title>
  @vite('resources/css/app.css')
</head>
<body>
  @include('partials.navbar')
  <div class="container px-[24px] mx-auto my-8">
    @yield('container')
  </div>
  @vite('resources/js/app.js')
</body>
</html>