<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        auth()->loginUsingId(27);

        // auth()->logout();

        return view('home');
    }
}
