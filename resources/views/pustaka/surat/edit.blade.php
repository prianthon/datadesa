@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
          <!--breadcrumb-->
          <ul class="breadcrumb">
            <li><a href="{{ url('/home') }}">Dashboard</a></li>
            <li><a href="{{ url('pustaka/surat') }}">Pustaka</a></li>
            <li class="active">Ubah Surat</li>
          </ul>
          <!--breadcrumb-->
            <div class="panel panel-default">
                <div class="panel-heading">Daftar Pustaka</div>
                <div class="panel-body">
                  <div class="col-md-8">
                    {!! Form::model($surat, array('url'=>'pustaka/surat/'.$surat->id,'method'=>'patch')) !!}
                    {!! link_to('pustaka/surat','Kelola Surat',['class'=>'btn btn-primary btn-sm']) !!} {!! Form::submit('Simpan',['class'=>'btn btn-success btn-sm']) !!}
                    <br><br>
                    @include('pustaka.surat._form')
                    {!! Form::close() !!}
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
