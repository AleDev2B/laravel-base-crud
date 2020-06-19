<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel CRUD</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

      <!-- My Files -->
      <link rel="stylesheet" href="/css/app.css">

    </head>
    <body>
      <div class="header">
        @include('components.header')
      </div>

      <div class="content">
        @yield('content')
      </div>

      <div class="footer">
        @include('components.footer')
      </div>
    </body>
</html>
