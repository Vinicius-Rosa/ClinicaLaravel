<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class HomeController extends Controller
{ 

    public function index()
    {
        return view('home.login');         
    }

    public function login(Request $request)
    {

        $this->validate($request, [
            'email'=> 'required|email',
            'password'=> 'required',
        ]);

        $credentials = ['email' => $request->email, 'password' => $request->password];

        if(Auth::attempt($credentials)){
            return redirect()->intended('dashboard');
        } else {
            return redirect()->back()->with('msg','Acesso negado para estas credenciais');
        }
    }

}