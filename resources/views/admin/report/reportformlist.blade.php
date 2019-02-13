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
                        <th>企业状态</th>
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
                                <td>
                                @if($companystatechangeable)
                                        <select class="form-control" name="cstate[{{$report->cid}}]"  cid="{{$report->cid}}" data="{{$report->state}}" check-type="required number">
                                            <option value="0">未核实</option>
                                            <option value="1">正常经营(有放贷业务)</option>
                                            <option value="2">暂停经营</option>
                                            <option value="3">取消试点经营资格</option>
                                            <option value="4">已吊销营业执照</option>
                                            <option value="5">已注销营业执照</option>
                                        </select>
                                @else
                                    @switch($report->state)
                                        @case(1)
                                        正常经营(有放贷业务)
                                        @break
                                        @case(2)
                                        暂停经营
                                        @break
                                        @case(3)
                                        取消试点经营资格
                                        @break
                                        @case(4)
                                        已吊销营业执照
                                        @break
                                        @case(5)
                                        已注销营业执照
                                        @break
                                        @default
                                        未核实
                                        @break
                                    @endswitch
                                @endif
                                </td>
                                <td>{{ date('Y-m',strtotime($report->dtime))}}</td>
                                <td>{{ $report->updated_at }}</td>
                                <td>
                                    <div>
                                    @if(!isset($report->edit)|| $report->edit>0 || auth()->user()->type == "3")
                                            <a href="{{route('reportform.seereport',$report->id)}}">查看</a>
                                        @else
                                            <a href="{{route('reportform.edit',$report->id)}}">编辑</a>
                                        @endif
                                    </div>
                                    @if(isset($enableback) && $enableback && $report->enableedit>0 && auth()->user()->type != "3")
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
                                    <td>
                                        @if($companystatechangeable)
                                            <select class="form-control" name="cstate[{{$user->cid}}]" cid="{{$user->cid}}" data="{{$user->state}}"  check-type="required number">
                                                <option value="0">未核实</option>
                                                <option value="1">正常经营(有放贷业务)</option>
                                                <option value="2">暂停经营</option>
                                                <option value="3">取消试点经营资格</option>
                                                <option value="4">已吊销营业执照</option>
                                                <option value="5">已注销营业执照</option>
                                            </select>
                                        @else
                                            @switch($user->state)
                                                @case(1)
                                                正常经营(有放贷业务)
                                                @break
                                                @case(2)
                                                暂停经营
                                                @break
                                                @case(3)
                                                取消试点经营资格
                                                @break
                                                @case(4)
                                                已吊销营业执照
                                                @break
                                                @case(5)
                                                已注销营业执照
                                                @break
                                                @default
                                                未核实
                                                @break
                                            @endswitch
                                        @endif
                                    </td>
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


    <div class="modal fade" id="modal-modify" tabIndex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        ×
                    </button>
                    <h4 class="modal-title">提示</h4>
                </div>
                <div class="modal-body">
                    <p class="lead">

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button type="submit" class="btn btn-danger"  id="statemodifybtn">
                        <i class="fa fa-times-circle"></i>确认
                    </button>
                </div>
            </div>
        </div>
    </div>
              <script type="text/javascript">
                  $(document).ready(function () {
                      $("select[name^='cstate']").each(function () {
                            $(this).val($(this).attr("data"));
                      });

                      $("select[name^='cstate']").change(function () {
                          $(".lead").html("<i class=\"fa fa-question-circle\"></i>状态修改为：" + $(this).find("option:selected").text());
                          var postdata = {
                              'cid':$(this).attr("cid"),
                              'state':$(this).val(),
                              '_token':"{{csrf_token()}}"
                          };
                          $("#statemodifybtn").click(function () {
                              $.ajax({
                                  type: "POST",
                                  url: "companystate",
                                  data: postdata,
                                  success: function (data) {
                                      if(data == "ok"){
                                          $(".modal-body").text("修改成功");
                                          $("#myModal").modal();
                                      }
                                      else{
                                          $(".modal-body").text("修改失败");
                                          $("#myModal").modal();
                                      }
                                  },
                                  error: function () {
                                      $(".modal-body").text("修改失败");
                                      $("#myModal").modal();
                                  }
                              });

                              $("#modal-modify").modal('hide');
                          });
                          $("#modal-modify").modal();
                      });

                  });

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