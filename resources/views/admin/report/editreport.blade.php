@extends('layouts.master')
@section('title')
    <h1>
        {{$data["timetitle"]}} <span> &nbsp;&nbsp;</span><a href="{{route('reportform.export',$report->id)}}"> 报表导出 </a>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
        <li><a href="#">报表管理</a></li>
        <li class="active">上传报表</li>
    </ol>
@endsection
@section('content')
    <script src="{{asset('bootstrap/js/validation.js')}}" type="text/javascript"></script>
    <style type="text/css">td {
            color: rgb(0, 0, 0);
            font-size: 16px;
            font-style: normal;
            text-align: left;
            vertical-align: middle;
            border: 1px solid #222d32;
            line-height: 27.44 pf;
        }

        .title {
            font-size: 20pt;
            text-align: center;
        }

        #valierr {
            font-size: 10px;
            margin-bottom: 0px;
            margin-top: 0;
        }

        .form-group {
            margin-bottom: 1px;
            margin-top: 1px;
        }
    </style>
    <form id="form1" action="{{route('reportform.update',$report->id)}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div id="print" class="row">
            <div class="col-md-12">
                <div class="col-md-1"></div>
                <table style="width: 990px;" width="1118">
                    <colgroup>
                        <col style="width:68.44pf" width="91"/>
                        <col style="width:126.56pf" width="168"/>
                        <col style="width:141.56pf" width="188"/>
                        <col style="width:146.25pf" width="195"/>
                        <col style="width:139.69pf" width="186"/>
                        <col style="width:119.06pf" width="158"/>
                        <col style="width:99.38pf" width="250"/>
                    </colgroup>
                    <tbody>
                    <tr style="height:54.38pf" class="firstRow">
                        <td colspan="7" width="1077" class="title">
                            <b>  {{$data['name'] }}基本报表</b>
                        </td>
                    </tr>
                    <tr style="height:39.38pf">
                        <td colspan="3" width="350">
                            公司： {{$data['name'] }}
                        </td>
                        <td width="195">
                            报送日期：{{date('Y年m月',strtotime($report->dtime))}}
                        </td>
                        <td colspan="3" width="530">
                            &nbsp;数据单位：家、人、万元、户、%
                        </td>
                    </tr>
                    <tr style="height:39.38pf" class="firstRow">
                        <td colspan="7" width="1083" style="text-align: center;">
                            <b> 经营情况</b>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            1
                        </td>
                        <td colspan="2" rowspan="8" width="336">
                            1.&nbsp;&nbsp;财务情况
                        </td>
                        <td colspan="3" width="588">
                            1.1&nbsp;&nbsp;资产总额
                        </td>
                        <td>
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" type="text" id="total_capital" name="total_capital"
                                           check-type="number required" placeholder="资产总额"
                                           value="{{$report->total_capital}}">
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            2
                        </td>
                        <td colspan="3" width="588">
                            &nbsp;&nbsp;1.1.1&nbsp;&nbsp;其中：货币资金
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group ">
                                    <input class="form-control" id="money_capital" name="money_capital"
                                           placeholder="货币资金" type="text" check-type="number required"
                                           value="{{ $report->money_capital}}"/>
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            3
                        </td>
                        <td colspan="3" width="588">
                            &nbsp;&nbsp;1.1.2&nbsp;&nbsp;其中：其他资金运用
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group ">
                                    <input class="form-control" id="other_capital" name="other_capital"
                                           placeholder="其他资金" type="text" check-type="number required"
                                           value="{{ $report->other_capital}}">
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            4
                        </td>
                        <td colspan="3" width="588">
                            1.2&nbsp;&nbsp;负债总额
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input check-type="number required" class="form-control" type="text"
                                           placeholder="负债总额" name="total_debtcapital" id="total_debtcapital"
                                           value="{{ $report->total_debtcapital}}">
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            5
                        </td>
                        <td colspan="3" width="588">
                            1.3&nbsp;&nbsp;实收资本
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required" type="text"
                                           placeholder="实收资本" name="paidup_capital" id="paidup_capital"
                                           value="{{ $report->paidup_capital}}">
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            6
                        </td>
                        <td colspan="3" width="588">
                            1.4&nbsp;&nbsp;营业收入
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required" type="text"
                                           placeholder="营业收入" name="income" id="income" value="{{$report->income}}">
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            7
                        </td>
                        <td colspan="3" width="588">
                            &nbsp;&nbsp;1.4.1&nbsp;&nbsp;其中：贷款利息收入
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group ">
                                    <input class="form-control" check-type="number required"
                                           placeholder="贷款利息收入" name="loan_income" type="text" id="loan_income"
                                           value="{{$report->loan_income}}"/>
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            8
                        </td>
                        <td colspan="3" width="588">
                            1.5&nbsp;&nbsp;净利润
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required" type="text"
                                           placeholder="净利润" name="profit_income" id="profit_income"
                                           value="{{$report->profit_income}}"/>
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            9
                        </td>
                        <td colspan="2" rowspan="52" width="336">
                            2.&nbsp;&nbsp;贷款情况
                        </td>
                        <td colspan="3" width="588">
                            2.1&nbsp;&nbsp;贷款余额
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required" placeholder="贷款余额"
                                           type="text" name="loan_remainder" id="loan_remainder"
                                           value="{{$report->loan_remainder}}">
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:30.00pf">
                        <td width="91">
                            10
                        </td>
                        <td colspan="3" width="588">
                            &nbsp;&nbsp;2.1.1&nbsp;&nbsp;其中：不良贷款余额
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group ">
                                    <input class="form-control" check-type="number required"
                                           placeholder="不良贷款余额" name="bad_remainder" type="text" id="bad_remainder"
                                           value="{{$report->bad_remainder}}">
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            11
                        </td>
                        <td colspan="3" width="588">
                            2.2&nbsp;&nbsp;贷款户数
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="integer required" placeholder="贷款户数"
                                           type="text" name="loan_family" id="loan_family"
                                           value="{{$report->loan_family}}">
                                    <span class="input-group-addon">户</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            12
                        </td>
                        <td colspan="3" width="588">
                            2.3&nbsp;&nbsp;贷款笔数
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="integer required" placeholder="贷款笔数"
                                           value="{{$report->loan_num}}"
                                           type="text" name="loan_num" id="loan_num">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            13
                        </td>
                        <td colspan="2" rowspan="3" width="402">
                            2.4&nbsp;&nbsp;本年内累计发放贷款情况
                        </td>
                        <td width="158">
                            贷款金额
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required" placeholder="本年发放贷款金额"
                                           type="text" name="year_issueloan" id="year_issueloan"
                                           value="{{$report->year_issueloan}}">
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            14
                        </td>
                        <td width="158">
                            贷款户数
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="integer required" placeholder="本年内发放贷款户数"
                                           type="text" name="year_issuefamily" id="year_issuefamily"
                                           value="{{$report->year_issuefamily}}">
                                    <span class="input-group-addon">户</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            15
                        </td>
                        <td width="158">
                            贷款笔数
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="integer required" placeholder="发放贷款笔数"
                                           type="text" name="year_issuenum" id="year_issuenum"
                                           value="{{$report->year_issuenum}}">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            16
                        </td>
                        <td colspan="2" rowspan="3" width="402">
                            2.5&nbsp;本年内累计收回贷款情况
                        </td>
                        <td width="158">
                            贷款金额
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required" placeholder="本年收回贷款金额"
                                           type="text" name="year_backloan" id="year_backloan"
                                           value="{{$report->year_backloan}}">
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            17
                        </td>
                        <td width="158">
                            贷款户数
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="integer required" placeholder="收回贷款户数"
                                           type="text" name="year_backfamily" id="year_backfamily"
                                           value="{{$report->year_backfamily}}">
                                    <span class="input-group-addon">户</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            18
                        </td>
                        <td width="158">
                            贷款笔数
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="integer required" placeholder="收回贷款笔数"
                                           type="text" name="year_backnum" id="year_backnum"
                                           value="{{$report->year_backnum}}">

                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            19
                        </td>
                        <td rowspan="16" width="201">
                            2.6&nbsp;&nbsp;按服务对象划分
                        </td>
                        <td rowspan="4" width="186">
                            2.6.1&nbsp;&nbsp;涉农贷款
                        </td>
                        <td width="158">
                            余额
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required" placeholder="涉农贷款金额"
                                           type="text" name="farmer_loan_remainder" id="farmer_loan_remainder"
                                           value="{{$report->farmer_loan_remainder}}">
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            20
                        </td>
                        <td width="158">
                            户数
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="integer required" placeholder="涉农贷款户数"
                                           type="text" name="farmer_loan_family" id="farmer_loan_family"
                                           value="{{$report->farmer_loan_family}}">
                                    <span class="input-group-addon">户</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            21
                        </td>
                        <td width="158">
                            累计发放金额
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required" placeholder="累计发放金额"
                                           type="text" name="farmer_issue" id="farmer_issue"
                                           value="{{$report->farmer_issue}}">
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            22
                        </td>
                        <td width="158">
                            累计发放户数
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="integer required" placeholder="累计发放户数"
                                           type="text" name="farmer_backnum" id="farmer_backnum"
                                           value="{{$report->farmer_backnum}}">
                                    <span class="input-group-addon">户</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            23
                        </td>
                        <td rowspan="4" width="186">
                            2.6.2&nbsp;&nbsp;小微企业贷款
                        </td>
                        <td width="158">
                            余额
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required" placeholder="涉农贷款金额"
                                           type="text" name="company_loan_remainder" id="company_loan_remainder"
                                           value="{{$report->company_loan_remainder}}">
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            24
                        </td>
                        <td width="158">
                            户数
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type=" required" placeholder="涉农贷款户数" type="text"
                                           name="company_loan_family" id="company_loan_family"
                                           value="{{$report->company_loan_family}}">
                                    <span class="input-group-addon">户</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            25
                        </td>
                        <td width="158">
                            累计发放金额
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required" placeholder="累计发放金额"
                                           type="text" name="company_issue" id="company_issue"
                                           value="{{$report->company_issue}}">
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            26
                        </td>
                        <td width="158">
                            累计发放户数
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="required" placeholder="累计发放户数" type="text"
                                           name="company_backnum" id="company_backnum"
                                           value="{{$report->company_backnum}}">
                                    <span class="input-group-addon">户</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            27
                        </td>
                        <td rowspan="4" width="186">
                            2.6.3&nbsp;&nbsp;涉农及小微贷款合计（剔除重叠部分）
                        </td>
                        <td width="158">
                            余额
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required" placeholder="涉农贷款金额"
                                           type="text" name="total_remainder" id="total_remainder"
                                           value="{{$report->total_remainder}}">
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            28
                        </td>
                        <td width="158">
                            户数
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="integer required" placeholder="涉农贷款户数"
                                           type="text" name="total_loan_family" id="total_loan_family"
                                           value="{{$report->total_loan_family}}">
                                    <span class="input-group-addon">户</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            29
                        </td>
                        <td width="158">
                            累计发放金额
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required" placeholder="累计发放金额"
                                           type="text" name="total_issue" id="total_issue"
                                           value="{{$report->total_issue}}">
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            30
                        </td>
                        <td width="158">
                            累计发放户数
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="integer required" placeholder="累计发放户数"
                                           type="text" name="total_backnum" id="total_backnum"
                                           value="{{$report->total_backnum}}">
                                    <span class="input-group-addon">户</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            31
                        </td>
                        <td rowspan="4" width="186">
                            2.6.4&nbsp;&nbsp;个人贷款
                        </td>
                        <td width="158">
                            余额
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required" placeholder="涉农贷款金额"
                                           type="text" name="person_loan_remainder" id="person_loan_remainder"
                                           value="{{$report->person_loan_remainder}}">
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            32
                        </td>
                        <td width="158">
                            户数
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="integer required" placeholder="涉农贷款户数"
                                           type="text" name="person_loan_family" id="person_loan_family"
                                           value="{{$report->person_loan_family}}">
                                    <span class="input-group-addon">户</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            33<br/>
                        </td>
                        <td width="158">
                            累计发放金额
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required" placeholder="累计发放金额"
                                           type="text" name="person_issue" id="person_issue"
                                           value="{{$report->person_issue}}">
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            34
                        </td>
                        <td width="158">
                            累计发放户数
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="integer required" placeholder="累计发放户数"
                                           type="text" name="person_backnum" id="person_backnum"
                                           value="{{$report->person_backnum}}">
                                    <span class="input-group-addon">户</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            35
                        </td>
                        <td rowspan="8" width="201">
                            2.7&nbsp;&nbsp;按资产质量划分
                        </td>
                        <td rowspan="2" width="186">
                            2.7.1&nbsp;&nbsp;正常贷款
                        </td>
                        <td width="158">
                            余额
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required"
                                           type="text" placeholder="正常贷款余额" name="normal_loan_remainder"
                                           id="normal_loan_remainder" value="{{$report->normal_loan_remainder}}"/>
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            36
                        </td>
                        <td width="158">
                            户数
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="integer required"
                                           type="text" placeholder="正常贷款户数" name="normal_loan_family"
                                           id="normal_loan_family" value="{{$report->normal_loan_family}}"/>
                                    <span class="input-group-addon">户</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            37
                        </td>
                        <td rowspan="2" width="186">
                            2.7.2&nbsp;&nbsp;逾期30天（含）以下
                        </td>
                        <td width="158">
                            余额
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required"
                                           check-type="number required" type="text" placeholder="逾期30天以下贷款余额"
                                           name="month_loan_remainder" id="month_loan_remainder"
                                           value="{{$report->month_loan_remainder}}"/>
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            38
                        </td>
                        <td width="158">
                            户数
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="integer required"
                                           type="text" placeholder="逾期30天以下贷款户数"
                                           name="month_loan_family" id="month_loan_family"
                                           value="{{$report->month_loan_family}}"/>
                                    <span class="input-group-addon">户</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            39
                        </td>
                        <td rowspan="2" width="186">
                            2.7.3&nbsp;&nbsp;逾期30天-90天（含）
                        </td>
                        <td width="158">
                            余额
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required" type="text"
                                           placeholder="逾期30天-90天贷款金额" name="quarter_loan_remainder"
                                           id="quarter_loan_remainder" value="{{$report->quarter_loan_remainder}}"/>
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            40
                        </td>
                        <td width="158">
                            户数
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="integer required" type="text"
                                           placeholder="逾期30天-90天贷款户数" name="quarter_loan_family"
                                           id="quarter_loan_family" value="{{$report->quarter_loan_family}}"/>
                                    <span class="input-group-addon">户</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            41
                        </td>
                        <td rowspan="2" width="186">
                            2.7.4&nbsp;&nbsp;逾期90天以上
                        </td>
                        <td width="158">
                            余额
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required" type="text"
                                           placeholder="逾期30天以下贷款户数" name="ninety_loan_remainder"
                                           id="ninety_loan_remainder" value="{{$report->ninety_loan_remainder}}"/>
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            42
                        </td>
                        <td width="158">
                            户数
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="integer required" type="text"
                                           placeholder="逾期30天以下贷款户数" name="ninety_loan_family" id="ninety_loan_family"
                                           value="{{$report->ninety_loan_family}}"/>
                                    <span class="input-group-addon">户</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            43
                        </td>
                        <td rowspan="3" width="201">
                            2.8&nbsp;利率
                        </td>
                        <td colspan="2" width="372">
                            2.8.1&nbsp;最高利率（折合年化利率）
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required" type="text"
                                           placeholder="最高利率" name="highest_interest" id="highest_interest"
                                           value="{{$report->highest_interest}}"/>
                                    <span class="input-group-addon">%</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            44
                        </td>
                        <td colspan="2" width="372">
                            2.8.2&nbsp;最低利率（折合年化利率）
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required" type="text"
                                           placeholder="最低利率" name="lowest_interest" id="lowest_interest"
                                           value="{{$report->lowest_interest}}"/>
                                    <span class="input-group-addon">%</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:37.50pf">
                        <td width="91">
                            45
                        </td>
                        <td colspan="2" width="372">
                            2.8.3&nbsp;加权平均利率（折合年化利率）
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required" type="text"
                                           placeholder="加权平均利率" name="Average_interest" id="Average_interest"
                                           value="{{$report->Average_interest}}"/>
                                    <span class="input-group-addon">%</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:37.50pf">
                        <td width="91">
                            46
                        </td>
                        <td rowspan="5" width="201">
                            2.9贷款五级分类
                        </td>
                        <td width="186">
                            2.9.1正常类贷款
                        </td>
                        <td width="158">
                            余额
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required" type="text"
                                           placeholder="正常类贷款" name="normal_loan" id="normal_loan"
                                           value="{{$report->normal_loan}}"/>
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:42.50pf">
                        <td width="91">
                            47
                        </td>
                        <td width="186">
                            2.9.2关注类贷款
                        </td>
                        <td width="158">
                            余额
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required" type="text"
                                           placeholder="关注类贷款" name="follow_loan" id="follow_loan"
                                           value="{{$report->follow_loan}}"/>
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:33.75pf">
                        <td width="91">
                            48
                        </td>
                        <td width="186">
                            2.9.3次级类贷款
                        </td>
                        <td width="158">
                            余额
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required" type="text"
                                           placeholder="次级类贷款" name="second_loan" id="second_loan"
                                           value="{{$report->second_loan}}"/>
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:36.25pf">
                        <td width="91">
                            49
                        </td>
                        <td width="186">
                            2.9.4可疑类贷款
                        </td>
                        <td width="158">
                            余额
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required" type="text"
                                           placeholder="可疑类贷款" name="doubt_loan" id="doubt_loan"
                                           value="{{$report->doubt_loan}}"/>
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:37.50pf">
                        <td width="91">
                            50
                        </td>
                        <td width="186">
                            2.9.5损失类贷款
                        </td>
                        <td width="158">
                            余额
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required" type="text"
                                           placeholder="损失类贷款" name="noback_loan" id="noback_loan"
                                           value="{{$report->noback_loan}}"/>
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:28.88pf">
                        <td width="91">
                            51
                        </td>
                        <td rowspan="10" width="201">
                            2.10贷款种类
                        </td>
                        <td rowspan="2" width="186">
                            2.10.1信用贷款
                        </td>
                        <td width="158">
                            余额
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required" type="text"
                                           placeholder="信用贷款金额" name="credit_loan_remainder"
                                           id="credit_loan_remainder" value="{{$report->credit_loan_remainder}}"/>
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:28.88pf">
                        <td width="91">
                            52
                        </td>
                        <td width="158">
                            户数
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group ">
                                    <input class="form-control" check-type="integer required" id="credit_loan_family"
                                           name="credit_loan_family" placeholder="信用贷款户数" type="text"
                                           value="{{$report->credit_loan_family}}">
                                    <span class="input-group-addon">户</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:28.88pf">
                        <td width="91">
                            53
                        </td>
                        <td rowspan="2" width="186">
                            2.10.2保证担保
                        </td>
                        <td width="158">
                            余额
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required" type="text"
                                           placeholder="保证担保金额" name="promise_loan_remainder"
                                           id="promise_loan_remainder" value="{{$report->promise_loan_remainder}}"/>
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:28.88pf">
                        <td width="91">
                            54
                        </td>
                        <td width="158">
                            户数
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group ">
                                    <input class="form-control" check-type="integer required" id="promise_loan_family"
                                           placeholder="保证担保户数" name="promise_loan_family"
                                           value="{{$report->promise_loan_family}}" type="text">
                                    <span class="input-group-addon">户</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:28.88pf">
                        <td width="91">
                            55
                        </td>
                        <td rowspan="2" width="186">
                            2.10.3抵押担保
                        </td>
                        <td width="158">
                            余额
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required" type="text"
                                           placeholder="抵押担保金额" name="mortgage_loan_remainder"
                                           id="mortgage_loan_remainder" value="{{$report->mortgage_loan_remainder}}"/>
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:28.88pf">
                        <td width="91">
                            56
                        </td>
                        <td width="158">
                            户数
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group ">
                                    <input class="form-control" check-type="integer required" id="mortgage_loan_family"
                                           name="mortgage_loan_family" placeholder="抵押担保户数" type="text"
                                           value="{{$report->mortgage_loan_family}}">
                                    <span class="input-group-addon">户</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:28.88pf">
                        <td width="91">
                            57
                        </td>
                        <td rowspan="2" width="186">
                            2.10.4质押担保
                        </td>
                        <td width="158">
                            余额
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required" type="text"
                                           placeholder="质押担保金额" name="pledge_loan_remainder"
                                           value="{{$report->pledge_loan_remainder}}"
                                           id="pledge_loan_remainder"/>
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:28.88pf">
                        <td width="91">
                            58
                        </td>
                        <td width="158">
                            户数
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group ">
                                    <input class="form-control" check-type="integer required" id="pledge_loan_family"
                                           name="pledge_loan_family" placeholder="质押担保户数" type="text"
                                           value="{{$report->pledge_loan_family}}">
                                    <span class="input-group-addon">户</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="91">
                            59
                        </td>
                        <td rowspan="2" width="186">
                            2.10.5其他方式
                        </td>
                        <td width="158">
                            余额
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required" type="text"
                                           placeholder="其他方式" name="other_loan_remainder" id="other_loan_remainder"
                                           value="{{$report->other_loan_remainder}}"/>
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>

                        </td>
                    </tr>
                    <tr style="height:26.25pf">
                        <td width="91">
                            60
                        </td>
                        <td width="158">
                            户数
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group ">
                                    <input class="form-control" check-type="integer required" id="other_loan_family"
                                           name="other_loan_family" placeholder="其他方式户数" type="text"
                                           value="{{$report->other_loan_family}}">
                                    <span class="input-group-addon">户</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            61
                        </td>
                        <td colspan="2" rowspan="8" width="336">
                            3.&nbsp;&nbsp;融入资金金额
                        </td>
                        <td colspan="3" width="588">
                            3.1&nbsp;&nbsp;银行融资
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required" placeholder="银行融资"
                                           name="bank_financing" type="text" id="bank_financing"
                                           value="{{$report->bank_financing}}">
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            62
                        </td>
                        <td colspan="3" width="588">
                            3.2&nbsp;&nbsp;股东借款
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required" placeholder="股东借款"
                                           type="text" name="shareholder_loan" id="shareholder_loan"
                                           value="{{$report->shareholder_loan}}">
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            63
                        </td>
                        <td colspan="3" width="588">
                            3.3&nbsp;&nbsp;资产、资产收益权转让
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required" placeholder="资产、资产收益权转让"
                                           name="profit_transfer" type="text" id="profit_transfer"
                                           value="{{$report->profit_transfer}}">
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            64
                        </td>
                        <td colspan="3" width="588">
                            3.4&nbsp;&nbsp;债券、票据（包括私募债）
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required" placeholder="债券、票据(包括私募债)"
                                           type="text" name="bond_bill" id="bond_bill" value="{{$report->bond_bill}}">
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            65
                        </td>
                        <td colspan="3" width="588">
                            3.5&nbsp;&nbsp;小贷公司同业拆借、小额再贷款
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required"
                                           placeholder="小贷公司同业拆借、小额再贷款" type="text" name="parterner_loan"
                                           value="{{$report->parterner_loan}}"
                                           id="parterner_loan">
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            66
                        </td>
                        <td colspan="3" width="588">
                            3.6&nbsp;&nbsp;资产证券化
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required" placeholder="资产证券化"
                                           type="text" name="securitisation" id="securitisation"
                                           value="{{$report->securitisation}}">
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            67
                        </td>
                        <td colspan="3" width="588">
                            3.7&nbsp;&nbsp;资本市场挂牌
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required" placeholder="资本市场挂牌"
                                           type="text" name="market_capital" id="market_capital"
                                           value="{{$report->market_capital}}">
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            68
                        </td>
                        <td colspan="3" width="588">
                            3.8&nbsp;&nbsp;其他（分别填报类型及金额）
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" placeholder="其他融资类型" type="text"
                                           name="othertype_capital" id="othertype_capital"
                                           value="{{$report->othertype_capital}}">
                                </div>
                                <div class="input-group">
                                    <input class="form-control" placeholder="其他融资金额" type="text" name="othermoney"
                                           id="othermoney" value="{{$report->othermoney}}">
                                    <span class="input-group-addon">万元</span>

                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            69
                        </td>
                        <td colspan="2" rowspan="2" width="336">
                            4.&nbsp;&nbsp;税务情况
                        </td>
                        <td colspan="3" width="588">
                            4.1&nbsp;&nbsp;今年内累计纳税支出
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required" placeholder="今年内累计纳税支出"
                                           type="text" name="paytaxes" id="paytaxes" value="{{$report->paytaxes}}">
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td width="91">
                            70
                        </td>
                        <td colspan="3" width="588">
                            &nbsp;&nbsp;4.1.1&nbsp;&nbsp;其中：年内累计所得税支出
                        </td>
                        <td width="132">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" check-type="number required" placeholder="累计所得税支出"
                                           type="text" name="incometax" id="incometax" value="{{$report->incometax}}">
                                    <span class="input-group-addon">万元</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr style="height:56.25pf">
                        <td width="91">
                            71
                        </td>
                        <td width="168" colspan="2">
                            5.&nbsp;&nbsp;注释及说明
                        </td>
                        <td colspan="4" width="746">
                            <div class="form-group">
                              <textarea class="form-control" rows="3" id="description" name="description"
                                        placeholder="注释及说明">{{$report->description}}</textarea>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div style="text-align: center">
            <div class="box-footer">
                <button type="submit" id="btnsubmit" class="btn btn-primary">提交</button> &nbsp;&nbsp;
                <a onclick="javascript:webprint();" href="#" class="btn btn-primary">打印</a>
            </div>
        </div>
        <input type="hidden" name="dtime" id="dtime" value="{{$data['dtime']}}">
    </form>
    <script src="{{asset('js/printThis.js')}}" type="text/javascript"></script>

    <script>
        $(function () {
            var $inp = jQuery('input:text');
            $inp.bind('keydown', function (e) {
                var key = e.which;
                if (key == 13) {
                    e.preventDefault();
                    var nxtIdx = $inp.index(this) + 1;
                    jQuery(":input:text:eq(" + nxtIdx + ")").focus();
                }
            });

            var num = $("[check-type*='number']");
            num.keyup(function () {
                $(this).val($(this).val().replace(/^(\-)*(\d+)\.(\d\d).*$/,'$1$2.$3'));
            })
        });

        function webprint() {
            $('#print').printThis({
                importStyle: "true",
                pageTitle: "{{$data["timetitle"]}}",
                loadCss: "/dist/css/AdminLTE.min.css"
            });

        }

        function equal(numa, numb) {
            return Math.abs(numa - numb) < 0.0000001;
        }

        $(function () {
            $("#form1").validation({
                ignore: "#incometax"
            });
            $("#btnsubmit").on('click', function (event) {
                //加权平均值需在最大和最小值之间
                if (Number($("#Average_interest").val().replace(/,/g, '')) < Number($("#lowest_interest").val().replace(/,/g, ''))) {
                    $.alert("加权平均利率不能小于最低利率！");
                    return false;
                }
                if (Number($("#Average_interest").val().replace(/,/g, '')) > Number($("#highest_interest").val().replace(/,/g, ''))) {
                    $.alert("加权平均利率不能大于最高利率！");
                    return false;
                }

                //实收资本金等于公司注册资金
                if (!equal(Number($("#paidup_capital").val().replace(/,/g, '')), Number("{{$data['reg_capital']}}"))) {
                    $.alert("实收资本需和公司注册资本金相同！");
                    return false;
                }

                //货币资金不能大于资产总额
                if (Number($("#total_capital").val().replace(/,/g, '')) < Number($("#money_capital").val().replace(/,/g, ''))) {
                    $.alert("货币资金不能大于资产总额！");
                    return false;
                }

                //其他资产不能大于资产总额
                if (Number($("#total_capital").val().replace(/,/g, '')) < Number($("#other_capital").val().replace(/,/g, ''))) {
                    $.alert("其他资产不能大于资产总额！");
                    return false;
                }

                //货币资金不能大于实收资本
                if (Number($("#paidup_capital").val().replace(/,/g, '')) < Number($("#money_capital").val().replace(/,/g, ''))) {
                    $.alert("货币资金不能大于实收资本！");
                    return false;
                }

                //不良贷款余额不能大于贷款余额
                if (Number($("#loan_remainder").val().replace(/,/g, '')) < Number($("#bad_remainder").val().replace(/,/g, ''))) {
                    $.alert("不良贷款余额不能大于贷款余额！");
                    return false;
                }

                //贷款余额不能大于资产总额
//                if (Number($("#total_capital").val().replace(/,/g, '')) < Number($("#loan_remainder").val().replace(/,/g, ''))) {
//                    $.alert("贷款余额不能大于资产总额！");
//                    return false;
//                }

                loan_remainder = Number($("#loan_remainder").val().replace(/,/g, ''));
                loan_family = Number($("#loan_family").val().replace(/,/g, ''));
                loan_num = Number($("#loan_num").val().replace(/,/g, ''));
                year_issueloan = Number($("#year_issueloan").val().replace(/,/g, ''));
                year_issuefamily = Number($("#year_issuefamily").val().replace(/,/g, ''));
                year_issuenum = Number($("#year_issuenum").val().replace(/,/g, ''));
                year_backloan = Number($("#year_backloan").val().replace(/,/g, ''));
                year_backfamily = Number($("#year_backfamily").val().replace(/,/g, ''));
                year_backnum = Number($("#year_backnum").val().replace(/,/g, ''));


                if ("{{$data['old_loan_remainder']}}" != "") {
                    sum_loan_remainder = {{$data['old_loan_remainder']}} + year_issueloan - year_backloan;
                    if (!equal(sum_loan_remainder, loan_remainder)) {
                        $.alert("贷款余额需等于年初贷款余额+本年内累计发放贷款金额-本年内累计收回贷款金额");
                        return false;
                    }
                }


                if ("{{$data['old_loan_num']}}" != "") {
                    sum_loan_num = {{$data['old_loan_num']}} + year_issuenum - year_backnum;
                    if (!equal(sum_loan_num, loan_num)) {
                        $.alert("贷款笔数需等于年初贷款笔数+本年内累计发放贷款笔数-本年内累计收回贷款笔数");
                        return false;
                    }
                }

                loan_remainder_s1 = Number($("#farmer_loan_remainder").val().replace(/,/g, '')) +
                    Number($("#company_loan_remainder").val().replace(/,/g, '')) + Number($("#person_loan_remainder").val().replace(/,/g, ''));
                loan_family_s1 = Number($("#farmer_loan_family").val().replace(/,/g, '')) +
                    Number($("#company_loan_family").val().replace(/,/g, '')) + Number($("#person_loan_family").val().replace(/,/g, ''));
                year_issueloan_s1 = Number($("#farmer_issue").val().replace(/,/g, '')) +
                    Number($("#company_issue").val().replace(/,/g, '')) + Number($("#person_issue").val().replace(/,/g, ''));
                year_issuefamily_s1 = Number($("#farmer_backnum").val().replace(/,/g, '')) +
                    Number($("#company_backnum").val().replace(/,/g, '')) + Number($("#person_backnum").val().replace(/,/g, ''));

                if (!equal(loan_remainder, loan_remainder_s1)) {
                    $.alert("贷款余额需等于涉农贷款、小微企业贷款、个人贷款余额的和");
                    return false;
                }
                if (!equal(loan_family, loan_family_s1)) {
                    $.alert("贷款户数需等于涉农贷款、小微企业贷款、个人贷款户数的和");
                    return false;
                }
                if (!equal(year_issueloan, year_issueloan_s1)) {
                    $.alert("本年内累计发放贷款余额需等于涉农贷款、小微企业贷款、个人贷款累计发放金额的和");
                    return false;
                }
                if (!equal(year_issuefamily, year_issuefamily_s1)) {
                    $.alert("本年内累计发放贷款户数需等于涉农贷款、小微企业贷款、个人贷款累计发放户数的和");
                    return false;
                }

                loan_remainder_s2 = Number($("#normal_loan_remainder").val().replace(/,/g, '')) + Number($("#month_loan_remainder").val().replace(/,/g, '')) +
                    Number($("#quarter_loan_remainder").val().replace(/,/g, '')) + Number($("#ninety_loan_remainder").val().replace(/,/g, ''));
                loan_family_s2 = Number($("#normal_loan_family").val().replace(/,/g, '')) + Number($("#month_loan_family").val().replace(/,/g, '')) +
                    Number($("#quarter_loan_family").val().replace(/,/g, '')) + Number($("#ninety_loan_family").val().replace(/,/g, ''));

                if (!equal(loan_remainder, loan_remainder_s2)) {
                    $.alert("贷款余额需等于按资产质量划分余额的和");
                    return false;
                }
                if (!equal(loan_family, loan_family_s2)) {
                    $.alert("贷款户数需等于按资产质量划分户数的和");
                    return false;
                }

                loan_remainder_s3 = Number($("#normal_loan").val().replace(/,/g, '')) + Number($("#follow_loan").val().replace(/,/g, '')) +
                    Number($("#second_loan").val().replace(/,/g, '')) + Number($("#doubt_loan").val().replace(/,/g, '')) + Number($("#noback_loan").val().replace(/,/g, ''));

                if (!equal(loan_remainder, loan_remainder_s3)) {
                    $.alert("贷款余额需等于贷款五级分类余额的和");
                    return false;
                }

                loan_remainder_s4 = Number($("#credit_loan_remainder").val().replace(/,/g, '')) + Number($("#promise_loan_remainder").val().replace(/,/g, '')) +
                    Number($("#mortgage_loan_remainder").val().replace(/,/g, '')) + Number($("#pledge_loan_remainder").val().replace(/,/g, '')) + Number($("#other_loan_remainder").val().replace(/,/g, ''));
                loan_family_s4 = Number($("#credit_loan_family").val().replace(/,/g, '')) + Number($("#promise_loan_family").val().replace(/,/g, '')) +
                    Number($("#mortgage_loan_family").val().replace(/,/g, '')) + Number($("#pledge_loan_family").val().replace(/,/g, '')) + Number($("#other_loan_family").val().replace(/,/g, ''));

                if (!equal(loan_remainder, loan_remainder_s4)) {
                    $.alert("贷款余额需等于贷款种类余额的和");
                    return false;
                }
                if (!equal(loan_family, loan_family_s4)) {
                    $.alert("贷款户数需等于贷款种类户数的和");
                    return false;
                }

                // 2.最后要调用 valid()方法。
                if ($("#form1").valid() == false) {
                    $.alert("请正确输入必填项");
                    return false;
                }
                return true;
            });
        });


    </script>
@endsection