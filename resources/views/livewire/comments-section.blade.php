<div>
  <section>
    <div class="row d-flex" id="comments-form">
      <div class="col-md-12 col-lg-10 col-xl-8">
        @if ($canReplyTo)
        @include('partials.replyForm')
        @else
        @include('partials.commentForm')
        @endif
      </div>
    </div>
  </section>

  <div class="container my-5 py-5">
    <div class="row d-flex">
      <div class="col-md-12 col-lg-10 col-xl-8">
        <div class="card">
          <div class="card-body p-4">
            <h4 class="text-center mb-4 pb-2">Comments section ({{$comments->total()}})</h4>
            <div class="row">
              <div class="col">
                {{-- comments --}}
                {{-- TODO:Inicio foreach(forelse) comments --}}
                @forelse($comments as $comment)
                <div class="d-flex flex-start mb-4">
                  <img class="rounded-circle shadow-1-strong me-3" src="{{$comment->user->photo}}" alt="avatar" width="65" height="65" />
                  <div class="flex-grow-1 flex-shrink-1">
                    <div>
                      <div class="d-flex justify-content-between align-items-center">
                        <p class="mb-1">
                          {{$comment->user->firstName}} {{$comment->user->lastName}}
                          <span class="small">- {{$comment->created_at->diffForHumans()}}</span>
                        </p>

                        <a href="#" wire:click.prevent="replyTo({{$comment->id}})"><i class=" fas fa-reply fa-xs"></i><span class="small">
                            @if ($canReplyTo && $comment->id == $replyToComment->id)
                            hide reply
                            @else
                            reply
                            @endif
                          </span></a>

                      </div>
                      <p class="small mb-0">
                        {{-- TODO:Comment message --}}
                        {{$comment->comment}}
                      </p>
                    </div>

                    {{-- replies --}}
                    {{-- TODO:Inicio foreach replies --}}
                    @foreach($comment->replies as $reply)
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
                          </div>
                          <p class="small mb-0">
                            {{-- TODO:Reply message --}}
                            {{ $reply->reply }}
                          </p>
                        </div>
                      </div>
                    </div>
                    @endforeach
                    {{-- TODO:Fim foreach comments --}}
                  </div>
                </div>
                @empty
                <p>No comments here, be the first</p>
                @endforelse
                {{-- TODO:Empty e fim do forelse --}}
              </div>
            </div>
            <div class="mt-3">
              {{ $comments->links(data:['scrollTo' => false]) }}
              {{-- TODO:Comments link with scroll disabled --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
