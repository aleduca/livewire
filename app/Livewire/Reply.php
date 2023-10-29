<?php

namespace App\Livewire;

use Livewire\Component;

class Reply extends Component
{
    public $reply;

    public function delete()
    {
        if ($this->reply->user->id !== auth()->user()->id) {
            $this->js(<<<JS
            Swal.fire({
              icon:'error',
              showConfirmButton: true,
              text: 'You are not allowed to delete this reply!',
            })
        JS);

            return;
        }

        $this->reply->delete();

        $this->dispatch('refresh');

        $this->js(<<<JS
        swal.fire({
          title: 'Reply deleted successfully',
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
        return view('livewire.reply');
    }
}
