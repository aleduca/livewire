<div>
  <div class="container mt-5 mb-5 d-flex justify-content-center">
    <form wire:submit='create' action="#">
      <div class="card px-1 py-4">
        <div class="card-body">
          <h6 class="card-title mb-3">Create Post</h6>
          <div class="row">
            @if (session()->has('success'))
            <span class="text text-success">{{ session()->get('success') }}</span>
            @endif
            <div class="col-sm-12">
              <div class="form-group">
                @error('form.title')
                <span class="text text-danger">{{ $message }}</span>
                @enderror
                <div class="input-group">
                  <input wire:model.live.debounce.500ms='form.title' class="form-control" type="text" name="title" placeholder="Title">
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-sm-12">
              @error('form.content')
              <span class="text text-danger">{{ $message }}</span>
              @enderror
              <div class="form-group">
                <div class="input-group">
                  <textarea wire:model.live.debounce.500ms='form.content' name="content" placeholder="Content" class="form-control content"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-sm-12">
              @error('form.content')
              <span class="text text-danger">{{ $message }}</span>
              @enderror
              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" wire:model='tag' placeholder="tags" wire:keydown.tab='$js.addTag($el)'>
              </div>
              <div class="d-flex mt-2" x-html='$js.selectedTags'></div>
              <small>Add a word and press tab.</small>
            </div>
          </div>
          <div style="display: flex;align-items:center">
            <button type="submit" class="btn btn-primary btn-block confirm-button px-5 mt-3 mb-3">Confirm</button>
            <x-loading wire:target='create' />
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

@script
  <script>
    $js('addTag', function(el){
      $wire.selectedTags.push($wire.tag);
      $wire.selectedTags = [...new Set($wire.selectedTags)];
      $wire.tag = '';
      setTimeout(() => {
        el.focus();
      }, 50);
    })

    $js('teste', function(){
      console.log('teste from client');
    });

    $js('selectedTags', function(){
      let colors = ['primary','secondary','success','danger','warning','info','light','dark'];
      return $wire.selectedTags.map((tag,index) => {
        return `<span class="badge text-bg-${colors[index]}">${tag} <span style="cursor:pointer" wire:click='$js.removeTag("${index}")'>x</span></span>`
      }).join('')
    })

    $js('removeTag', function(tag){
      $wire.selectedTags.splice(tag,1);
    });
  </script>
@endscript