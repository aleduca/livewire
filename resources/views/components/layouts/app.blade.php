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

  <div class="relative z-10" x-cloak aria-labelledby="slide-over-title" @openslide.window="listenEvent($event)" x-show="open" role="dialog" aria-modal="true" x-data="{
    open:false,
    form:{
      name:'',
      title:''
    },
    listenEvent(event){
      this.open = true;
      this.form = event.detail;
    }
  }">
    <x-slide />
  </div>

  <div class="container mx-auto">
    {{$slot}}
  </div>

  @yield('js')
</body>
</html>
