<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampaignController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request  = $request;
    }

    public function detail($slug)
    {
        return view('campaign.detail')->with(compact('slug'));
    }

    public function donation($slug)
    {
        return view('campaign.donation')->with(compact('slug'));
    }

    public function payment($slug)
    {
        return view('campaign.payment')->with(compact('slug'));
    }

    public function confirm($slug)
    {
        return view('campaign.confirm')->with(compact('slug'));
    }
}
