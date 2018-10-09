<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
   public function return($id)
    {
        $transaksi = \App\Transaksi::findOrFail($id);
        $vid = $transaksi->barang_id;
        $jumlah_beli = $transaksi->jumlah;

        $barang = \App\Barang::findOrFail($vid);
        $barang_stok = $barang->stok;
        $stok_akhir  = $barang_stok - $jumlah_beli;
        $barang->stok= $stok_akhir;

        $barang->save();
        $transaksi->delete();

        return redirect()->back()->with('pesan', 'Data sudah diReturn!');
    }

    public function hapus($id)
    {
       $transaksi = \App\Transaksi::findOrFail($id);
       $transaksi->delete();
       return redirect('transaksi')->with('pesan',  'Data sudah dihapus!');
    }

    public function simpan(Request $request)
    {
        $validasi = $this->validate($request,[
          'nama_barang' => 'required',
          'jumlah' => 'required|integer',
        ]);

        $barang         = \App\Barang::findOrFail($request->barang_id);
        $stok_awal      = $barang->stok;
        $stok_total     = $stok_awal+$request->jumlah;
        $barang->stok   = $stok_total;

        \App\Transaksi::create($request->all());
        $barang->save();

        return redirect()->back()->with('pesan', 'Transaksi Berhasil');
    }


    public function tambah()
    {
          $data['transaksi']  = new \App\Transaksi();
          $data['judul']      = "Tambah Transaksi";
          $data['action']     = 'TransaksiController@simpan';
          $data['barang']      = \App\Barang::pluck('nama_barang','id');
          $data['pegawai']      = \App\Pegawai::pluck('nama_pegawai','id');
          $data['supplier']      = \App\Supplier::pluck('nama','id');
          $data['btn_submit'] = 'SIMPAN';
          $data['method']     = "POST";
          return view('transaksi_tambah',$data);
    }


    public function index()
    {
        $a = 10;
        $transaksi = \App\Transaksi::latest()->paginate($a);
        $data['transaksi']  = $transaksi;
        $data['judul']    = "Data transaksi";
        return view('transaksi_index',$data);
    }
}
