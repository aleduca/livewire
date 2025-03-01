<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Login extends Component
{
  #[Rule('required')]
  public $email = 'davis.coleman@example.com';
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

    $this->dispatch('toggle-login');
  }

  public function logout()
  {
    Auth::logout();

    $this->dispatch('toggle-login');
  }

  public function render()
  {
    return view('livewire.login');
  }
}
