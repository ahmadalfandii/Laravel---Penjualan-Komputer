@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">DATA {{ $judul }}</div>
                 {!! Form::open(['method'=>'GET','url'=>'barang/cari','role'=>'search'])  !!}
                  <br>
                  <div class="input-group custom-search-form">
                    <input type="text" class="form-control" name="search" placeholder="Cari Data...">
                      <span class="input-group-btn">
                          <button class="btn btn-primary" type="submit"> Cari </button>
                          <a href="{{ url('barang') }}" class="btn btn-primary"> Refresh Data </a>
                      </span>
                  </div>
                {!! Form::close() !!}
                <div class="card-body">
<table class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>GAMBAR</th>
                            <th>NAMA</th>                           
                            <th>HARGA</th>
                            <th>STOK</th>
                            <th width="25%">AKSI</th>
                        </tr>
                    </thead>
<tbody>
    @foreach ($barang as $row)
       <tr>
            <td>{{ $loop->iteration }}</td>
            <td><img src="{{ Storage::url($row->gambar) }}" width="100"class="img img-thumbnail img-rounded" align="bottom"></td>
            <td>
                
                    {{ $row->nama_barang }}                    
            
                <br />
                
            </td>        
            <td>{{ $row->harga_jual }}</td>
            <td>{{ $row->stok }}</td>
            <td>
<a href="{{ url('barang/edit/'.$row->id) }}" class="btn btn-info" > Ubah</a> 
&nbsp;
<a href="{{ url('barang/hapus/'.$row->id) }}" class="btn btn-danger" onclick="return confirm('Anda yakin?')" > Hapus </a>
            </td>
        </tr> 
    @endforeach                        
</tbody>
                </table>
                {{ $barang->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection