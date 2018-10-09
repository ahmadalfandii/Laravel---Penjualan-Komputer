<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        if (!empty($keyword))
        {
            $manager = \App\Manager::where('nama_manager', 'LIKE', "%$keyword%")
                                    ->orWhere('email', 'LIKE', "%$keyword%")
                                    ->latest()->paginate(10);
            $data['manager'] = $manager;
        }
        else
        {
            $manager = \App\Manager::latest()->paginate(10);
            $data['manager'] = $manager;            
        }
        return view('manager_index',$data);
    }
	public function tambah()
    {
    	$data['manager'] = new \App\Manager();
    	$data['action']     = 'ManagerController@simpan';        
        $data['btn_submit'] = 'SIMPAN';
        $data['method']     = "POST";
    	return view('manager_tambah',$data);
    }
    public function simpan(Request $request)
    {
    	$validasi = $this->validate($request,[
            'nama_manager'      => 'required|unique:managers',
            'alamat'     => 'required',
            'no_tlp'     => 'required',
            'email'     => 'required',            
        ]);        
        $requestData           = $request->all();        
        \App\Manager::create($requestData);        
        return redirect()->back()->with('pesan', 'Data sudah disimpan!');
    }
    public function hapus($id)
    {
        $manager = \App\Manager::findOrFail($id);
        $manager->delete();
        return redirect('manager')->with('pesan', 'Data sudah dihapus!');
    }
    public function edit($id)
    {
        $data['manager']      =\App\Manager::findOrFail($id);
        $data['action']         = array('ManagerController@update', $id);
        $data['btn_submit']     = 'UPDATE';
        $data['method']           = "PUT";
        return view('manager_tambah',$data);
    }
    public function update(Request $request, $id)
    {
        $manager = \App\Manager::findOrFail($id);
        $validasi = $this ->validate($request,[
            'nama_manager' => 'required|unique:managers,nama_manager,'.$id,
            'alamat' => 'required',
            'no_tlp' => 'required',
            'email' => 'required',

        ]);
        $manager->update($request->all());
        return redirect('manager')->with('pesan', 'Data Sudah diubah!');
    }
}
