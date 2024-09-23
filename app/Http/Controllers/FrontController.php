<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request  = $request;
    }

    public function home()
    {
        return view('home');
    }
    
    public function fundraising()
    {
        return view('fundraising');
    }

    public function fundraisingAdd()
    {
        return view('fundraising-add');
    }
}
