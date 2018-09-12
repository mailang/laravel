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
    <form class="form-horizontal" id="form" action="{{route('company.postcancel',$company['id'])}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">公司信息修改</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <div class="box-body form-horizontal">
                        <div class="form-group">
                            <label for="total_capital" class="col-sm-4 control-label">公司名称（全称）:</label>
                            <div class="col-sm-4">
                                <input class="form-control" type="text" id="name" name="name"
                                       placeholder="公司名称" value="{{$company['name']}}" check-type="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="total_capital" class="col-sm-4 control-label">联系人:</label>
                            <div class="col-sm-4">
                                <input class="form-control" type="text" id="contacts" name="contacts"
                                       placeholder="联系人" value="{{$company['contacts']}}" check-type="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="money_capital" class="col-sm-4 control-label">社会信用代码:</label>
                            <div class=" col-sm-4">
                                <input class="form-control" id="code" name="code"
                                       placeholder="社会信用代码" type="text" value="{{$company['code']}}"
                                       check-type="required">
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="money_capital" class="col-sm-4 control-label">企业是否注销:</label>
                            <div class=" col-sm-4">
                                {{$company['isclosing']==0?"否":"是"}}
                            </div>

                        </div>
                        <div class="box-footer"><label class="col-lg-4 control-label">&nbsp;</label>
                            <button type="submit" id="btnsubmit" class="btn btn-primary">企业注销</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection