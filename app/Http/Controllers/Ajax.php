<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ajax extends Controller
{
    public function get_telat($id, $tanggal_kembali){
        $datasewa = \App\datasewa::where('id',$id)->first();
        $datamobil = \App\datamobil::find($datasewa->id_mobil);
        if(date_create($tanggal_kembali) > date_create($datasewa->tanggal_kembali)){
            $data['telat'] = date_diff(date_create($tanggal_kembali),date_create($datasewa->tanggal_kembali))->format('%a');
            $data['harga_sewa'] = $datamobil->harga_sewa;
            return json_encode($data);
        } else {
            $data['telat'] = 0;
            $data['harga_sewa'] = $datamobil->harga_sewa;
            return json_encode($data);
        }
    }
}
