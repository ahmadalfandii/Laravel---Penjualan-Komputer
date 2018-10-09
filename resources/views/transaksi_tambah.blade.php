@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">TAMBAH Transaksi Pembelian</div>
                <div class="card-body">
{{ Form::model($transaksi, array('action' => $action, 'files' => true, 'method' => $method)) }}
 
<div class="form-group">
    {{ Form::label('pegawai_id', 'Nama pegawai') }}
    {!! Form::select('pegawai_id', $pegawai, null, ['class'=>'form-control']) !!}
    <span class="text-danger">{{ $errors->first('pegawai_id') }}</span>
</div>
 
<div class="form-group">
    {{ Form::label('supplier_id', 'Nama Supplier') }}
    {!! Form::select('supplier_id', $supplier, null, ['class'=>'form-control']) !!}
    <span class="text-danger">{{ $errors->first('supplier_id') }}</span>
</div>



<div class="form-group">
    {{ Form::label('barang_id', 'Nama Barang') }}
    {!! Form::select('barang_id', $barang, null, ['class'=>'form-control']) !!}
    <span class="text-danger">{{ $errors->first('barang_id') }}</span>
</div>

<div class="form-group">
    {{ Form::label('jumlah', 'Jumlah') }}
    {{ Form::number('jumlah',null,array('class'=>'form-control','placeholder' => 0)) }}
    <span class="text-danger">{{ $errors->first('jumlah') }}</span>
</div>

{!! Form::submit($btn_submit, ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
