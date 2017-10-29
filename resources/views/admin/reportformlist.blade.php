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
                  企业贷款列表</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>企业名称</th>
                        <th>区域</th>
                        <th>法人</th>
                        <th>时间</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>{{ $report->areacode}}</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

@endsection