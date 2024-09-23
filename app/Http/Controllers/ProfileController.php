<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
      $this->request  = $request;
    }
    
    public function profile()
    {
      return view('profile');
    }

    public function edit()
    {
      return view('profile-edit');
    }
}
