@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">TAMBAH BARANG</div>
                <div class="card-body">
                    {{ Form::model($barang, array('action' => $action, 'files' => true, 'method' => $method, 'files' => true)) }}
                    <div class="form-group">    
                        {{ Form::label('nama_barang', 'NAMA BARANG') }}
                        {{ Form::text('nama_barang',null,['class'=>'form-control','placeholder' => 'Nama Barang','autofocus']) }}
                        <span class="text-danger">{{ $errors->first('nama_barang') }}</span>
                    </div>
                    <div class="form-group">
                            <!-- jurusan -->
                            {{ Form::label('kategori_id', 'kategori', array('class' => 'label')) }}
                            {{ Form::select('kategori_id',['1' => 'Baru',
                                                          '2' => 'Bekas'],null,array('class'=>'form-control'))}}
                            <span class="text-danger">{{ $errors->first('kategori_id') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('harga_jual', 'HARGA BARANG') }}
                            {{ Form::text('harga_jual',null,array('class'=>'form-control','placeholder' => 'Harga Barang')) }}
                            <span class="text-danger">{{ $errors->first('harga_jual') }}</span>
                        </div>
                        <div class="form-group">
                            {{ Form::label('stok', 'STOK BARANG') }}
                            {{ Form::number('stok',null,array('class'=>'form-control')) }}
                            <span class="text-danger">{{ $errors->first('stok') }}</span>
                        </div>
                        <div class="form-group">    
                            {{ Form::label('gambar', 'GAMBAR BARANG') }}
                            {!! Form::file('gambar', ['class' => 'form-control']) !!}
                                @if ($barang->gambar != "")   
                                    <center><img src="{{ \Storage::url($barang->gambar) }}" class="img border rounded mt-3 p-1" width="250"></center>
                                @endif    
                            <span class="text-danger">{{ $errors->first('gambar') }}</span>
                        </div>
{!! Form::submit($btn_submit, ['class' => 'btn btn-primary']) !!}
<a class="btn btn-info" href="{{ url('barang') }}" role="button">Kembali</a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

