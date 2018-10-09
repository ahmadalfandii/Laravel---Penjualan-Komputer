<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
  protected $guarded = [];
  public function transaksi()
  {
     return $this->hasMany('\App\Transaksi','barang_id');
  }
  public function kategori()
  {
     return $this->belongsTo('\App\Transaksi','nama');
  }
  
}
