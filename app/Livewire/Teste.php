<?php

namespace App\Livewire;

use Livewire\Component;

class Teste extends Component
{
    protected $listeners = [
        'loggedIn' => 'loggedIn',
    ];

    public function loggedIn(string $message)
    {
        dd($message);
    }

    public function render()
    {
        return view('livewire.teste');
    }
}
