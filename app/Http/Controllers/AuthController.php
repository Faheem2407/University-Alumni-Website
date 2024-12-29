<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    function login(){
		return view('auth.login');
	}
	function register(){
		return view('auth.register');
	}

	
	
}
