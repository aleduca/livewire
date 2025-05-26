<?php

namespace App\Livewire;

use Livewire\Component;

class Navbar extends Component
{
  protected $listeners = [
    'login' => '$refresh',
  ];

  public function logout()
  {
    $this->dispatch('logout');
  }

  public function render()
  {
    return view('livewire.navbar');
  }
}
