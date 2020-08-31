<?php


namespace App\Http\Controllers;


class FrontendController extends Controller
{
    public function index(){
        dd(1323);
        return view("frontend.index");
    }
    public function manager(){
        return view("frontend.manager");
    }

}
