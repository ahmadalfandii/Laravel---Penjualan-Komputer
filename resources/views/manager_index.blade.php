@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">DATA MANAGER</div>
                <div class="card-body">
                    <form method="GET" action="{{ url('manager') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group pull-right">
                                <div class="box-tools">
                                <div class="has-feedback">
                                    <input type="text" name="search" class="form-control input-sm" placeholder="Cari" value="{{ request('search') }}">
                                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                                </div>
                            </div>  
                            </div>
                    </form>

                   
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr align="center">
                                <th>NO</th>
                                <th>NAMA MANAGER</th>
                                <th>ALAMAT</th>
                                <th>NO TELP</th>
                                <th>E-MAIL</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody align="center">
                            @foreach ($manager as $row)                                
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <th>{{ $row->nama_manager }}</th>
                                <th>{{ $row->alamat }}</th>
                                <th>{{ $row->no_tlp }}</th>
                                <th>{{ $row->email }}</th>
                                <th>
                                    <a class="btn btn-warning" href="{{ url('manager/edit/'.$row->id) }}" role="button">ubah</a>

                                    <a class="btn btn-danger" href="{{ url('manager/hapus/'.$row->id) }}" role="button" onclick="return confirm('Yakin Di Hapus ?');">Hapus</a>
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination-wrapper">  {{ $manager->links() }} </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection