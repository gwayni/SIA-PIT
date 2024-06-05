<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainWeb extends Controller
{
    public function home()
    {
        return view('mainweb.home');

    }
}
