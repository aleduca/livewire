<div>
  {{-- <h2>Posts</h2>

  <div class="row mt-2 mb-2">
    <div class="input-group input-group-lg">
      <input wire:model.live.debounce.500ms='search' type="search" class="form-control form-control-lg rounded" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2" />
    </div>
    <div class="mt-2">@error('search') <span class="text text-danger">{{ $message }}</span> @enderror</div>
  </div>
  <p class="mb-0 d-flex flex-row align-self-center" style="color: #939597;"><span class="font-weight-bold pe-1"> {{ $posts->total() }}</span>results</p>

  <x-loading wire:target="search" />

<h2 class="mt-3">Posts ({{$posts->total()}})</h2>
<ul class="list-group mt-3">
  @forelse($posts as $post)
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <div>
      {{ Str::words($post->title,7,'...') }}
      (<i class="bi bi-person-badge-fill"></i> {{$post->user->firstName}} {{$post->user->lastName}})
      (<i class="bi bi-chat-dots-fill"></i> {{$post->comments->count()}})
    </div>
    <div>
      <a wire:navigate href="{{route('post.show',$post->id)}}"><i class="bi bi-eye"></i></a>
    </div>
  </li>
  @empty
  <li class="list-group-item">No posts found</li>
  @endforelse
</ul>

<hr>

{{$posts->links()}} --}}

<h2 class="text-3xl">Posts({{ $posts->total() }})</h2>

<div class="relative mt-3">
    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
        <x-loading wire:target="search" color="fill-red-700" />
        <svg wire:loading.remove class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
        </svg>
    </div>
    <input type="search" wire:model.live.debounce.500ms='search' id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Posts..." required />
</div>
<div class="mt-2">@error('search') <span class="text-red-600 italic">{{ $message }}</span> @enderror</div>

<hr class="mt-3">

<ul role="list" class="divide-y divide-gray-100">
  @forelse($posts as $post)
  <li class="flex justify-between gap-x-6 py-5" wire:key="{{ $post->id }}">
    <div class="flex min-w-0 gap-x-4">
      <div class="min-w-0 flex-auto">
        <p class="text-sm/6 font-semibold text-gray-900 flex items-center justify-start">
          <span>{{ Str::words($post->title,7,'...') }}</span>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 mr-1">
            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
          </svg>
          {{ $post->comments->count() }}
        </p>
        <p class="mt-1 truncate text-xs/5 text-gray-500 flex items-center justify-start">
          <img class="size-6 flex-none rounded-full bg-gray-50 border-indigo-600 border-2" src="{{ $post->user->photo }}" alt="">
          <span class="ml-2">
          por {{ $post->user->firstName }} {{ $post->user->lastName }}
          </span>
        </p>
      </div>
    </div>
    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
      <a wire:navigate href="{{route('post.show',$post->id)}}" class="bg-indigo-600 p-2 rounded text-white text-sm flex items-center">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
      </svg>
        <span class="ml-2">Ver Post</span>
      </a>
    </div>
  </li>
  @empty
  <h2 class="text-2xl">No Posts Found</h2>
  @endforelse
</ul>

{{ $posts->links() }}

<div class="mt-4"></div>

</div>
