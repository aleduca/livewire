<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Home')]
class Home extends Component
{
  use WithPagination;

  #[Url(as: 'q', keep: false)]
  public string $search = '';

  public $currentPage;

  // protected array $queryString = ['search'];

  public function updatingPage($page)
  {
    if ($this->currentPage !== $page && $this->search === '') {
      $this->currentPage = $page;
    }
  }

  public function updatedSearch()
  {
    return ($this->search === '') ?
      $this->gotoPage($this->currentPage) :
      $this->resetPage();
  }

  public function render()
  {
    $users = User::where('firstName', 'like', '%' . $this->search . '%')
      ->orWhere('email', 'like', '%' . $this->search . '%')
      ->paginate(5);

    return view('livewire.home', [
      'users' => $users,
    ]);
  }
}
