<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UrusPagesController extends Controller
{
	public function getHome(){
		return view ( 'home' );
	}
	//login function
	public function getLogin(){
   		return view ( 'daftar.login' );
	}
	
	public function getDaftar(){
		return view ( 'daftar.daftar' );
	}
	
	public function getStaf(){
		return view ( 'urus.staf' );
	}
	
	public function getWaris(){
		return view ( 'urus.waris' );
	}
	
	public function getAkaun(){
		return view ( 'urus.akaun' );
	}
	
	public function getContact(){
		return view ( 'contact' );
	}
	
	public function getAbout(){
		return view ( 'about' );
	}
	
	
}
