<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class replyForm extends Component
{
    public $replyToComment;

    /**
     * Create a new component instance.
     */
    public function __construct($replyToComment)
    {
        $this->replyToComment = $replyToComment;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.reply-form');
    }
}
