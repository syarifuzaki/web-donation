<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  protected $request;

  public function __construct(Request $request)
  {
    $this->request  = $request;
  }

  public function loginView()
  {
    return view('auth.login');
  }

  public function registerView()
  {
    return view('auth.register');
  }

  public function forgotPassword()
  {
    return view('auth.forgot-password');
  }

  public function resetPassword()
  {
    return view('auth.reset-password');
  }

  public function logout()
  {
    $this->request->session()->invalidate();
    $this->request->session()->regenerateToken();
    return redirect()->route('home');
  }
}
