<div class="modal fade" tabindex="-1" id="replyModal" wire:ignore.self>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">
          Reply To
          @if (isset($replyToComment))
          {{$replyToComment['user']['firstName']}} {{$replyToComment['user']['lastName']}} <img class="rounded-circle shadow-1-strong me-3" src="{{ $replyToComment['user']['photo'] }}" alt="avatar" width="40" height="40" />
          @endif
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="card">
          <form wire:submit='replyComment'>
          <div class="card-footer py-3 border-0">
              <div class="d-flex flex-start w-100">
                <img class="rounded-circle shadow-1-strong me-3" src="{{auth()->user()->photo}}" alt="avatar" width="40" height="40" />

                <div class="form-outline w-100">

                  <textarea wire:model.live.debounce.350ms='reply' class="form-control" id="reply" rows="4" style="background: #fff"></textarea>
                  @error('reply')
                  <span class="text text-danger mb-3">{{ $message }}</span>
                  @enderror
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Post reply</button>
          </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</div>
