<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
    	return view('auth.login');
    }


    public function postlogin(Request $Request)
    {
    	if(Auth::attempt($Request->only('email','password'))){
    		return redirect('/Dashboard');
    	}
    	return redirect('/login');

    }
    public function logout()
    {
    	Auth::logout(); 
    	return redirect('/login');
    }
}
