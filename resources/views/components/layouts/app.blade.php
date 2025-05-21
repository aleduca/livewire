<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>{{ $title ?? 'Livewire course' }}</title>

  @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>

  @yield('css')
  @livewire('notification')
  @livewire('navbar')
  <div class="container mx-auto">
    {{$slot}}
  </div>

  @yield('js')
</body>
</html>
