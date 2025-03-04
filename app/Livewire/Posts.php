<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Posts')]
class Posts extends Component
{
  use WithPagination;

  #[Url(as: 'q', keep: false)]
  #[Validate('regex:/[a-zA-Z0-9\s]+/|min:3|max:20')]
  public string $search = '';

  public $currentPage;

  public $validated;

  // protected array $queryString = ['search'];

  public function updatingPage($page)
  {
    if ($this->currentPage !== $page && $this->search === '') {
      $this->currentPage = $page;
    }
  }

  public function updatedSearch()
  {
    $this->validated = $this->validate();

    return ($this->validated['search'] === '') ?
      $this->gotoPage($this->currentPage) :
      $this->resetPage();
  }

  public function render()
  {
    $posts = Post::with('comments', 'user')->when(!empty($this->validated['search']), function ($query) {
      $searchedTerms = explode(' ', $this->validated['search']);
      foreach ($searchedTerms as $term) {
        $query->where('title', 'like', '%' . $term . '%')
          ->orWhere('content', 'like', '%' . $term . '%');
      }
    })->paginate(10);

    return view('livewire.posts', [
      'posts' => $posts
    ]);
  }
}
