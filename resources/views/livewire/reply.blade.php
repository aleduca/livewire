<div>
  <div class="d-flex flex-start mt-4 mb-4">
    <a class="me-3" href="#">
      <img class="rounded-circle shadow-1-strong" src="{{ $reply->user->photo }}" alt="avatar" width="65" height="65" />
    </a>
    <div class="flex-grow-1 flex-shrink-1">
      <div>
        <div class="d-flex justify-content-between align-items-center">
          <p class="mb-1">
            {{ $reply->user->firstName }} {{ $reply->user->lastName }}

            <span class="small">- {{ $reply->created_at->diffForHumans()}}</span>
          </p>
          @can('delete',$reply)
          <a href="#" wire:click.prevent='delete'><i class=" fas fa-reply fa-xs"></i>
            <span class="small">
              <i class="bi bi-trash"></i>
            </span>
            <x-loading wire:target='delete' />
          </a>
          @endcan
        </div>
        <p class="small mb-0">
          {{-- TODO:Reply message --}}
          {{ $reply->reply }}
        </p>
      </div>
    </div>
  </div>
</div>
