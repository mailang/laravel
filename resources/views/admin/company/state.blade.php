@extends('layouts.master')
@section('title')
    <h1>
        公司管理
        <small>it all starts here</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
        <li class="active">公司管理</li>
    </ol>
@endsection
@section('content')
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">公司状态修改</h3>
                </div><!-- /.box-header -->
                <!-- form start -->

                <div class="box-body form-horizontal">
                    <div class="form-group">
                        <label for="total_capital" class="col-sm-4 control-label">公司名称（全称）:</label>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" id="name" name="name"
                                   placeholder="公司名称" value="{{$company['name']}}" check-type="required" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="total_capital" class="col-sm-4 control-label">联系人:</label>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" id="contacts" name="contacts"
                                   placeholder="联系人" value="{{$company['contacts']}}" check-type="required" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="money_capital" class="col-sm-4 control-label">社会信用代码:</label>
                        <div class=" col-sm-4">
                            <input class="form-control" id="code" name="code"
                                   placeholder="社会信用代码" type="text" value="{{$company['code']}}"
                                   check-type="required" readonly>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="money_capital" class="col-sm-4 control-label">企业状态:</label>
                        <div class=" col-sm-4">
                            <select class="form-control" name="type" id="cstate" check-type="required number">
                                <option value="0">未核实</option>
                                <option value="1">正常经营(有放贷业务)</option>
                                <option value="2">暂停经营</option>
                                <option value="3">取消试点经营资格</option>
                                <option value="4">已吊销营业执照</option>
                                <option value="5">已注销营业执照</option>
                            </select>
                        </div>
                    </div>

                    <script type="text/javascript">
                        $(document).ready(function(){
                            $("#cstate").val("{{$company['state']}}");
                            $("#cstate").change(function () {
                                $(".lead").html("<i class=\"fa fa-question-circle\"></i>状态修改为：" + $(this).find("option:selected").text());
                                var postdata = {
                                  'cid':"{{$company['id']}}",
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
                    </script>
                </div>
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
@endsection