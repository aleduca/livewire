<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserDelete extends Component
{
  public User $user;

  public function delete()
  {
    dd($this->user->id);
  }

  public function render()
  {
    return <<<'HTML'
        <button wire:click="delete">Delete</button>
        HTML;
  }
}
