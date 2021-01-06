<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class datasewacontroller extends Controller
{
    public function index (Request $Request)
    {
    	if($Request->has('cari')){
    		$data_sewa = \App\datasewa::where('nama','LIKE','%'.$Request->cari.'%')->get();
    	}else{
			$data_sewa = \App\datasewa::all();
			$data_penyewa = \App\Datauser::all();
			$data_mobil = \App\datamobil::all();
    	}
    	return view ('datasewa.index',['datasewa' => $data_sewa, 'data_penyewa' => $data_penyewa, 'data_mobil' => $data_mobil]);
    }

    public function create(Request $Request)
    {
        $tanggal = new \Carbon\Carbon($Request->tanggal_sewa);
		\App\datasewa::create([
            'id_user' => $Request->id_user,
            'id_mobil' => $Request->id_mobil,
            'tanggal_sewa' => $Request->tanggal_sewa,
            'tanggal_kembali' => $tanggal->addDays($Request->durasi),
            'durasi' => $Request->durasi,
            'jaminan' => $Request->jaminan,
        ]);
    	return back()->with('sukses','Data Berhasil Ditambahkan!');
    }

    public function edit($id)
    {
		$data_sewa=\App\datasewa::find($id);
		$data_penyewa = \App\Datauser::all();
		$data_mobil = \App\datamobil::all();
    	return view('datasewa/edit',['datasewa'=>$data_sewa, 'data_penyewa' => $data_penyewa,'data_mobil' => $data_mobil]);
    }

    public function update(Request $Request,$id)
    {
        $data_sewa=\App\datasewa::find($id);
        $tanggal = new \Carbon\Carbon($Request->tanggal_sewa);
    	$data_sewa->update([
            'id_user' => $Request->id_user,
            'id_mobil' => $Request->id_mobil,
            'tanggal_sewa' => $Request->tanggal_sewa,
            'tanggal_kembali' => $tanggal->addDays($Request->durasi),
            'durasi' => $Request->durasi,
            'jaminan' => $Request->jaminan,
        ]);
    	return redirect()->route('sewa.index')->with('sukses','Data Berhasil Diupdate!');
    }

    public function delete($id)
    {
    	$data_sewa=\App\datasewa::find($id);
    	$data_sewa->delete();
    	return back()->with('sukses','Data Berhasil Dihapus!');
    }
}
