<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
      $this->request  = $request;
    }

    public function me()
    {
      return view('donation.me');
    }

    public function detail($id)
    {
      return view('donation.detail');
    }

    public function instruction($id)
    {
      return view('donation.instruction');
    }
}
