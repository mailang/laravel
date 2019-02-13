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
    @if(isset($summaryid))
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
        <div>
            <input type="button" value="退回" attr="{{$summaryid}}" onclick="back(this)">
        </div>
        <script type="application/javascript">
            function back(obj) {
                var id = $(obj).attr('attr');
                $('.deleteForm').attr('action', '/admin/summary/back/' + id);
                $(".lead").html(" <i class=\"fa fa-question-circle fa-lg\"></i>确定要退回吗?");
                $("#modal-delete").modal();
            }
        </script>
    @endif
    <script src="{{asset('js/localStorage.js')}}" type="text/javascript"></script>
   <script>$(function(){clearstorage();});</script>
@endsection