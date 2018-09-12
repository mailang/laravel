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
    <style>
        .current{background-color: #ecf0f5;border-color: #367fa9;}
    </style>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <div class="col-md-3">
                        <a href="#" class="btn btn-primary btn-block margin-bottom">市区列表</a>
                        <div class="box box-solid">
                            <div class="box-body no-padding" style="display: block;">
                                <ul class="nav nav-pills nav-stacked">
                                    @if(isset($list))
                                       @foreach( $list as  $item)
                                    <li><a href="{{route('companyreport.noupload',$item->areacode)}}" @if($data['current']==$item->name) class="current" @endif><i class="fa fa-circle-o text-light-blue"></i>&nbsp;&nbsp;{{$item->name}} </a> </li>
                                @endforeach @endif
                                </ul>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div>
                    <div class="col-md-9">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title"> {{$data['current'].$data['year'].'年'.$data['month'].'月'}}未上传报表企业</h3>
                                <div class="box-tools pull-right" style="margin-right: 5px;">
                                    <div class="has-feedback">
                                        <div style="float: left;">
                                            <select check-type="required number" class="form-control" name="year" id="year">
                                                <?php $year=date("Y"); $m=$year-2017;?>
                                                @for($i=0;$i<=$m;$i++)
                                                    <option value="{{ $year-$i }}" @if($year-$i==$data['year'])selected @endif>{{ $year-$i }}</option>
                                                @endfor
                                            </select>
                                        </div><div style="float: left;">
                                            <select check-type="required number" class="form-control" name="month"
                                                    id="month">
                                                @for($i=1;$i<13;$i++)
                                                    <option value="{{$i}}" @if($i==$data['month'])selected @endif>{{ $i }}</option>
                                                @endfor
                                            </select></div>
                                       <a href="javascript:void(0)" onclick="javasript:btnsearch({{$data['code']}})"><span class="btn glyphicon glyphicon-search " style="border: 1px solid #b1b7ba;"></span></a>
                                    </div>
                                </div><!-- /.box-tools -->
                            </div><!-- /.box-header -->
                            <div class="box-body no-padding">
                                <table id="tags-table" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th  data-sortable="false"></th>
                                        <th  data-sortable="false">企业名称</th>
                                        <th>企业注册时间</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($company as $item)
                                    <tr>
                                        <td></td>
                                        <td>{{$item->name}}
                                        </td>
                                        <td>{{$item->opening_at}}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div><!-- /.box-body -->
                        </div><!-- /. box -->
                    </div>

                </div></div></div></div>

<script type="text/javascript">
    function btnsearch(code) {
        var year=$("#year").val();
        var  month=$("#month").val();
        window.location.href='/admin/jrb/report/upload/'+code+'/'+ Date.parse(year+'-'+month+'-01')/1000;//

    }

</script>
@endsection
