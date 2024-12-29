<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home(){
		return view('welcome');
	}
	function about(){
		return view('about');
	}
	function contact(){
		return view('contact');
	}
	
	function news(){
		return view('news');
	}
	
	
	function developer(){
		return view('component.developer');
	}
	
	//faculties
	
	function arts(){
		return view('faculty.arts');
	}
	function science_and_enginneering(){
		return view('faculty.science_and_enginneering');
	}
	function social_science(){
		return view('faculty.social_science');
	}
	function business_administration(){
		return view('faculty.business_administration');
	}
	function fine_arts(){
		return view('faculty.fine_arts');
	}
	function law(){
		return view('faculty.law');
	}
	
	
	
	
	//organizations
	function advisiors(){
		return view('organizations.advisiors');
	}
	function executive_committee(){
		return view('organizations.executive_committee');
	}
	function volunteers(){
		return view('organizations.volunteers');
	}
	
	
	
	
}
