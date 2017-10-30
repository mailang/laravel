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

    <form id="form" action="/admin/company" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">公司基本信息</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <div class="box-body form-horizontal">

                        <div class="form-group">
                            <label for="total_capital" class="col-sm-4 control-label">公司名称:</label>
                            <div class="col-sm-4">

                                    <input class="form-control" type="text" id="name" name="name"
                                           placeholder="公司名称">

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="money_capital" class="col-sm-4 control-label">社会信用代码:</label>
                            <div class=" col-sm-4">

                                    <input class="form-control" id="code" name="code"
                                           placeholder="社会信用代码" type="text">

                            </div>

                        </div>
                        <div class="form-group">
                            <label for="other_capital" class="col-sm-4 control-label">开业时间:</label>
                            <div class=" col-sm-4">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar">
                                        </i>
                                    </div>
                                    <input class="form-control pull-right" id="opening_at" name="opening_at"
                                           placeholder="开业时间" type="text">
                                </div>
                            </div>
                        </div>
                        <script language="JavaScript">
                            $(function () {
                                $('#opening_at').datepicker({
                                    language: "zh-CN",
                                    autoclose: true,
                                    format: "yyyy-mm-dd"
                                })
                            });
                        </script>


                        <div class="form-group">
                            <label for="total_debtcapital" class="col-sm-4 control-label">所属地区:</label>
                            <div class="col-sm-4">

                                <div class="row">
                                    <div class="col-lg-4">
                                        <select class="form-control" name="areacode0" id="areacode0"></select>
                                    </div>
                                    <div class="col-lg-4">
                                        <select class="form-control" name="areacode1" id="areacode1"></select>
                                    </div>
                                    <div class="col-lg-4">
                                        <select class="form-control" name="areacode2" id="areacode2"></select>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="paidup_capital" class="col-sm-4 control-label">经营地址:</label>
                            <div class="col-sm-4">

                                    <input class="form-control" type="text" placeholder="经营地址" name="address"
                                           id="address">

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="paidup_capital" class="col-sm-4 control-label">联系电话:</label>
                            <div class="col-sm-4">

                                    <input class="form-control" type="text" placeholder="联系电话" name="tel"
                                           id="tel">

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="profit_income" class="col-sm-4 control-label">手机号:</label>
                            <div class="col-sm-4">

                                    <input class="form-control" type="text" placeholder="手机号" name="phone"
                                           id="phone"/>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="profit_income" class="col-sm-4 control-label">注册资本金:</label>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="注册资本金" name="reg_capital"
                                           id="reg_capital"/>
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="profit_income" class="col-sm-4 control-label">法人代表:</label>
                            <div class="col-sm-4">

                                    <input class="form-control" type="text" placeholder="法人代表" name="legal_person"
                                           id="legal_person"/>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="profit_income" class="col-sm-4 control-label">董事长:</label>
                            <div class="col-sm-4">

                                    <input class="form-control" type="text" placeholder="董事长" name="chairman"
                                           id="chairman"/>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="profit_income" class="col-sm-4 control-label">总经理:</label>
                            <div class="col-sm-4">

                                    <input class="form-control" type="text" placeholder="总经理" name="manager"
                                           id="manager"/>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="profit_income" class="col-sm-4 control-label">业务范围:</label>
                            <div class="col-sm-4">

                                    <textarea class="form-control" type="text" placeholder="业务范围" name="scope"
                                              id="scope"></textarea>

                            </div>
                        </div>
                        <div class="form-group">县区
                            <label for="profit_income" class="col-sm-4 control-label">注册资本构成:</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="type" id="type">
                                <option value="0">国有控股</option>
                                <option value="1">民营控股</option>
                                <option value="2">外资控股</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="profit_income" class="col-sm-4 control-label">业务开展范围:</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="bus_area" id="bus_area">
                                <option value="0">县区</option>
                                <option value="1">市</option>
                                <option value="2">省</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="profit_income" class="col-sm-4 control-label">分支机构数量:</label>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="分支机构数量" name="branch_num"
                                           id="branch_num"/>
                                    <span class="input-group-addon">个</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="profit_income" class="col-sm-4 control-label">从业人员数量:</label>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="从业人员数量" name="p_num"
                                           id="p_num"/>
                                    <span class="input-group-addon">个</span>
                                </div>
                            </div>
                        </div>

                    </div><!-- /.box-body -->
                </div><!-- /.box -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">提交</button>
                </div>
            </div><!--/.col (right) -->
        </div>

        </div>
    </form>

@endsection