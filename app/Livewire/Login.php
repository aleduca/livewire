<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Login extends Component
{
    #[Rule('required')]
    public $email = 'tressie86@example.com';
    #[Rule('required')]
    public $password = 'password';

    public function login()
    {
        $authenticated = Auth::attempt([
            'email' => $this->email,
            'password' => $this->password,
        ]);

        if (!$authenticated) {
            return session()->flash('error', 'Email or password not found');
        }

        $this->dispatch('loggedIn', 'Logged successfully');
    }

    public function logout()
    {
        auth()->logout();
    }

    public function render()
    {
        return view('livewire.login');
    }
}
