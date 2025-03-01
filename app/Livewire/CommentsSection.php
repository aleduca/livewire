<?php

namespace App\Livewire;

use App\Livewire\Notification;
use App\Models\Comments;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class CommentsSection extends Component
{
  use WithPagination;

  public $post;

  // #[Rule('required|min:10', as:'comentario')]
  public string $comment;

  protected $paginationTheme = 'bootstrap';

  protected $validationAttributes = [
    'comment' => 'comentário',
    'reply' => 'resposta',
  ];

  protected $listeners = [
    'refresh' => '$refresh',
  ];

  public function commentTo()
  {
    $this->validate([
      'comment' => 'required|min:10',
    ]);

    Comments::create([
      'user_id' => auth()->id(),
      'post_id' => $this->post->id,
      'comment' => $this->comment,
    ]);

    // $this->comment = '';
    $this->reset('comment');

    $this->dispatch('alert', title: 'Comment added successfully', icon: 'success', timer: 1000)->to(Notification::class);;
  }

  public function render()
  {
    $comments = Comments::where('post_id', $this->post->id)
      ->with(['user', 'replies.user'])
      ->paginate(10);

    return view('livewire.comments-section', ['comments' => $comments]);
  }
}
