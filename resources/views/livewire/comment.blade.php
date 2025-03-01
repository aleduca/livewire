<div class="d-flex flex-start mb-4">
  <img class="rounded-circle shadow-1-strong me-3" src="{{$comment->user->photo}}" alt="avatar" width="65" height="65" />
  <div class="flex-grow-1 flex-shrink-1">
    <div>
      <div class="d-flex justify-content-between align-items-center">
        <p class="mb-1">
          {{$comment->user->firstName}} {{$comment->user->lastName}}
          <span class="small">- {{$comment->created_at->diffForHumans()}}</span>
        </p>
        <div>
          <a href="#" wire:click.prevent="replyTo"><i class=" fas fa-reply fa-xs"></i>
            <span class="small">
              <i class="bi bi-reply"></i>
            </span>
            <x-loading wire:target='replyTo' />
          </a>

          @can('delete', $comment)
          <a href="#" wire:click.prevent='delete'><i class=" fas fa-reply fa-xs"></i>
            <span class="small">
            <i class="bi bi-trash"></i>
          </span>
          <x-loading wire:target='delete' />
          @endcan
          </a>
        </div>
      </div>
      <p class="small mb-0">
        {{-- TODO:Comment message --}}
        {{$comment->comment}}
      </p>
    </div>

    {{-- replies --}}
    {{-- TODO:Inicio foreach replies --}}
    @foreach($comment->replies as $reply)
    @livewire('reply', ['reply' => $reply], key($reply->id))
    @endforeach
    {{-- TODO:Fim foreach comments --}}
  </div>
</div>
