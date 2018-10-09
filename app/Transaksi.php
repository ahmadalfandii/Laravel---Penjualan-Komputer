<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
   protected $guarded = [];
    public function barang()
    {
   	    return $this->belongsTo('\App\Barang','barang_id')->withDefault();
    }
}
