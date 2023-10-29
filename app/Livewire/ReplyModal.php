<?php

namespace App\Livewire;

use App\Models\Reply;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;

class ReplyModal extends Component
{
    #[Rule('required|max:200', as:'Reply')]
    public $reply;
    // protected $listeners = [
    //     'open-modal' => 'open_modal',
    // ];

    public $replyToComment;

    public function replyComment()
    {
        Reply::create([
            'comment_id' => $this->replyToComment['id'],
            'user_id' => auth()->id(),
            'post_id' => $this->replyToComment['post_id'],
            'reply' => $this->reply,
        ]);

        $this->js(<<<JS
            swal.fire({
            title: 'Reply added successfully',
            icon: 'success',
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
          })

          __replyModal.hide();
        JS);

        $this->reset('reply');

        $this->dispatch('refresh');
    }

    #[On('open-modal')]
    public function open_modal($comment)
    {
        $this->replyToComment = $comment;
        $this->js(<<<JS
        window.__replyModal = new bootstrap.Modal(document.getElementById('replyModal'));
        __replyModal.show();
      JS);
    }

    public function render()
    {
        return view('livewire.reply-modal');
    }
}
