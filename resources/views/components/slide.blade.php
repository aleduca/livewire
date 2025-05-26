
  <!--
    Background backdrop, show/hide based on slide-over state.

    Entering: "ease-in-out duration-500"
      From: "opacity-0"
      To: "opacity-100"
    Leaving: "ease-in-out duration-500"
      From: "opacity-100"
      To: "opacity-0"
  -->
  <div class="fixed inset-0 bg-gray-500/75 transition-opacity" aria-hidden="true"
    x-show="open"
    x-transition:enter="ease-in-out duration-500"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="ease-in-out duration-500"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
  ></div>

  <div class="fixed inset-0 overflow-hidden">
    <div class="absolute inset-0 overflow-hidden">
      <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
        <!--
          Slide-over panel, show/hide based on slide-over state.

          Entering: "transform transition ease-in-out duration-500 sm:duration-700"
            From: "translate-x-full"
            To: "translate-x-0"
          Leaving: "transform transition ease-in-out duration-500 sm:duration-700"
            From: "translate-x-0"
            To: "translate-x-full"
        -->
        <div
        class="pointer-events-auto relative w-screen max-w-md"
          x-show="open"
          x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
          x-transition:enter-start="translate-x-full"
          x-transition:enter-end="translate-x-0"
          x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
          x-transition:leave-start="translate-x-0"
          x-transition:leave-end="translate-x-full"
        >
          <!--
            Close button, show/hide based on slide-over state.

            Entering: "ease-in-out duration-500"
              From: "opacity-0"
              To: "opacity-100"
            Leaving: "ease-in-out duration-500"
              From: "opacity-100"
              To: "opacity-0"
          -->
          <div
          class="absolute top-0 left-0 -ml-8 flex pt-4 pr-2 sm:-ml-10 sm:pr-4"
            x-transition:enter="ease-in-out duration-500"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in-out duration-500"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
          >
            <button type="button" class="relative rounded-md text-gray-300 hover:text-white focus:ring-2 focus:ring-white focus:outline-hidden cursor-pointer" @click="open = false">
              <span class="absolute -inset-2.5"></span>
              <span class="sr-only">Close panel</span>
              <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
              </svg>
            </button>
          </div>

          <div class="flex h-full flex-col overflow-y-scroll bg-white py-6 shadow-xl" @click.outside="open = false">
            <div class="px-4 sm:px-6">
              <h2 class="text-base font-semibold text-gray-900" id="slide-over-title" x-text="form.title ?? 'Select a form'"></h2>
            </div>
            <div class="relative mt-6 flex-1 px-4 sm:px-6">
              <template x-if="form.name === 'login'">
                @livewire('login')
              </template>

              <template x-if="form.name === 'post-create'">
                @livewire('post-create')
              </template>

              <template x-if="!form?.name">
                <div>No form selected</div>
              </template>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
