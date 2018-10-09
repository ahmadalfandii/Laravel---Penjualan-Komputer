<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
       $data['barang'] = \App\Barang::paginate(5);
       $data['judul']  = "Data Barang";
       return view('barang_index',$data);
    }

    public function cari(Request $ambildata)
    {
    $cari = $ambildata->get('search');
    $data['barang']= \App\Barang::where('nama_barang','LIKE','%'.$cari.'%')
                              ->orwhere('harga_jual','LIKE','%'.$cari.'%')->paginate(10);
                              
                              
    $data['judul']  = "Data Barang";
    return view('barang_index',$data);
    }

    public function hapus($id)
    {
        $barang = \App\Barang::findOrFail($id);
        $gambar = $barang->gambar;
        @\Storage::delete($gambar);
        $barang->delete();
        return redirect('barang')->with('pesan', 'Data sudah dihapus!');
    }
    public function tambah()
    {
        $data['barang']     = new \App\Barang();
        $data['action']     = 'BarangController@simpan';
        $data['kategori']      = \App\Kategori::pluck('nama','id');        
        $data['btn_submit'] = 'SIMPAN';
        $data['method']     = "POST";
        return view('barang_tambah',$data);
    }
    public function simpan(Request $request)
    {
        $validasi = $this->validate($request,[
            'nama_barang'      => 'required|unique:barangs',            
            'harga_jual'     => 'required|integer',
            'stok'     => 'required|integer',
            'gambar'    => 'required|file|mimes:png,jpg,jpeg',
        ]);        
        $file_nama             = $request->file('gambar')->store('public/gambar');
        $requestData           = $request->all();
        $requestData['gambar'] = $file_nama;
        \App\Barang::create($requestData);        
        return redirect()->back()->with('pesan', 'Data sudah disimpan!');
    }
    public function edit($id)
    {
        $data['barang']     = \App\Barang::findOrFail($id);        
        $data['method']     = "PUT";
        $data['btn_submit'] = "UPDATE";
        $data['action']     = array('BarangController@update', $id);
        return view('barang_tambah',$data);        
    }
    public function update(Request $request, $id)
    {
        $barang = \App\Barang::findOrFail($id);
        $validasi = $this->validate($request,[
            'nama_barang' => 'required|unique:barangs,nama_barang,'.$id,
            'kategori_id' => 'required',
            'harga_jual' => 'required|integer',
            'stok' => 'required|integer',
                        
        ]);
        $barang->update($request->all());        
        return redirect('barang')->with('pesan', 'Data sudah diubah!');
    }
}
