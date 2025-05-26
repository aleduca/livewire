<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
  #[Validate('required|email')]
  public $email = 'larkin.melany@example.org';
  #[Validate('required')]
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

    $this->dispatch('login');
  }

  #[On('logout')]
  public function logout()
  {
    Auth::logout();

    return redirect()->route('home');
  }

  public function render()
  {
    return view('livewire.login');
  }
}
