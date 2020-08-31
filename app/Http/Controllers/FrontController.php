<?php

namespace App\Http\Controllers;

class FrontController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        return view('frontend.index');
    }

    public function test()
    {
        return view('test');
    }

}
