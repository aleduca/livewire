<div>
  <div class="border-b border-gray-900/10 pb-12">
      <p class="mt-1 text-sm/6 text-gray-600">Please fill all inputs to create a new post</p>

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-3">
          <label for="first-name" class="block text-sm/6 font-medium text-gray-900">First name</label>
          <div class="mt-2">
            <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
          </div>
        </div>

        <div class="sm:col-span-3">
          <label for="last-name" class="block text-sm/6 font-medium text-gray-900">Last name</label>
          <div class="mt-2">
            <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
          </div>
        </div>

        <div class="sm:col-span-4">
          <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
          <div class="mt-2">
            <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
          </div>
        </div>

        <div class="sm:col-span-3">
          <label for="country" class="block text-sm/6 font-medium text-gray-900">Country</label>
          <div class="mt-2 grid grid-cols-1">
            <select id="country" name="country" autocomplete="country-name" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
              <option>United States</option>
              <option>Canada</option>
              <option>Mexico</option>
            </select>
            <svg class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
              <path fill-rule="evenodd" d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
            </svg>
          </div>
        </div>

        <div class="col-span-full">
          <label for="street-address" class="block text-sm/6 font-medium text-gray-900">Street address</label>
          <div class="mt-2">
            <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
          </div>
        </div>

        <div class="sm:col-span-2 sm:col-start-1">
          <label for="city" class="block text-sm/6 font-medium text-gray-900">City</label>
          <div class="mt-2">
            <input type="text" name="city" id="city" autocomplete="address-level2" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
          </div>
        </div>

        <div class="sm:col-span-2">
          <label for="region" class="block text-sm/6 font-medium text-gray-900">State / Province</label>
          <div class="mt-2">
            <input type="text" name="region" id="region" autocomplete="address-level1" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
          </div>
        </div>

        <div class="sm:col-span-2">
          <label for="postal-code" class="block text-sm/6 font-medium text-gray-900">ZIP / Postal code</label>
          <div class="mt-2">
            <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
          </div>
        </div>
      </div>
    </div>
  {{-- <div class="container mt-5 mb-5 d-flex justify-content-center">
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
@endscript --}}