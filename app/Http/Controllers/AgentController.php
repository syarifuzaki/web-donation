<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request  = $request;
    }

    public function front()
    {
        return view('agent.front');
    }
    
    public function menu()
    {
        return view('agent.menu');
    }

    public function register()
    {
        return view('agent.register');
    }

    public function history()
    {
        return view('agent.history');
    }

    public function topup()
    {
        return view('agent.topup');
    }

    public function withdrawal()
    {
        return view('agent.withdrawal');
    }

    public function instruction($id)
    {
        return view('agent.topup-instruction');
    }
}
