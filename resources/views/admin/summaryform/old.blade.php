@extends('layouts.master')
@section('title')
<h1>
    <a href="{{url()->previous()}}">返回</a>
</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
    <li><a href="#">报表管理</a></li>
    <li class="active">企业报表列表</li>
</ol>
@endsection
@section('content')

<div class="box">
    <div class="box-header">
        <h3 class="box-title">
            报表查看</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
            当前数据为后添加数据，并非审核数据
    </div><!-- /.box-body -->
</div><!-- /.box -->

@endsection