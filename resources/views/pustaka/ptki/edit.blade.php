@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
          <!--breadcrumb-->
          <ul class="breadcrumb">
            <li><a href="{{ url('/home') }}">Dashboard</a></li>
            <li><a href="{{ url('pustaka/penyalur-tki') }}">Pustaka</a></li>
            <li class="active">Ubah Penyalur TKI</li>
          </ul>
          <!--breadcrumb-->
            <div class="panel panel-default">
                <div class="panel-heading">Daftar Pustaka</div>
                <div class="panel-body">
                  <div class="col-md-8">
                    {!! Form::model($penyalurtki, array('url'=>'pustaka/penyalur-tki/'.$penyalurtki->id,'method'=>'patch')) !!}
                    {!! link_to('pustaka/penyalur-tki','Kelola Penyalur TKI',['class'=>'btn btn-primary btn-sm']) !!} {!! Form::submit('Simpan',['class'=>'btn btn-success btn-sm']) !!}
                    <br><br>
                    @include('pustaka.ptki._form')
                    {!! Form::close() !!}
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
