<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email, $password, $remember;
    public $showPassword = false;
  
    public function render()
    {
        return view('livewire.auth.login');
    }

    public function login()
    {
        $this->resetValidation();
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email tidak boleh kosong.',
            'email.email' => 'Format email tidak sesuai.',
            'password.required' => 'Kata sandi tidak boleh kosong.'
        ]);

        $user = User::where('email', 'like', trim($this->email))->first();
        if ( !$user ) {
            $this->addError('email', 'Email tidak ditemukan.');
            return back();
        }

        $form = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        $remember = $this->remember ? true : false;

        if( !Auth::attempt($form, $remember) ) {
            $this->addError('password', 'Kata sandi salah.');
            return back();
        }

        return redirect()->route('home');
    }

    public function togglePassword()
    {
        $this->showPassword = !$this->showPassword;
    }
}
