  <div class="p-4">
  <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
    <div class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
    </svg>

    </div>
    <div class="flex-auto">
      <a href="#" class="block font-semibold text-gray-900">
        Profile
        <span class="absolute inset-0"></span>
      </a>
      <p class="mt-1 text-gray-600">Change your profile</p>
    </div>
  </div>
  <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
    <div class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
</svg>


    </div>
    <div class="flex-auto">
      <a href="#" wire:click.prevent='logout' class="block font-semibold text-gray-900">
        Logout
        <x-loading wire:target='logout' />
        <span class="absolute inset-0"></span>
      </a>
      <p class="mt-1 text-gray-600">Logout user</p>
    </div>
  </div>

</div>