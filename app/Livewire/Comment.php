<?php

namespace App\Livewire;

use App\Livewire\Notification;
use App\Models\Comments;
use Exception;
use Livewire\Component;

class Comment extends Component
{
  public Comments $comment;

  protected $listeners = [
    'comment-{comment.id}' => 'commentId',
  ];

  public function commentId()
  {
    dd('comment id');
  }

  public function replyTo()
  {
    $this->dispatch('open-modal', comment: $this->comment);
  }

  public function delete()
  {
    try {
      $this->authorize('delete', $this->comment);

      $this->comment->delete();

      $this->dispatch('alert', title: 'Comment deleted successfully', icon: 'success', timer: 1000, toast: true, position: 'top-end')->to(Notification::class);;

      $this->dispatch('refresh');
    } catch (Exception $e) {

      $this->dispatch('alert', title: $e->getMessage(), icon: 'success', timer: 2000)->to(Notification::class);;
    }
  }

  public function render()
  {
    return view('livewire.comment');
  }
}
