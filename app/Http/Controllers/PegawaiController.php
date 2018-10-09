<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
     public function index(Request $request)
    {
        $keyword = $request->get('search');
        if (!empty($keyword))
        {
            $pegawai = \App\Pegawai::where('nama_pegawai', 'LIKE', "%$keyword%")
                                    ->orWhere('email', 'LIKE', "%$keyword%")
                                    ->latest()->paginate(10);
            $data['pegawai'] = $pegawai;
        }
        else
        {
            $pegawai = \App\Pegawai::latest()->paginate(10);
            $data['pegawai'] = $pegawai;            
        }
        return view('pegawai_index',$data);
    }
	public function tambah()
    {
    	$data['pegawai'] = new \App\Pegawai();
    	$data['action']     = 'PegawaiController@simpan';        
        $data['btn_submit'] = 'SIMPAN';
        $data['method']     = "POST";
    	return view('pegawai_tambah',$data);
    }
    public function simpan(Request $request)
    {
    	$validasi = $this->validate($request,[
            'nama_pegawai'      => 'required|unique:pegawais',
            'alamat'     => 'required',
            'no_telp'     => 'required',
            'email'     => 'required',            
        ]);        
        $requestData           = $request->all();        
        \App\Pegawai::create($requestData);        
        return redirect()->back()->with('pesan', 'Data sudah disimpan!');
    }
    public function hapus($id)
    {
        $pegawai = \App\Pegawai::findOrFail($id);
        $pegawai->delete();
        return redirect('pegawai')->with('pesan', 'Data sudah dihapus!');
    }
    public function edit($id)
    {
        $data['pegawai']      =\App\Pegawai::findOrFail($id);
        $data['action']         = array('PegawaiController@update', $id);
        $data['btn_submit']     = 'UPDATE';
        $data['method']           = "PUT";
        return view('pegawai_tambah',$data);
    }
    public function update(Request $request, $id)
    {
        $pegawai = \App\Pegawai::findOrFail($id);
        $validasi = $this ->validate($request,[
            'nama_pegawai' => 'required|unique:pegawais,nama_pegawai,'.$id,
            'alamat' => 'required',
            'no_telp' => 'required',
            'email' => 'required',

        ]);
        $pegawai->update($request->all());
        return redirect('pegawai')->with('pesan', 'Data Sudah diubah!');
    }
}
