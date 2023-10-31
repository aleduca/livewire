<?php

namespace App\Livewire;

use Livewire\Component;

class Comment extends Component
{
    public $comment;

    protected $listeners = [
        'comment-{comment.id}' => 'commentId',
    ];

    public function commentId()
    {
        dd('comment id');
    }

    public function replyTo()
    {
        $this->dispatch('open-modal', comment:$this->comment);
    }

    public function delete()
    {
        if ($this->comment->user_id !== auth()->id()) {
            $this->js(<<<JS
              Swal.fire({
              icon:'error',
              showConfirmButton: true,
              text: 'You are not allowed to delete this comment!',
            })
          JS);

            return;
        }
        $this->comment->delete();

        $this->js(<<<JS
               swal.fire({
                title: 'Comment deleted successfully',
                icon: 'success',
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
            })
          JS);

        $this->dispatch('refresh');
    }

    public function render()
    {
        return view('livewire.comment');
    }
}
