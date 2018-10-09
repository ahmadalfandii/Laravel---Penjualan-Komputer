<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        if (!empty($keyword))
        {
            $supplier = \App\Supplier::where('nama', 'LIKE', "%$keyword%")
                                    ->orWhere('email', 'LIKE', "%$keyword%")
                                    ->latest()->paginate(10);
            $data['supplier'] = $supplier;
        }
        else
        {
            $supplier = \App\Supplier::latest()->paginate(10);
            $data['supplier'] = $supplier;            
        }
        return view('supplier_index',$data);
    }
	public function tambah()
    {
    	$data['supplier'] = new \App\Supplier();
    	$data['action']     = 'SupplierController@simpan';        
        $data['btn_submit'] = 'SIMPAN';
        $data['method']     = "POST";
    	return view('supplier_tambah',$data);
    }
    public function simpan(Request $request)
    {
    	$validasi = $this->validate($request,[
            'nama'    => 'required|unique:suppliers',
            'alamat'     => 'required',
            'no_telp'     => 'required',
            'email'     => 'required',            
        ]);        
        $requestData           = $request->all();        
        \App\Supplier::create($requestData);        
        return redirect()->back()->with('pesan', 'Data sudah disimpan!');
    }
    public function hapus($id)
    {
        $supplier = \App\Supplier::findOrFail($id);
        $supplier->delete();
        return redirect('supplier')->with('pesan', 'Data sudah dihapus!');
    }
    public function edit($id)
    {
        $data['supplier']      =\App\Supplier::findOrFail($id);
        $data['action']         = array('SupplierController@update', $id);
        $data['btn_submit']     = 'UPDATE';
        $data['method']           = "PUT";
        return view('supplier_tambah',$data);
    }
    public function update(Request $request, $id)
    {
        $supplier = \App\Supplier::findOrFail($id);
        $validasi = $this ->validate($request,[
            'nama' => 'required|unique:suppliers,nama,'.$id,
            'alamat' => 'required',
            'no_telp' => 'required',
            'email' => 'required',

        ]);
        $supplier->update($request->all());
        return redirect('supplier')->with('pesan', 'Data Sudah diubah!');
	}
}
