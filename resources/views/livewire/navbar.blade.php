<header class="bg-white" x-data="{
  open:false,
  hamburguerMenu:false
}" @keydown.escape.window ="open = false">
  <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
    <div class="flex lg:flex-1">
      <a href="#" class="-m-1.5 p-1.5">
        <span class="sr-only">Your Company</span>
        <img class="h-8 w-auto" src="{{ asset('storage/photos/logo.png') }}" alt="">
      </a>
    </div>
    <div class="flex lg:hidden" x-show="hamburguerMenu">
      <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700 cursor-pointer" @click="hamburguerMenu = false">
        <span class="sr-only">Open main menu</span>
        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>
    </div>
    <div class="hidden lg:flex lg:gap-x-12">
      <div class="relative">
        <button type="button" class="flex items-center gap-x-1 text-sm/6 font-semibold text-gray-900 cursor-pointer outline-none" aria-expanded="false" @click="open = !open">
          Dropdown
          <svg :class="open ? '' : 'rotate-180'" class="size-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
            <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
          </svg>
        </button>

        <div class="absolute top-full -left-8 z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5" x-show="open"
          x-cloak
          x-transition:enter="transition ease-out duration-200"
          x-transition:enter-start="opacity-0 translate-y-1"
          x-transition:enter-end="opacity-100 translate-y-0"
          x-transition:leave="transition ease-in duration-150"
          x-transition:leave-start="opacity-100 translate-y-0""
          x-transition:leave-end="opacity-0 translate-y-1"
         @click.outside="open = false">
          <x-navbar-dropdown />
        </div>
      </div>

      <a href="{{ route('home') }}" class="text-sm/6 font-semibold text-gray-900" wire:navigate wire:current.exact='link-active'>Home</a>
      <a href="{{ route('posts') }}" class="text-sm/6 font-semibold text-gray-900" wire:navigate wire:current.exact='link-active'>Posts</a>
      <a href="{{ route('posts') }}" class="text-sm/6 font-semibold text-gray-900" wire:navigate wire:current.exact='link-active'>Dashboard</a>
    </div>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      <a href="#" class="text-sm/6 font-semibold text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a>
    </div>
  </nav>


  <!-- Mobile menu, show/hide based on menu open state. -->
  <div class="lg:hidden" role="dialog" aria-modal="true" x-show="!hamburguerMenu">
    <!-- Background backdrop, show/hide based on slide-over state. -->
    <div class="fixed inset-0 z-10"></div>
    <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
      <div class="flex items-center justify-between">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Your Company</span>
          <img class="h-8 w-auto" src="{{ asset('storage/photos/logo.png') }}" alt="">
        </a>
        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700 cursor-pointer" @click="hamburguerMenu = true">
          <span class="sr-only">Close menu</span>
          <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="mt-6 flow-root">
        <div class="-my-6 divide-y divide-gray-500/10">
          <div class="space-y-2 py-6">
            <div class="-mx-3">
              <button type="button" class="flex w-full items-center justify-between rounded-lg py-2 pr-3.5 pl-3 text-base/7 font-semibold text-gray-900 hover:bg-gray-50 cursor-pointer" aria-controls="disclosure-1" aria-expanded="false" @click="open = !open">
                Product
                <!--
                  Expand/collapse icon, toggle classes based on menu open state.

                  Open: "rotate-180", Closed: ""
                -->
                <svg class="size-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon" :class="open ? '' : 'rotate-180'">
                  <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                </svg>
              </button>
              <!-- 'Product' sub-menu, show/hide based on menu state. -->
              <div class="mt-2 space-y-2" id="disclosure-1" x-show="open">
                <x-navbar-dropdown-mobile />
              </div>
            </div>
            <a href="{{ route('home') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50" wire:navigate wire:current.exact='link-active'>Home</a>
            <a href="{{ route('posts') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50" wire:navigate wire:current.exact='link-active'>Posts</a>
          </div>
          <div class="py-6">
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Log in</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
