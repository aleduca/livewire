<div>
  <h2>Posts</h2>

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

{{$posts->links()}}
</div>
