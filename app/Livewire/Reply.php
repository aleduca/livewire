<?php

namespace App\Livewire;

use App\Livewire\Notification;
use Exception;
use Livewire\Component;

class Reply extends Component
{
  public $reply;

  public function delete()
  {
    try {
      $this->authorize('delete', $this->reply);

      $this->reply->delete();

      $this->dispatch('refresh');

      $this->dispatch('alert', title: 'Reply deleted successfully', icon: 'success', timer: 1000, toast: true, position: 'top-end')->to(Notification::class);;
    } catch (Exception $e) {
      $this->dispatch('alert', title: $e->getMessage(), icon: 'success', timer: 2000)->to(Notification::class);;
    }
  }

  public function render()
  {
    return view('livewire.reply');
  }
}
