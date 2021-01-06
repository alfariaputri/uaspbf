<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DatauserController extends Controller
{
    public function index(Request $Request)
    {
    	if($Request->has('cari')){
    		$data_Datauser = \App\Datauser::where('nama','LIKE','%'.$Request->cari.'%')->get();
    	}else{
    		$data_Datauser = \App\Datauser::all();
    	}
    	return view ('Datauser.index',['data_Datauser' => $data_Datauser]);
    }

    public function create(Request $Request)
    {

		$Datauser = \App\Datauser::create($Request->all());
    	return back()->with('sukses','Data Berhasil Ditambahkan!');
    }

    public function edit($id)
    {
    	$Datauser=\App\Datauser::find($id);
    	return view('Datauser/edit',['Datauser'=>$Datauser]);
    }

    public function update(Request $Request,$id)
    {
    	$Datauser=\App\Datauser::find($id);
    	$Datauser->update($Request->all());
    	return redirect()->route('user.index')->with('sukses','Data Berhasil Diupdate!');
    }

    public function delete($id)
    {
    	$Datauser=\App\Datauser::find($id);
    	$Datauser->delete();
    	return back()->with('sukses','Data Berhasil Dihapus!');
    }
}
