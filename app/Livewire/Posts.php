<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Posts')]
class Posts extends Component
{
  public function render()
  {
    $posts = Post::latest()->with('comments', 'user')->paginate(20);
    return view('livewire.posts', [
      'posts' => $posts
    ]);
  }
}
