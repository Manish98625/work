<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class MasterController extends Controller
{
    public function index()
    {
        return view('frontend.master');
    }
}
