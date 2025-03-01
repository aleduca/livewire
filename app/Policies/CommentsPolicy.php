<?php

namespace App\Policies;

use App\Models\Comments;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CommentsPolicy
{
  public function delete(User $user, Comments $comment)
  {
    return $comment->user()->is($user) ? Response::allow()
      : Response::deny('You do not own this post.');
  }
}
