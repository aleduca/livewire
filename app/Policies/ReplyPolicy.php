<?php

namespace App\Policies;

use App\Models\Reply;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ReplyPolicy
{
  public function delete(User $user, Reply $reply)
  {
    return $reply->user()->is($user)  ? Response::allow()
      : Response::deny('You do not own this comment.');
  }
}
