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
    <style type="text/css">
        #tab li{float: left; list-style: none; width: 100px; font-size: 15px; height: 41px; text-align: center;
            border-radius: 3px; border-top: 1px solid #d2d6de; display: inline-block;}
        a{color: #0c0c0c; width: 100%; height: 100%;}
        .current{ background-color: #ffffff; border-bottom: none;}

    </style>
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">
                  企业贷款列表</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    @if(isset($userlist))
                        <ul id="tab" style=" height: 40px; line-height: 40px; background-color: #d2d6de;">
                            <li class="current"> <a href="{{route("summaryform.uploadlist")}}"><h5 class="box-title">全部</h5> </a> </li>
                            <li> <a href="javascript:void(0);" onclick="uploaded(this);"><h5 class="box-title">已上传</h5> </a> </li>
                            <li><a href="javascript:void(0);" onclick="notuploaded(this);"><h5 class="box-title">未上传</h5></a> </li>
                        </ul>
                    @endif
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>

                        <th>企业名称</th>
                        <th>信用代码</th>
                          <th>报表记录时间</th>
                        <th>上传报表时间</th>
                        <th>操作</th>
                      </tr>
                    </thead>
                  <tbody>
                        @foreach($reports as $report)
                            <tr class="upload">

                                <td>{{ $report->name}}</td>
                                <td>{{ $report->code }}</td>
                                <td>{{ date('Y-m',strtotime($report->dtime))}}</td>
                                <td>{{ $report->updated_at }}</td>
                                <td> <a href="/admin/seereport/{{ $report->id}}">查看</a></td>
                            </tr>
                        @endforeach
                        @if(isset($userlist))
                            @foreach($userlist as $user)
                                <tr class="notupload">
                                    <td>{{ $user->name}}</td>
                                    <td>{{ $user->code}}</td>
                                    <td></td>
                                    <td></td>
                                    <td style="background-color: palevioletred; color: white;">数据未上传</td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              <script type="text/javascript">
                  function uploaded(obj)
                  {
                      $(".notupload").hide();
                      $(".upload").show();
                      $(obj).parent("li").addClass("current").siblings().removeClass("current");
                      // alert($(obj).parent("li"));

                  }
                  function notuploaded(obj)
                  {
                      $(".upload").hide();
                      $(".notupload").show();
                      $(obj).parent().addClass("current").siblings().removeClass("current");
                  }
              </script>
@endsection