<?php

namespace App\Livewire;

use Livewire\Component;

class Navbar extends Component
{
  // protected $listeners = [
  //   'toggle-login' => '$refresh',
  // ];

  public function render()
  {
    return view('livewire.navbar');
  }
}
