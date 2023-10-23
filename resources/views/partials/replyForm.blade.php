<div class="card">
  <div class="card-footer py-3 border-0">
    <h3>Reply to {{ $replyToComment->user->firstName }} {{ $replyToComment->user->lastName }}
      <img class="rounded-circle shadow-1-strong me-3" src="{{ $replyToComment->user->photo }}" alt="avatar" width="40" height="40" />
    </h3>
    <form wire:submit='replyComment' action="">
      <div class="d-flex flex-start w-100">
        <img class="rounded-circle shadow-1-strong me-3" src="{{auth()->user()->photo}}" alt="avatar" width="40" height="40" />

        <div class="form-outline w-100">
          @error('reply')
          <span class="text text-danger mb-3">{{ $message }}</span>
          @enderror
          <textarea wire:model='reply' class="form-control" id="textAreaExample" rows="4" style="background: #fff;"></textarea>
          <label class="form-label" for="textAreaExample">Message</label>
        </div>
      </div>
      <div class="float-end mt-2 pt-1">
        <button type="submit" class="btn btn-primary btn-sm">Post comment</button>
      </div>
    </form>
  </div>
</div>
