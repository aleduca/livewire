<div>
  {{-- @if (session()->has('error'))
  <span class="text text-danger">{{ session()->get('error') }}</span>
  @endif

  @if (auth()->guest())
  <form action="" wire:submit='login'>
    @error('email')
    <span class="text text-danger">{{ $message }}</span>
    @enderror
    <input type="text" wire:model.live.debounce.500ms='email'>
    @error('password')
    <span class="text text-danger">{{ $message }}</span>
    @enderror
    <input type="text" wire:model.live.debounce.500ms='password'>
    <button type="submit">Login</button>
    <x-loading wire:target='login' />
  </form>
  @else
  Bem vindo, {{ auth()->user()->firstName }} {{ auth()->user()->lastName }} <button wire:click='logout'>Logout</button>
  <x-loading wire:target='logout' />
  @endif --}}

<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-white">
  <body class="h-full">
  ```
-->
@auth()
  <h3 class="mb-2">User already logged in</h3>
  <a href="{{ route('home') }}" wire:navigate class="bg-indigo-500 p-2 text-sm rounded text-white mt-2">Redirect to home</a>
@else
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-12 w-auto" src="{{ asset('storage/photos/logo.png') }}" alt="Your Company">
    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Sign in to your account</h2>
  </div>

  @if (session()->has('error'))
  <span class="text-red-600 italic text-center mt-3">{{ session()->get('error') }}</span>
  @endif

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" wire:submit='login'>
      <div>
        <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
        <div class="mt-2">
          <input type="email" name="email" wire:model.live.debounce.500ms='email' id="email" autocomplete="email" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
          @error('email')
          <span class="text-red-600 italic text-sm">{{ $message }}</span>
          @enderror
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
          <div class="text-sm">
            <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
          </div>
        </div>
        <div class="mt-2">
          <input type="password" name="password" id="password" wire:model.live.debounce.500ms='password' autocomplete="current-password" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
          @error('password')
          <span class="text-red-600 italic text-sm">{{ $message }}</span>
          @enderror
        </div>
      </div>

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 cursor-pointer">
          <span>Sign in</span>
          <x-loading wire:target="login" />

        </button>
      </div>
    </form>

  </div>
</div>
@endauth

</div>
