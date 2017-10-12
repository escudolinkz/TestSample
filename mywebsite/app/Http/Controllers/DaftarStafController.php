<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DaftarStaf;

class DaftarStafController extends Controller
{
    public function daftarAkaun(Request $request){
	
   		$this->validate($request, [
   				'no_ic' => 'required',
   				'kata_laluan' => 'required|string|min:6|confirmed',
   				'ckata_laluan' => 'required|string|min:6|confirmed'
   	]);
   		
   		$daftar = new DaftarStaf;
   		$daftar->no_ic = $request->input('no_ic');
   		$daftar->kata_laluan= $request->input('kata_laluan');
   		$daftar->ckata_laluan= $request->input('ckata_laluan');
   		
   		$daftar->save();
   		
   		
   		return redirect('/')->with('success', 'Pendaftaran Akaun Staf telah Berjaya');
    }
    
//     public function daftarMasuk(Request $request){
//     	$this->validate($request, [
//     			'no_ic' => 'required',
//     			'ckata_laluan' => 'required'
//     	]);
//     	// return 123; 
//     	$staf = DaftarStaf::all();
//     	if('no_ic' == staf && 'ckata_laluan' == staf){
    		
//     		return redirect('/contact')->with('success', 'Daftar masuk Telah Berjaya');
//     	} 
    	
    	//return 123;
//     }

    function daftarMasuk(Request $request)
    {
    	$this->validate($request, [
    			'no_ic' => 'required|string|max:255',
    			'ckata_laluan' => 'required',
    	]);
    	
    	
    	RETURN 123;
    	
    }
    

}
