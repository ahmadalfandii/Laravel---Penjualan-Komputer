@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">DATA MANAGER</div>
                <div class="card-body">
                    {{ Form::model($manager, array('method' => $method,'action' => $action)) }}
                        <div class="form-group">
                            <!-- nama manager -->
                            {{ Form::label('nama_manager', 'Nama Manager', array('class' => 'label')) }}
                            {{ Form::text('nama_manager',null,array('class'=>'form-control')) }}
                            <span class="text-danger">{{ $errors->first('nama_manager') }}</span>
                        </div>
                        <div class="form-group">
                            <!-- nama -->
                            {{ Form::label('alamat', 'Alamat', array('class' => 'label')) }}
                            {{ Form::text('alamat',null,array('class'=>'form-control')) }}
                            <span class="text-danger">{{ $errors->first('alamat') }}</span>
                        </div>
                        <div class="form-group">
                            <!-- nama -->
                            {{ Form::label('no_tlp', 'No Telp', array('class' => 'label')) }}
                            {{ Form::text('no_tlp',null,array('class'=>'form-control')) }}
                            <span class="text-danger">{{ $errors->first('no_tlp') }}</span>
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