<?php

namespace App\Livewire;

use App\Models\Post as PostModel;
use Livewire\Component;

class Post extends Component
{
  public PostModel $post;

  protected $listeners = [
    'toggle-login' => '$refresh',
  ];

  public function render()
  {
    return view('livewire.post');
  }
}
