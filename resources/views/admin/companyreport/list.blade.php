@extends('layouts.master')
@section('title')
    <h1>
        小额贷款公司报表
        <small>it all starts here</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
        <li><a href="#">报表管理</a></li>
        <li class="active">企业报表列表</li>
    </ol>
@endsection
@section('content')
    <form class="form-horizontal" id="form" action="{{route('companyreport.export')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">小额贷款公司报表上传概况</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <div class="box-body form-horizontal">
                        <div class="form-group">
                            <label for="" class="col-sm-4 control-label">区域选择:</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="area" id="area">
                                  @foreach($list as $area)
                                        <option value="{{ $area->areacode }}" >{{$area->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-4 control-label">时间选择:</label>
                            <div class="row">
                                <div class="col-lg-2">
                                    <select check-type="required number" class="form-control" name="year" id="year">
                                        <?php $year=date("Y"); $m=$year-2017;?>
                                        @for($i=0;$i<=$m;$i++)
                                            <option>{{ $year-$i }}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="col-lg-2">
                                    <select check-type="required number" class="form-control" name="month"
                                            id="month">
                                        @for($i=1;$i<13;$i++)
                                            <option>{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                        </div>
                    </div>
                        <div class="form-group">    <label for="" class="col-sm-4 control-label"></label> <div class="row">   <div class="col-sm-4">
                                <button type="submit" id="btnsubmit" class="btn btn-primary">生成并下载</button></div></div>
                        </div>
                </div>
            </div>
        </div>
        </div> </form>
@endsection
