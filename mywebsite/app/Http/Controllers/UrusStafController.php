<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UrusStaf;
use App\UrusWaris;
use App\UrusAkaun;



class UrusStafController extends Controller
{
	public function submitStaf(Request $request){
		$this->validate($request, [
				'gelaran' => 'required',
				'nama' => 'required',
				'no_staf' => 'required',
				'alamat_kediaman' => 'required',
				'alamat_tetap' => 'required',
				'notel_rumah' => 'required',
				'notel_bimbit' => 'required',
				/* 'no_ic' => 'required', */
				'tarikh_lahir' => 'required',
				'jantina' => 'required',
				'bangsa' => 'required',
				'agama' => 'required',
				'status' => 'required',
				'emel' => 'required'
		]);
		
		//return 'SUCCESS';
		
		//Create New Message
		$daftar = new UrusStaf;
		$daftar->gelaran= $request->input('gelaran');
		$daftar->nama= $request->input('nama');
		$daftar->no_staf= $request->input('no_staf');
		$daftar->alamat_kediaman= $request->input('alamat_kediaman');
		$daftar->alamat_tetap= $request->input('alamat_tetap');
		$daftar->notel_rumah= $request->input('notel_rumah');
		$daftar->notel_bimbit= $request->input('notel_bimbit');
		/* $daftar->no_ic= $request->input('no_ic'); */
		$daftar->tarikh_lahir= $request->input('tarikh_lahir');
		$daftar->jantina= $request->input('jantina');
		$daftar->bangsa= $request->input('bangsa');
		$daftar->agama= $request->input('agama');
		$daftar->status= $request->input('status');
		$daftar->emel= $request->input('emel');
		
		//Save message
		$daftar->save();
		
		//redirect
		return redirect('/waris')->with('success', 'Maklumat Staf Berjaya Disimpan');
	}
	
	public function submitWaris(Request $request){
		$this->validate($request, [
				'nama' => 'required',
				'pekerjaan' => 'required',
				/* 'info_majikan' => 'required', */
				'notel_pej' => 'required',
				'notel_bimbit' => 'required',
				'no_ic' => 'required',
				'tarikh_lahir' => 'required',
				'no_ic' => 'required',
				'jantina' => 'required',
				'bangsa' => 'required',
				'agama' => 'required',
				'alamat_kediaman' => 'required',
				'alamat_tetap' => 'required',
				/* 'notel_rumah' => 'required' */
		]);
		
		//return 'SUCCESS';
		
		//Create New Message
		$daftar = new UrusWaris;
		$daftar->nama= $request->input('nama');
		$daftar->pekerjaan= $request->input('pekerjaan');
		$daftar->info_majikan= $request->input('info_majikan');
		$daftar->notel_pej= $request->input('notel_pej');
		$daftar->notel_bimbit= $request->input('notel_bimbit');
		$daftar->no_ic= $request->input('no_ic');
		$daftar->tarikh_lahir= $request->input('tarikh_lahir');
		$daftar->no_ic= $request->input('no_ic');
		$daftar->jantina= $request->input('jantina');
		$daftar->bangsa= $request->input('bangsa');
		$daftar->agama= $request->input('agama');
		$daftar->alamat_kediaman= $request->input('alamat_kediaman');
		$daftar->alamat_tetap= $request->input('alamat_tetap');
		$daftar->notel_rumah= $request->input('notel_rumah');
		
		//Save message
		$daftar->save();
		
		//redirect
		return redirect('/akaun')->with('success', 'Maklumat Waris Berjaya Disimpan');
	}
	
	public function submitAkaun(Request $request){
		$this->validate($request, [
				'no_kwsp' => 'required',
				'no_perkeso' => 'required',
				'no_akaun_muamalat' => 'required',
				'no_cukai' => 'required',
				'no_lesen' => 'required',
				'kelas_memandu' => 'required',
				'tarikh_mula_kerja' => 'required',
				'jawatan_permulaan' => 'required',
				'jawatan_sekarang' => 'required',
				'tarikh_lantikan_baru' => 'required',
				'rekod_jenayah' => 'required',
				'nyata_jenayah' => 'required',
				'rekod_penyakit' => 'required',
				'nyata_penyakit' => 'required'
		]);
		
		//return 'SUCCESS';
		
		//Create New Message
		$daftar = new UrusAkaun;
		$daftar->no_kwsp= $request->input('no_kwsp');
		$daftar->no_perkeso= $request->input('no_perkeso');
		$daftar->no_akaun_muamalat= $request->input('no_akaun_muamalat');
		$daftar->no_cukai= $request->input('no_cukai');
		$daftar->no_lesen= $request->input('no_lesen');
		$daftar->kelas_memandu= $request->input('kelas_memandu');
		$daftar->tarikh_mula_kerja= $request->input('tarikh_mula_kerja');
		$daftar->jawatan_permulaan= $request->input('jawatan_permulaan');
		$daftar->jawatan_sekarang= $request->input('jawatan_sekarang');
		$daftar->tarikh_lantikan_baru= $request->input('tarikh_lantikan_baru');
		$daftar->rekod_jenayah= $request->input('rekod_jenayah');
		$daftar->nyata_jenayah= $request->input('nyata_jenayah');
		$daftar->rekod_penyakit= $request->input('rekod_penyakit');
		$daftar->nyata_penyakit= $request->input('nyata_penyakit');
		
		//Save message
		$daftar->save();
		
		//redirect
		return redirect('/')->with('success', 'Pendaftaran Maklumat Staf telah Berjaya');
	}
	
	public function getSenarai(){
		$senarai = UrusStaf::all();
		return view('senarai')->with('list', $senarai);
	}
}
