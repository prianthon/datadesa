@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
          <!--breadcrumb-->
          <ul class="breadcrumb">
            <li><a href="{{ url('/home') }}">Dashboard</a></li>
            <li><a href="{{ url('pengaturan/perangkat-desa') }}">Pengaturan</a></li>
            <li class="active">Ubah Perangkat Desa</li>
          </ul>
          <!--breadcrumb-->
            <div class="panel panel-default">
                <div class="panel-heading">Daftar Pustaka</div>
                <div class="panel-body">
                  <div class="col-md-8">
                    {!! Form::model($perangkat_desa, array('url'=>'pengaturan/perangkat-desa/'.$perangkat_desa->id,'method'=>'patch')) !!}
                    {!! link_to('pengaturan/perangkat-desa','Kelola Perangkat Desa',['class'=>'btn btn-primary btn-sm']) !!} {!! Form::submit('Simpan',['class'=>'btn btn-success btn-sm']) !!}
                    <br><br>
                    @include('pengaturan.perangkat._form')
                    {!! Form::close() !!}
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
