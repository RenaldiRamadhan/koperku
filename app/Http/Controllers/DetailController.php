<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(request $request)
    {
        return view('pages.details');
    }
}

