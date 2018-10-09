@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">DATA {{ $judul }}</div>
                <div class="card-body">
<a href="{{ url('transaksi/tambah') }}" class="btn btn-primary btn-xs mb-2">Tambah</a>
 
<table class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>PEGAWAI</th>
                            <th>SUPPLIER</th>
                            <th>NAMA BARANG</th>
                            <th>JUMLAH</th>
                            <th width="30%">AKSI</th>
                        </tr>
                    </thead>
<tbody>
    @foreach ($transaksi as $row)
       <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $row->pegawai->nama_pegawai }}</td>
            <td>{{ $row->supplier->nama }}</td>
            <td>{{ $row->barang->nama_barang }}</td>
            <td>{{ $row->jumlah }}</td>
            <td>
<a href="{{ url('transaksi/hapus/'.$row->id) }}" class="btn btn-danger btn-xs" onclick="return confirm('Anda yakin?')" > Hapus </a>
&nbsp;
<a href="{{ url('transaksi/return/'.$row->id) }}" class="btn btn-warning btn-xs" onclick="return confirm('Anda yakin?')"> Return </a>
 
            </td>
        </tr>
    @endforeach
</tbody>
                </table>
                <div class="pagination-wrapper">  {{ $transaksi->links() }} </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
