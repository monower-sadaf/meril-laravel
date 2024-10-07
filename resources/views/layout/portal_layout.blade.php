<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meril Soft</title>
  @vite('resources/css/app.css')
</head>
<body>
@include('layout.partials.navbar')
  @yield('content')
@include('layout.partials.footer')
</body>
</html>