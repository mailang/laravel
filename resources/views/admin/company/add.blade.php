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
    <script src="{{asset('bootstrap/js/validation.js')}}" type="text/javascript"></script>
    <form id="form" class="form-horizontal" action="/admin/company" method="post" onsubmit="return toVaild()">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">请完善公司详细信息</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <div class="box-body form-horizontal">
                        <div class="form-group">
                            <label for="total_capital" class="col-sm-4 control-label">公司名称（全称）:</label>
                            <div class="col-sm-4">
                                <input check-type="required" class="form-control" type="text" id="name" name="name"
                                       placeholder="公司名称" check-type="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="total_capital" class="col-sm-4 control-label">联系人:</label>
                            <div class="col-sm-4">
                                <input check-type="required" class="form-control" type="text" id="contacts" name="contacts"
                                       placeholder="联系人">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="money_capital" class="col-sm-4 control-label">社会信用代码:</label>
                            <div class=" col-sm-4">
                                <input check-type="required" class="form-control" id="code" name="code"
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
                                    <input check-type="required date" class="form-control pull-right" id="opening_at"
                                           name="opening_at"
                                           placeholder="开业时间" type="text" data-date-end-date="0d">
                                </div>
                            </div>
                        </div>
                        <script language="JavaScript">
                            $(function () {
                                $('#opening_at').datepicker({
                                    language: "zh-CN",
                                    autoclose: true,
                                    format: "yyyy-mm-dd",
                                    todayBtn: true,
                                    todayHighlight: true


                                })
                            });
                        </script>


                        <div class="form-group">
                            <label for="total_debtcapital" class="col-sm-4 control-label">所属地区:</label>
                            <div class="col-sm-4">

                                <div class="row">
                                    <div class="col-lg-4">
                                        <select check-type="required number" class="form-control" name="areacode0"
                                                id="areacode0">
                                            <option>--请选择--</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <select check-type="required number" class="form-control" name="areacode1"
                                                id="areacode1">
                                            <option>--请选择--</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <select check-type="required number" class="form-control" name="areacode2"
                                                id="areacode2">
                                            <option>--请选择--</option>
                                        </select>
                                    </div>
                                </div>
                                <script language="JavaScript">
                                    $(function () {
                                        var ac = eval({!! $areacode !!});

                                        function refeshselect($o, pcode) {
                                            var p = $.Enumerable.From(ac).Where("x=>x.pcode=='" + pcode + "'").ToArray();
                                            $.each(p, function () {
                                                // ...
                                                $o.append("<option value='" + this.areacode + "'>" + this.name + "</option>");
                                            });
                                        }

                                        refeshselect($("#areacode0"), "000000");
                                        $("#areacode0").change(function () {
                                            $("#areacode1 option:gt(0)").remove();
                                            $("#areacode2 option:gt(0)").remove();
                                            refeshselect($("#areacode1"), $("#areacode0").val());
                                        });

                                        $("#areacode1").change(function () {
                                            $("#areacode2 option:gt(0)").remove();
                                            refeshselect($("#areacode2"), $("#areacode1").val());
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="paidup_capital" class="col-sm-4 control-label">经营地址:</label>
                            <div class="col-sm-4">
                                <input class="form-control" check-type="required" type="text" placeholder="经营地址"
                                       name="address"
                                       id="address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="paidup_capital" class="col-sm-4 control-label">联系电话:</label>
                            <div class="col-sm-4">
                                <input class="form-control" check-type="required" type="text" placeholder="联系电话"
                                       name="tel"
                                       id="tel">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="profit_income" class="col-sm-4 control-label">手机号:</label>
                            <div class="col-sm-4">

                                <input check-type="mobile required" class="form-control" type="text" placeholder="手机号"
                                       name="phone"
                                       id="phone"/>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="profit_income" class="col-sm-4 control-label">注册资本金:</label>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <input check-type="number required" class="form-control" type="text"
                                           placeholder="注册资本金" name="reg_capital"
                                           id="reg_capital"/>
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="profit_income" class="col-sm-4 control-label">法人代表:</label>
                            <div class="col-sm-4">
                                <input check-type="required" class="form-control" type="text" placeholder="法人代表"
                                       name="legal_person"
                                       id="legal_person"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="profit_income" class="col-sm-4 control-label">董事长:</label>
                            <div class="col-sm-4">
                                <input check-type="required" class="form-control" type="text" placeholder="董事长"
                                       name="chairman"
                                       id="chairman"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="profit_income" class="col-sm-4 control-label">总经理:</label>
                            <div class="col-sm-4">
                                <input check-type="required" class="form-control" type="text" placeholder="总经理"
                                       name="manager"
                                       id="manager"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="profit_income" class="col-sm-4 control-label">业务开展区域:</label>
                            <div id="scoplist" class="col-sm-4">
                                <input type="checkbox" value="发放小额贷款" id="1st"><label for="1st"> 发放小额贷款</label>
                                <input type="checkbox" value="票据贴现业务"  id="2nd"><label for="2nd"> 票据贴现业务</label>
                                <input type="checkbox" value="信托代理" id="3rd"><label for="3rd"> 信托代理</label><input type="checkbox" value="发行私募债" id="7th"><label for="7th"> 发行私募债</label>
                                <br>
                                <input type="checkbox" value="向大股东定向借款" id="4th"><label for="4th"> 向大股东定向借款</label>
                                <input type="checkbox" value="与符合条件的金融机构开展资产转让业务" id="5th"><label for="5th"> 与符合条件的金融机构开展资产转让业务</label>
                                <input type="checkbox" value="部分资产收益权转让" id="6th"><label for="6th"> 部分资产收益权转让</label>
                                <input type="checkbox" value="其他经省金融办批准业务" id="8th"><label for="8th"> 其他经省金融办批准业务</label>
                                <input type="hidden" value=""  name="scope" id="scope">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="profit_income" class="col-sm-4 control-label">注册资本构成:</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="type" id="type" check-type="required number">
                                    <option>--请选择--</option>
                                    <option value="0">国有控股</option>
                                    <option value="1">民营控股</option>
                                    <option value="2">外资控股</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="profit_income" class="col-sm-4 control-label">业务开展范围:</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="bus_area" id="bus_area" check-type="required number">
                                    <option>--请选择--</option>
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
                                    <input check-type="integer required" class="form-control" type="text"
                                           placeholder="分支机构数量" name="branch_num"
                                           id="branch_num"/>
                                    <span class="input-group-addon">个</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="profit_income" class="col-sm-4 control-label">从业人员数量:</label>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <input check-type="integer required" class="form-control" type="text"
                                           placeholder="从业人员数量" name="p_num"
                                           id="p_num"/>
                                    <span class="input-group-addon">个</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="profit_income" class="col-lg-4 control-label">股东情况：</label>
                                <button type="button" class="btn btn-primary addlp">
                                    <span class="glyphicon glyphicon-plus"></span>增加
                                </button>
                            </div>
                        </div>
                        <div class="form-group lpcontent">

                        </div>

                        <script language="javascript">
                            function toDecimal(x) {
                                var f = parseFloat(x);
                                if (isNaN(f)) {
                                    return;
                                }
                                f = Math.round(x * 100) / 100;
                                return f;
                            }

                            $(".addlp").click(function () {
                                var html = '                       <div class="row margin lprow">\n' +
                                    '                                <label for="profit_income" class="col-sm-3 control-label">姓名或公司名称:</label>\n' +
                                    '                                <div class="col-sm-2">\n' +
                                    '                                    <div class="input-group">\n' +
                                    '                                        <input check-type="required" class="form-control lp_name" type="text" placeholder="姓名" name="lp_name"\n' +
                                    '                                               id="lp_name"/>\n' +
                                    '                                    </div>\n' +
                                    '                                </div>\n' +
                                    '                                <label for="profit_income" class="col-sm-1 control-label">股本金额:</label>\n' +
                                    '                                <div class="col-sm-2">\n' +
                                    '                                    <div class="input-group">\n' +
                                    '                                        <input check-type="required number" class="form-control lp_money" type="text" placeholder="股份金额" name="lp_money"\n' +
                                    '                                               id="lp_money"/>\n' +
                                    '                                        <span class="input-group-addon">万元</span>\n' +
                                    '                                    </div>\n' +
                                    '                                </div>\n' +
                                    '                                <div>\n' +
                                    '                                <label for="profit_income" class="col-sm-1 control-label">股权比例:</label>\n' +
                                    '                                <div class="col-sm-2">\n' +
                                    '                                    <div class="input-group">\n' +
                                    '                                        <input check-type="required number" class="form-control lp_equity" type="text" placeholder="股权比例" name="lp_equity"\n' +
                                    '                                               id="lp_equity"/>\n' +
                                    '                                        <span class="input-group-addon">%</span>\n' +
                                    '                                    </div>\n' +
                                    '                                </div>\n' +
                                    '                                <div>\n' +
                                    '                                    <button type="button" class="btn btn-primary sublp">\n' +
                                    '                                        <span class="glyphicon glyphicon-minus"></span>删除\n' +
                                    '                                    </button>\n' +
                                    '                                </div>\n' +
                                    '                            </div>';
                                $(".lpcontent").append(html);
                                $(".sublp").click(function () {
                                    $(this).parents(".lprow").remove();

                                });
                                $(".lp_money").change(function () {
                                    var equity = toDecimal($(this).val() * 100 / $("#reg_capital").val());
                                    $(this).parents(".lprow").find(".lp_equity").val(equity);
                                });
                            });
                        </script>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
                <input type="hidden" name="areacode" id="areacode"/>
                <input type="hidden" name="shareholder" id="shareholder"/>
                <input type="hidden" name="uid" id="uid" value="{{Auth::user()->id}}"/>
                <div class="box-footer"><label class="col-lg-4 control-label">&nbsp;</label>
                    <button type="submit" id="btnsubmit" class="btn btn-primary">提交</button>
                </div>

            </div>
            <script language="javascript">
                $(function () {
                    var $inp = $('input:text');
                    $inp.bind('keydown', function (e) {
                        var key = e.which;
                        if (key == 13) {
                            e.preventDefault();
                            var nxtIdx = $inp.index(this) + 1;
                            jQuery(":input:text:eq(" + nxtIdx + ")").focus();
                        }
                    });
                });
                function toVaild() {
                    var areacode = $("#areacode2").val();
                    if (areacode == "--请选择--") {
                        $.alert("请选择所在地区");
                        return false;
                    }
                    $("#areacode").val(areacode);

                    var arr = new Array();
                    $(".lprow").each(function () {
                        var sh = new Object();
                        sh.name = $(this).find(".lp_name").val();
                        sh.money = $(this).find(".lp_money").val();
                        sh.equity = $(this).find(".lp_equity").val();
                        arr.push(sh);
                    });
                    var sltype = $("#type").val();
                    var slbus_area = $("#bus_area").val();
                    if (sltype == null || sltype == "--请选择--") {
                        $.alert("请选择注册资本构成");
                        return false;
                    }
                    if (slbus_area == null || slbus_area == "--请选择--") {
                        $.alert("请选择业务开展范围");
                        return false;
                    }
                    var jsonstr = $.toJSON(arr);
                    if (jsonstr == "[]") {
                        $.alert("请添加股东信息");
                        return false;
                    }
                    $("#shareholder").val(jsonstr);

                    //股东股本金额相加等于注册资本金
                    var alllp_money = 0;
                    $(".lp_money").each(function () {
                        alllp_money += Number($(this).val());
                    });

                    if(!equal($("#reg_capital").val(),alllp_money))
                    {
                        $.alert("股本金额填写错误！");
                        return false;
                    }
                    var s="";
                    $("#scoplist input:checkbox:checked").each(function () {
                        s+=$(this).val()+"|";
                    });
                    if(s=="")   {$.alert("业务范围至少选择一项！");
                        return false;}else $("#scope").val(s);
                    return true;
                }

                function equal(numa,numb){
                    return Math.abs(numa - numb) < 0.0000001;
                }

                $(function () {
                    $("#form").validation();
                    $("#opening_at").change(function () {
                        $(this).validateFieldsingle();
                    });
                    $("#btnsubmit").on('click', function (event) {
                        // 2.最后要调用 valid()方法。
                        if ($("#form").valid() == false) {
                            //$(".modal-body").text("请正确输入必填项");
                            //$("#myModal").modal('show');
                            $.alert("请正确输入必填项");
                            return false;
                        }
                    });
                });
            </script>
        </div>
    </form>


@endsection