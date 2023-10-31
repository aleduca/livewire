<?php

namespace App\Livewire;

use Livewire\Component;

class Teste extends Component
{
    protected $listeners = [
        'refresh' => 'refreshed',
    ];

    public function refreshed()
    {
        dd('refreshed from teste');
    }

    public function render()
    {
        return view('livewire.teste');
    }
}
