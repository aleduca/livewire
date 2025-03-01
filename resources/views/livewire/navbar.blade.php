<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Livewire</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item" wire:ignore>
          <a class="nav-link" aria-current="page" href="{{route('home')}}" wire:navigate wire:current.exact='link-active'>Home</a>
        </li>
        <li class="nav-item" wire:ignore>
          <a class="nav-link" href="{{route('posts')}}" wire:navigate wire:current='link-active'>Posts</a>
        </li>
        <li class="nav-item" x-on:toggle-login.window="$wire.$refresh()">
          @auth
            <a class="nav-link" href="{{route('posts')}}" wire:navigate wire:current='link-active'>Dashboard</a>
          @endauth
        </li>
      </ul>
    </div>
    @livewire('login')
  </div>
</nav>
