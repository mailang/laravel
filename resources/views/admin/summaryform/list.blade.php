@extends('layouts.master')
@section('title')
    <h1>
        首页
        <small>it all starts here</small>
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
                报表列表</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>

                    <th>单位名称</th>
                    <th>报表记录时间</th>
                    <th>上传报表时间</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($reports as $report)
                    <tr id="">

                        <td>{{ $report->name}}</td>
                        <td>{{ date('Y-m',strtotime($report->dtime))}}</td>
                        <td>{{ $report->updated_at }}</td>
                        <td> <a href="/admin/summary/{{ $report->id}}">查看</a>&nbsp;&nbsp;<a href="{{$url.'/'.$report->id}}">进入</a></td>


                    </tr>
                @endforeach
                </tbody>
            </table>
        </div><!-- /.box-body -->
    </div><!-- /.box -->

@endsection