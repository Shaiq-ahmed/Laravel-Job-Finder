<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function redirect()
    {

        $usertype = Auth::user()->usertype;

        if ($usertype == '0') {
            return view('home.home');
        }

    }
}
