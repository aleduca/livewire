<?php

namespace App\Livewire;

use App\Models\Comments;
use App\Models\Reply;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class CommentsSection extends Component
{
    use WithPagination;

    public $post;

    public $canReplyTo;
    public $replyToComment;

    // #[Rule('required|min:10', as:'comentario')]
    public string $comment;

    // #[Rule('required|min:10', as:'resposta')]
    public string $reply;

    public function replyTo(int $commentId)
    {
        if ($this->canReplyTo !== $commentId) {
            $this->canReplyTo = $commentId;
            $this->replyToComment = $this->post->comments->find($commentId);
        } else {
            $this->canReplyTo = null;
        }

        $this->js(<<<JS
           window.scrollTo({
                top:document.querySelector('#comments-form').offsetTop,
                behavior: "smooth",
            })
        JS);
    }

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

        $this->comment = '';

        $this->js(<<<JS
            swal.fire({
            title: 'Comment added successfully',
            icon: 'success',
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
        })
        JS);
    }

    public function replyComment()
    {
        $this->validate([
            'reply' => 'required|min:10',
        ]);

        Reply::create([
            'user_id' => auth()->id(),
            'post_id' => $this->post->id,
            'comment_id' => $this->replyToComment->id,
            'reply' => $this->reply,
        ]);

        $this->reply = '';

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
        JS);
    }

    public function render()
    {
        $comments = Comments::where('post_id', $this->post->id)
        ->with(['user', 'replies.user'])
        ->paginate(10);

        return view('livewire.comments-section', ['comments' => $comments]);
    }
}
