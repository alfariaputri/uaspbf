<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class datamobilController extends Controller
{
    public function index(Request $Request)
    {
    	if($Request->has('cari')){
    		$data_datamobil = \App\datamobil::where('nama','LIKE','%'.$Request->cari.'%')->get();
    	}else{
    		$data_datamobil = \App\datamobil::all();
    	}
    	return view ('datamobil.index',['data_datamobil' => $data_datamobil]);
    }

    public function create(Request $Request)
    {
    	\App\datamobil::create($Request->all());
    	return back()->with('sukses','Data Berhasil Ditambahkan!');
    }

    public function edit($id)
    {
    	$datamobil=\App\datamobil::find($id);
    	return view('datamobil/edit',['datamobil'=>$datamobil]);
    }

    public function update(Request $Request,$id)
    {
    	$datamobil=\App\datamobil::find($id);
    	$datamobil->update($Request->all());
    	return redirect()->route('mobil.index')->with('sukses','Data Berhasil Diupdate!');
    }

    public function delete($id)
    {
    	$datamobil=\App\datamobil::find($id);
    	$datamobil->delete();
    	return back()->with('sukses','Data Berhasil Dihapus!');
    }
}
