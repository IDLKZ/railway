<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

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
        $v = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required|numeric',
            'email' => 'email',
            'message' => 'nullable'
        ]);

        $_SESSION['name'] = $request->get('name');
        $_SESSION['phone'] = $request->get('phone');
        $_SESSION['email'] = $request->get('email');
        $_SESSION['message'] = $request->get('message');
//        Mail::send("mail.mail",["title"=>"Заявка с сайта"],function ($message) use ($request){
//            $message->to("idlkz2019@gmail.com","Заявка с сайта");
//            $message->from('info@weplay.kz', "Заказчик: {$request->get('name')} \n Номер: {$request->get('phone')} \n Почта: {$request->get('email')} \n Сообщение: {$request->get('message')}")->subject('Заказ с сайта');
//        });
        return view("frontend.result");
    }

}
