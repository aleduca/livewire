<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Livewire-dev</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>

  @yield('css')
  <x-navbar></x-navbar>
  <div class="container">
    @yield('content')
  </div>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  @yield('js')
</body>
</html>
