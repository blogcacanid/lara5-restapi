<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;

class PegawaiController extends Controller
{
    // INDEX
	public function index(){
		$pegawai 	= Pegawai::all();
		$data	= ['pegawai'=>$pegawai];
		return $data;
	}

	// DETAIL
	public function detail($id){
		$pegawai 			= Pegawai::find($id);
		return $pegawai;
	}

	// POST
	public function create(Request $request){
		$pegawai 			= new Pegawai();
		$pegawai->nip 	= $request->nip;
		$pegawai->nama_pegawai 	= $request->nama_pegawai;
		$pegawai->alamat 	= $request->alamat;
		$pegawai->save();
		return " Data sudah di simpan ";
	}

	// PUT
	public function update(Request $request,$id){
		$pegawai 			= Pegawai::find($id);
		$pegawai->nip 	= $request->nip;
		$pegawai->nama_pegawai 	= $request->nama_pegawai;
		$pegawai->alamat 	= $request->alamat;
		$pegawai->save();
		return " Data sudah di update ";
	}

	// DELETE
	public function delete($id){
		$pegawai 			= Pegawai::find($id);
		$pegawai->delete();
		return " Data sudah di hapus ";
	}

}