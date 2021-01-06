<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class datasewa extends Model
{
    protected $table = 'datasewa';
    protected $guarded = [];
    public $timestamps=false;

    // public function read_full(){
    //     return DB::table($this->table)
    //     ->select('*', 'datasewa.id as id')
    //     ->join('datauser','datauser.id','=','datasewa.id')
    //     ->join('datamobil','datamobil.id','=','datasewa.id')
    //     ->get();
    // }

    public function user()
    {
        return $this->belongsTo(Datauser::class, 'id_user');
    }

    public function mobil()
    {
        return $this->belongsTo(datamobil::class, 'id_mobil');
    }

    // public function belum_kembali(){
    //     return DB::table($this->table)
    //     ->select('*', 'datasewa.id as id')
    //     ->join('datauser','datauser.id','=','datasewa.id')
    //     ->leftJoin('datakembali','datakembali.id','=','datasewa.id')
    //     ->whereNull('datakembali.id')
    //     ->get();
    // }

}

