@extends('layouts.master')
@section('title')
    <h1>
        上传报表
        <small>it all starts here</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
        <li class="active">上传报表</li>
    </ol>
@endsection
@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">您本月已上传过报表！</h3>
        </div><!-- /.box-header -->
    </div>
    <script src="{{asset('js/localStorage.js')}}" type="text/javascript"></script>
   <script>$(function(){clearstorage();});</script>
@endsection