<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class Dashboard extends Controller
{
    public function getIndex()
    {
        return view('front.dashboard');
    }
}