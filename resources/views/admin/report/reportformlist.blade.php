@extends('layouts.master')
@section('title')
       <h1>
           报表管理
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
        a{color: #0c0c0c;}
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

                                <td><a href="{{route('company.show',$report->cid)}}">{{ $report->name}}</a></td>
                                <td>{{ $report->code }}</td>
                                <td>{{ date('Y-m',strtotime($report->dtime))}}</td>
                                <td>{{ $report->updated_at }}</td>
                                <td>
                                    <div>
                                    @if(!isset($report->edit)|| $report->edit>0)
                                        <a href="{{route('reportform.seereport',$report->id)}}">查看</a>
                                    @else
                                        <a href="{{route('reportform.edit',$report->id)}}">编辑</a>
                                    @endif
                                    </div>
                                    {{--临时添加--}}
                                    @if(\Illuminate\Support\Facades\Auth::user()->username == "fysjrb")
                                        <div>
                                            <a href="{{route('reportform.edit',$report->id)}}">编辑</a>
                                        </div>
                                    @endif
                                    @if(isset($enableback) && $enableback && $report->enableedit>0)
                                        <div>
                                            <a attr="{{$report->id}}" onclick="javascript:back(this);"  href="#">退回</a>
                                        </div>
                                    @endif
                                    @if('reportform.reportlist' != Route::currentRouteName())
                                        <div>
                                            <a href="{{route('reportform.reportlist',$report->uid)}}">查看历史报表</a>
                                        </div>
                                     @endif

                                </td>
                            </tr>
                        @endforeach
                        @if(isset($userlist))
                            @foreach($userlist as $user)
                                <tr class="notupload">
                                    @if($user->cid)
                                        <td><a href="{{route('company.show',$user->cid)}}">{{ $user->name}}</a></td>
                                    @else
                                        <td>{{ $user->name}}</td>
                                    @endif
                                    <td>{{ $user->code}}</td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div style="background-color: palevioletred; color: white;">
                                        数据未上传
                                        </div>
                                        @if($user->cid)
                                            @if('reportform.reportlist' != Route::currentRouteName())
                                                <div>
                                                    <a href="{{route('reportform.reportlist',$user->id)}}">查看历史报表</a>
                                                </div>
                                            @endif
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
    <div class="modal fade" id="modal-delete" tabIndex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        ×
                    </button>
                    <h4 class="modal-title">提示</h4>
                </div>
                <form id="deleteForm" class="deleteForm" method="POST" action="">
                    <div class="modal-body">
                        <p class="lead">

                        </p>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" id="newsid" name="newsid" value="">

                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-times-circle"></i>确认
                        </button>
                    </div> </form>
            </div>
        </div>
    </div>
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
                  function back(obj) {
                      var id = $(obj).attr('attr');
                      $('.deleteForm').attr('action', '/admin/report/back/' + id);
                      $(".lead").html(" <i class=\"fa fa-question-circle fa-lg\"></i>确定要退回吗?");
                      $("#modal-delete").modal();
                  }
              </script>
@endsection