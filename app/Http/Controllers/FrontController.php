<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

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

    public function manager(){
        return view("frontend.manager");
    }
    public function docs(){
        return view("frontend.docs");
    }
    public function sendmail(Request $request){
        return "Успешно отправлено!";
    }

}
