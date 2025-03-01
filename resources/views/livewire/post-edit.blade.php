@section('css')
<style>
  body {
    background-color: #FFEBEE
  }

  .card {
    width: 400px;
    background-color: #fff;
    border: none;
    border-radius: 12px
  }

  label.radio {
    cursor: pointer;
    width: 100%
  }

  label.radio input {
    position: absolute;
    top: 0;
    left: 0;
    visibility: hidden;
    pointer-events: none
  }

  label.radio span {
    padding: 7px 14px;
    border: 2px solid #eee;
    display: inline-block;
    color: #039be5;
    border-radius: 10px;
    width: 100%;
    height: 48px;
    line-height: 27px
  }

  label.radio input:checked+span {
    border-color: #039BE5;
    background-color: #81D4FA;
    color: #fff;
    border-radius: 9px;
    height: 48px;
    line-height: 27px
  }

  .form-control {
    margin-top: 10px;
    height: 48px;
    border: 2px solid #eee;
    border-radius: 10px
  }

  .form-control:focus {
    box-shadow: none;
    border: 2px solid #039BE5
  }

  .agree-text {
    font-size: 12px
  }

  .terms {
    font-size: 12px;
    text-decoration: none;
    color: #039BE5
  }

  .confirm-button {
    height: 50px;
    border-radius: 10px
  }

  .content {
    height: 200px;
  }

</style>
@endsection
<div>
  <div class="container mt-5 mb-5 d-flex justify-content-center">
    <form wire:submit='update' action="#">
      <div class="card px-1 py-4">
        <div class="card-body">
          <h6 class="card-title mb-3">Edit Post</h6>
          <div class="row">
            @if (session()->has('success'))
            <span class="text text-success">{{ session()->get('success') }}</span>
            @endif
            <div class="col-sm-12">
              <div class="form-group">
                {{-- {{ $errors->first('title'); }} --}}
                @error('title')
                <span class="text text-danger">{{ $message }}</span>
                @enderror
                <div class="input-group">
                  <input wire:model.live.debounce.300ms='title' class="form-control" type="text" name="title" placeholder="Title">
                </div>
              </div>
            </div>
          </div>
          <div class=" row">
            <div class="col-sm-12">
              <div class="form-group">
                {{-- {{ $errors->first('content'); }} --}}
                @error('content')
                <span class="text text-danger">{{ $message }}</span>
                @enderror
                <div class="input-group">
                  <textarea wire:model.live.debounce.400ms='content' name="content" placeholder="Content" class="form-control content"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                @error('photo')
                <span class="text text-danger">{{ $message }}</span>
                @enderror
                {{-- TODO:PROGRESS BAR HERE --}}
                <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true" x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-error="uploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">

                  <div x-show="uploading">
                    <progress max="100" x-bind:value="progress"></progress>
                  </div>

                  <div class="input-group mt-3">
                    <input wire:model='photo' type="file" name="photo" wire:model='photo'>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="row">
            <div class="mt-2">
              {{-- TODO:PREVIEW IMAGE HERE --}}
              @if($post->photo && !$photo)
              <img src="{{ asset('storage/'.$post->photo) }}" width="100%">
              @endif
              @if ($photo)
              <img src="{{ $photo->temporaryUrl() }}" width="100%">
              @endif
            </div>
          </div>
          <div style="display:flex;align-items: center;">
            <button class="btn btn-primary btn-block confirm-button px-5 mt-3 mb-3">Confirm</button>
            <div wire:loading>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: rgb(255, 255, 255); display: block; shape-rendering: auto;" width="50px" height="50px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                <circle cx="30" cy="50" fill="#e90c59" r="20">
                  <animate attributeName="cx" repeatCount="indefinite" dur="1s" keyTimes="0;0.5;1" values="30;70;30" begin="-0.5s"></animate>
                </circle>
                <circle cx="70" cy="50" fill="#46dff0" r="20">
                  <animate attributeName="cx" repeatCount="indefinite" dur="1s" keyTimes="0;0.5;1" values="30;70;30" begin="0s"></animate>
                </circle>
                <circle cx="30" cy="50" fill="#e90c59" r="20">
                  <animate attributeName="cx" repeatCount="indefinite" dur="1s" keyTimes="0;0.5;1" values="30;70;30" begin="-0.5s"></animate>
                  <animate attributeName="fill-opacity" values="0;0;1;1" calcMode="discrete" keyTimes="0;0.499;0.5;1" dur="1s" repeatCount="indefinite"></animate>
                </circle>
                <!-- [ldio] generated by https://loading.io/ -->
              </svg>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
