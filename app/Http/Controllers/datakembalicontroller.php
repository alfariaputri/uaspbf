<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class datakembalicontroller extends Controller
{
    public function index (Request $Request)
    {
    	if($Request->has('cari')){
    		$data_kembali = \App\datakembali::where('nama','LIKE','%'.$Request->cari.'%')->get();
    	}else{
            $data_kembali = \App\datakembali::all();
            $id_kembali = [];
            foreach ($data_kembali as $key => $value) {
                $id_kembali[$key] = $value->id;
            }
			$data_sewa = \App\datasewa::whereNotIn('id', $id_kembali)->get();
    	}
    	return view ('datakembali.index',['datakembali' => $data_kembali, 'datasewa' => $data_sewa]);
    }

    public function create(Request $Request)
    {
		\App\datakembali::create($Request->all());
    	return back()->with('sukses','Data Berhasil Ditambahkan!');
    }

    public function edit($id)
    {
		$data_kembali=\App\datakembali::find($id);
		$datakembali = \App\datakembali::all();
        $id_kembali = [];
        foreach ($datakembali as $key => $value) {
            if($data_kembali->id != $value->id){
                $id_kembali[$key] = $value->id;
            }
        }
        $data_sewa = \App\datasewa::whereNotIn('id', $id_kembali)->get();
    	return view('datakembali/edit',['data_kembali'=>$data_kembali,'data_sewa' => $data_sewa]);
    }

    public function update(Request $Request,$id)
    {
    	$data_kembali=\App\datakembali::find($id);
    	$data_kembali->update($Request->all());
    	return redirect()->route('kembali.index')->with('sukses','Data Berhasil Diupdate!');
    }

    public function delete($id)
    {
    	$data_kembali=\App\datakembali::find($id);
    	$data_kembali->delete();
    	return back()->with('sukses','Data Berhasil Dihapus!');
    }
}
