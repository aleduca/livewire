<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Notification extends Component
{
  #[On('alert')]
  public function alert($title, $icon = 'success', $timer = 3000, $toast = false, $position = 'center')
  {
    $this->js(<<<JS
        swal.fire({
        title: '{$title}',
        icon: '{$icon}',
        toast: '{$toast}',
        position: '{$position}',
        showConfirmButton: false,
        timer: '{$timer}',
        timerProgressBar: true,
    })
    JS);
  }

  public function render()
  {
    return <<<'HTML'
        <div>
            {{-- Success is as dangerous as failure. --}}
        </div>
        HTML;
  }
}
