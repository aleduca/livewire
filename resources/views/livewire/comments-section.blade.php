<div>
  @livewire('reply-modal')
  <section>
    <div class="row d-flex" id="comments-form">
      <div class="col-md-12 col-lg-10 col-xl-8">
        @include('partials.commentForm')
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
                @livewire('comment', [
                'comment' => $comment,
                ], key(uniqId()))
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
