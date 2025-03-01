<div>
  <div>
    <div class="row mt-2 mb-2">
      <div class="input-group input-group-lg">
        <input wire:model.live.debounce.500ms='search' type="search" class="form-control form-control-lg rounded" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2" />
      </div>
      <div class="mt-2">@error('search') <span class="text text-danger">{{ $message }}</span> @enderror</div>
    </div>
    <p class="mb-0 d-flex flex-row align-self-center" style="color: #939597;"><span class="font-weight-bold pe-1"> {{ $users->total() }}</span>results</p>

    <x-loading wire:target="search" />

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">FirstName</th>
          <th scope="col">LastName</th>
          <th scope="col">Email</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
        <tr wire:key='{{ $user->id }}'>
          <th scope="row">{{ $user->id }}</th>
          <td>{{ $user->firstName }}</td>
          <td>{{ $user->lastName }}</td>
          <td>{{ $user->email }}</td>
          <td>
            @livewire('user-delete', ['user' => $user], key($user->id))
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{ $users->links() }}
  </div>

</div>
