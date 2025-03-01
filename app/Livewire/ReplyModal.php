<?php

namespace App\Livewire;

use App\Livewire\Notification;
use App\Models\Reply;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;

class ReplyModal extends Component
{
  #[Rule('required|max:200', as: 'Reply')]
  public $reply;
  // protected $listeners = [
  //     'replied' => 'replied',
  // ];

  public $replyToComment;

  public function replyComment()
  {
    $this->validate();

    Reply::create([
      'comment_id' => $this->replyToComment['id'],
      'user_id' => auth()->id(),
      'post_id' => $this->replyToComment['post_id'],
      'reply' => $this->reply,
    ]);

    $this->dispatch('alert', title: 'Reply added successfully', icon: 'success', timer: 1000, toast: true, position: 'top-end')->to(Notification::class);
    $this->js(<<<JS
      __replyModal.hide();
    JS);
    $this->reset('reply');

    $this->dispatch('refresh')->to(CommentsSection::class);
    $this->dispatch('replied')->self();
  }

  #[On('open-modal')]
  public function open_modal($comment)
  {
    $this->replyToComment = $comment;
    // focus on the input $reply field
    $this->js(<<<JS
        window.__replyModal = new bootstrap.Modal(document.getElementById('replyModal'));
        __replyModal.show();
        document.getElementById('reply').focus();
      JS);
    $this->resetValidation('reply');
  }

  public function render()
  {
    return view('livewire.reply-modal');
  }
}
