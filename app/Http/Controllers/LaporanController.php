<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
   public function barang()
    {
      $data['barang'] = \App\barang::all();
      return view('laporan_barang',$data);
    }

    

    public function transaksi(Request $request)
    {
      $mulai = $request->get('mulai');
      $sampai = $request->get('sampai');
      $data['pembelian'] = \App\Pembelian::whereBetween('created_at',[$mulai,$sampai])->get();
      $data['mulai']   = $mulai;
      $data['sampai']   = $sampai;
      return view('laporan_pembelian',$data);
    }

    
}
