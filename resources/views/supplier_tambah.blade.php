@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">DATA SUPPLIER</div>
                <div class="card-body">
                    {{ Form::model($supplier, array('method' => $method,'action' => $action)) }}
                        <div class="form-group">
                            <!-- nama manager -->
                            {{ Form::label('nama', 'Nama Supplier', array('class' => 'label')) }}
                            {{ Form::text('nama',null,array('class'=>'form-control')) }}
                            <span class="text-danger">{{ $errors->first('nama') }}</span>
                        </div>
                        <div class="form-group">
                            <!-- nama -->
                            {{ Form::label('alamat', 'Alamat', array('class' => 'label')) }}
                            {{ Form::text('alamat',null,array('class'=>'form-control')) }}
                            <span class="text-danger">{{ $errors->first('alamat') }}</span>
                        </div>
                        <div class="form-group">
                            <!-- nama -->
                            {{ Form::label('no_telp', 'No Telp', array('class' => 'label')) }}
                            {{ Form::text('no_telp',null,array('class'=>'form-control')) }}
                            <span class="text-danger">{{ $errors->first('no_telp') }}</span>
                        </div>
                        <div class="form-group">
                            <!-- nama -->
                            {{ Form::label('email', 'E-MAIL', array('class' => 'label')) }}
                            {{ Form::text('email',null,array('class'=>'form-control')) }}
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>
                        
                            <br />
                              <button class="btn btn-info" type="submit">SIMPAN</button>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection