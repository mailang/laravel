@extends('layouts.master')
@section('title')
    <h1>
        <a href="{{url()->previous()}}">返回</a> <span> &nbsp;&nbsp;</span> <a href="{{route('reportform.export',$report->id)}}"> 报表导出 </a>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
        <li><a href="#">报表管理</a></li>
        <li class="active">上传报表</li>
    </ol>
@endsection
@section('content')

    <form id="form">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="row">
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
                        <col style="width:99.38pf" width="132"/>
                    </colgroup>
                    <tbody>
                    <tr style="height:54.38pf" class="firstRow">
                        <td colspan="7" style="font-size: 20pt; font-weight: 700; text-align: center; vertical-align: middle; height: 54pt; width: 879.75pt;" width="1077">
                            {{$company->name}}基本报表
                        </td>
                    </tr>
                    <tr style="height:39.38pf">
                        <td colspan="3" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: left; vertical-align: middle;border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="350">
                            公司：{{$company->name}}
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: left; vertical-align: middle;border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="195">
                            报送日期：{{date('Y年m月',strtotime($report->dtime))}}
                        </td>
                        <td colspan="3" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: right; vertical-align: middle;border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="530">
                            &nbsp;数据单位：家、人、万元、户、%
                        </td>
                    </tr>
                    <tr style="height:39.38pf" class="firstRow">
                        <td colspan="7" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 700; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="1083">
                            经营情况
                        </td>
                    </tr>

                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            1
                        </td>
                        <td colspan="2" rowspan="8" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="336">
                            3.&nbsp;&nbsp;财务情况
                        </td>
                        <td colspan="3" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="588">
                            3.1&nbsp;&nbsp;资产总额
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->total_capital}}<br/>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            2
                        </td>
                        <td colspan="3" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: left; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="588">
                            &nbsp;&nbsp;3.1.1&nbsp;&nbsp;其中：货币资金
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            &nbsp;{{ $report->money_capital}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            3
                        </td>
                        <td colspan="3" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: left; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="588">
                            &nbsp;&nbsp;3.1.2&nbsp;&nbsp;其中：其他资金运用
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->other_capital}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            4
                        </td>
                        <td colspan="3" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="588">
                            3.2&nbsp;&nbsp;负债总额
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            &nbsp;{{ $report->total_debtcapital}}&nbsp;
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            5
                        </td>
                        <td colspan="3" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: left; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="588">
                            3.3&nbsp;&nbsp;实收资本
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->paidup_capital}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            6
                        </td>
                        <td colspan="3" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="588">
                            3.4&nbsp;&nbsp;营业收入
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->income}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            7
                        </td>
                        <td colspan="3" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="588">
                            &nbsp;&nbsp;3.4.1&nbsp;&nbsp;其中：贷款利息收入
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            &nbsp;{{ $report->loan_income}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            8
                        </td>
                        <td colspan="3" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="588">
                            3.5&nbsp;&nbsp;净利润
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->profit_income}}&nbsp;
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            9
                        </td>
                        <td colspan="2" rowspan="52" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="336">
                            4.&nbsp;&nbsp;贷款情况
                        </td>
                        <td colspan="3" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: left; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="588">
                            4.1&nbsp;&nbsp;贷款余额
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->loan_remainder}}
                        </td>
                    </tr>
                    <tr style="height:30.00pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            10
                        </td>
                        <td colspan="3" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: left; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="588">
                            &nbsp;&nbsp;4.1.1&nbsp;&nbsp;其中：不良贷款余额
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->bad_remainder}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            11
                        </td>
                        <td colspan="3" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="588">
                            4.2&nbsp;&nbsp;贷款户数
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->loan_family}}&nbsp;
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            12
                        </td>
                        <td colspan="3" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="588">
                            4.3&nbsp;&nbsp;贷款笔数
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->loan_num}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            13
                        </td>
                        <td colspan="2" rowspan="3" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="402">
                            4.4&nbsp;&nbsp;本年内累计发放贷款情况
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            贷款金额
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->year_issueloan}}&nbsp;
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            14
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            贷款户数
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->year_issuefamily}}&nbsp;
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            15
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            贷款笔数
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->year_issuenum}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            16
                        </td>
                        <td colspan="2" rowspan="3" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="402">
                            4.5&nbsp;本年内累计收回贷款情况
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            贷款金额
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->year_backloan}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            17
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            贷款户数
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->year_backfamily}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            18
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            贷款笔数
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            &nbsp; {{ $report->year_backnum}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            19
                        </td>
                        <td rowspan="16" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="201">
                            4.7&nbsp;&nbsp;按服务对象划分
                        </td>
                        <td rowspan="4" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: left; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="186">
                            4.7.1&nbsp;&nbsp;涉农贷款
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            余额
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->farmer_loan_remainder}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            20
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            户数
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->farmer_loan_family}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            21
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            累计发放金额
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            &nbsp;{{ $report->farmer_issue}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            22
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            累计发放户数
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            &nbsp;{{ $report->farmer_backnum}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            23
                        </td>
                        <td rowspan="4" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: left; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="186">
                            4.7.2&nbsp;&nbsp;小微企业贷款
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            余额
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->company_loan_remainder}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            24
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            户数
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->company_loan_family}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            25
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            累计发放金额
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->company_issue}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            26
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            累计发放户数
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->company_backnum}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            27
                        </td>
                        <td rowspan="4" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: left; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="186">
                            4.7.3&nbsp;&nbsp;涉农及小微贷款合计（剔除重叠部分）
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            余额
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            &nbsp;{{ $report->total_remainder}}&nbsp;
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            28
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            户数
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            &nbsp;{{ $report->total_loan_family}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            29
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            累计发放金额
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->total_issue}}&nbsp;
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            30
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            累计发放户数
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->total_backnum}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            31
                        </td>
                        <td rowspan="4" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: left; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="186">
                            4.7.4&nbsp;&nbsp;个人贷款
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            余额
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            &nbsp;{{ $report->person_loan_remainder}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            32
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            户数
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            &nbsp;{{ $report->person_loan_family}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            33<br/>
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            累计发放金额
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->person_issue}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            34
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            累计发放户数
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->person_backnum}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            35
                        </td>
                        <td rowspan="8" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="201">
                            4.8&nbsp;&nbsp;按资产质量划分
                        </td>
                        <td rowspan="2" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: left; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="186">
                            4.8.1&nbsp;&nbsp;正常贷款
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            余额
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->normal_loan_remainder}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            36
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            户数
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->normal_loan_family}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            37
                        </td>
                        <td rowspan="2" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: left; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="186">
                            4.8.2&nbsp;&nbsp;逾期30天（含）以下
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            余额
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->month_loan_remainder}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            38
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            户数
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->month_loan_family}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            39
                        </td>
                        <td rowspan="2" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: left; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="186">
                            4.8.3&nbsp;&nbsp;逾期30天-90天（含）
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            余额
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->quarter_loan_remainder}}<br/>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            40
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            户数
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->quarter_loan_family}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            41
                        </td>
                        <td rowspan="2" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: left; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="186">
                            4.8.4&nbsp;&nbsp;逾期90天以上
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            余额
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->ninety_loan_remainder}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            42
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            户数
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->ninety_loan_family}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            43
                        </td>
                        <td rowspan="3" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="201">
                            4.9&nbsp;利率
                        </td>
                        <td colspan="2" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: left; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="372">
                            4.9.1&nbsp;最高利率（折合年化利率）
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->highest_interest}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            44
                        </td>
                        <td colspan="2" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: left; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="372">
                            4.9.2&nbsp;最低利率（折合年化利率）
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->lowest_interest}}
                        </td>
                    </tr>
                    <tr style="height:37.50pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            45
                        </td>
                        <td colspan="2" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: left; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="372">
                            4.9.3&nbsp;加权平均利率（折合年化利率）
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->Average_interest}}
                        </td>
                    </tr>
                    <tr style="height:37.50pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            46
                        </td>
                        <td rowspan="5" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="201">
                            4.10贷款五级分类
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: left; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="186">
                            4.10.1正常类贷款
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            余额
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->normal_loan}} <br/>
                        </td>
                    </tr>
                    <tr style="height:42.50pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            47
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: left; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="186">
                            4.10.2关注类贷款
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            余额
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->follow_loan}}
                        </td>
                    </tr>
                    <tr style="height:33.75pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            48
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: left; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="186">
                            4.10.3次级类贷款
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            余额
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->second_loan}}
                        </td>
                    </tr>
                    <tr style="height:36.25pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            49
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: left; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="186">
                            4.10.4可疑类贷款
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            余额
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            &nbsp;{{ $report->doubt_loan}}
                        </td>
                    </tr>
                    <tr style="height:37.50pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            50
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: left; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="186">
                            4.10.5损失类贷款
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            余额
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->noback_loan}}
                        </td>
                    </tr>
                    <tr style="height:28.88pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            51
                        </td>
                        <td rowspan="10" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="201">
                            4.11贷款种类
                        </td>
                        <td rowspan="2" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="186">
                            4.11.1信用贷款
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            余额
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->credit_loan_remainder}}
                        </td>
                    </tr>
                    <tr style="height:28.88pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            52
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            户数
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            &nbsp;{{ $report->credit_loan_family}}&nbsp;
                        </td>
                    </tr>
                    <tr style="height:28.88pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            53
                        </td>
                        <td rowspan="2" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="186">
                            4.11.2保证担保
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            余额
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->promise_loan_remainder}}
                        </td>
                    </tr>
                    <tr style="height:28.88pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            54
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            户数
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->promise_loan_family}}
                        </td>
                    </tr>
                    <tr style="height:28.88pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            55
                        </td>
                        <td rowspan="2" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="186">
                            4.11.3抵押担保
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            余额
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->mortgage_loan_remainder}}
                        </td>
                    </tr>
                    <tr style="height:28.88pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            56
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            户数
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            &nbsp;{{ $report->mortgage_loan_family}}
                        </td>
                    </tr>
                    <tr style="height:28.88pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            57
                        </td>
                        <td rowspan="2" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="186">
                            4.11.4质押担保
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            余额
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->pledge_loan_remainder}}
                        </td>
                    </tr>
                    <tr style="height:28.88pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            58
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            户数
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->pledge_loan_family}}
                        </td>
                    </tr>
                    <tr>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            59
                        </td>
                        <td rowspan="2" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="186">
                            4.11.5其他方式
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; white-space: normal; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="158">
                            余额
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            &nbsp;{{ $report->other_loan_remainder}}
                        </td>
                    </tr>
                    <tr style="height:26.25pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            60
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; white-space: normal; border-left: 1px solid rgb(0, 0, 0); border-right: 1px solid rgb(0, 0, 0); border-bottom: 1px solid rgb(0, 0, 0);" width="158">
                            户数
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            &nbsp;{{ $report->other_loan_family}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            61
                        </td>
                        <td colspan="2" rowspan="8" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-left: 1px solid rgb(0, 0, 0); border-right: 1px solid rgb(0, 0, 0); border-bottom: 1px solid rgb(0, 0, 0);" width="336">
                            5.&nbsp;&nbsp;融入资金金额
                        </td>
                        <td colspan="3" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; vertical-align: middle; border-left: 1px solid rgb(0, 0, 0); border-right: 1px solid rgb(0, 0, 0); border-bottom: 1px solid rgb(0, 0, 0);" width="588">
                            5.1&nbsp;&nbsp;银行融资
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->bank_financing}}&nbsp;
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            62
                        </td>
                        <td colspan="3" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="588">
                            5.2&nbsp;&nbsp;股东借款
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->shareholder_loan}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            63
                        </td>
                        <td colspan="3" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="588">
                            5.3&nbsp;&nbsp;资产、资产收益权转让
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            &nbsp; {{ $report->profit_transfer}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            64
                        </td>
                        <td colspan="3" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="588">
                            5.4&nbsp;&nbsp;债券、票据（包括私募债）
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->bond_bill}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            65
                        </td>
                        <td colspan="3" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="588">
                            5.5&nbsp;&nbsp;小贷公司同业拆借、小额再贷款
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            &nbsp; {{ $report->parterner_loan}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            66
                        </td>
                        <td colspan="3" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="588">
                            5.6&nbsp;&nbsp;资产证券化
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            &nbsp;{{ $report->securitisation}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            67
                        </td>
                        <td colspan="3" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="588">
                            5.7&nbsp;&nbsp;资本市场挂牌
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            {{ $report->market_capital}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            68
                        </td>
                        <td colspan="3" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; vertical-align: middle; border-left: 1px solid rgb(0, 0, 0); border-right: 1px solid rgb(0, 0, 0); border-top: 1px solid rgb(0, 0, 0);" width="588">
                            5.8&nbsp;&nbsp;其他（分别填报类型及金额）
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            &nbsp;{{ $report->othertype_capital}}&nbsp;{{ $report->othermoney}}<br/>
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            69
                        </td>
                        <td colspan="2" rowspan="2" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="336">
                            6.&nbsp;&nbsp;税务情况
                        </td>
                        <td colspan="3" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="588">
                            6.1&nbsp;&nbsp;今年内累计纳税支出
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="132">
                            &nbsp; {{ $report->paytaxes}}
                        </td>
                    </tr>
                    <tr style="height:27.44pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            70
                        </td>
                        <td colspan="3" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; vertical-align: middle; border-left: 1px solid rgb(0, 0, 0); border-right: 1px solid rgb(0, 0, 0); border-top: 1px solid rgb(0, 0, 0);" width="588">
                            &nbsp;&nbsp;6.1.1&nbsp;&nbsp;其中：年内累计所得税支出
                        </td>
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-left: 1px solid rgb(0, 0, 0); border-right: 1px solid rgb(0, 0, 0); border-top: 1px solid rgb(0, 0, 0);" width="132">
                            &nbsp; {{ $report->incometax}}
                        </td>
                    </tr>
                    <tr style="height:56.25pf">
                        <td style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="91">
                            71
                        </td>
                        <td colspan="2" rowspan="2" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="336">
                            7.&nbsp;&nbsp;注释及说明
                        </td>
                        <td colspan="4" style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 400; font-style: normal; text-align: center; vertical-align: middle; border-width: 1px; border-style: solid; border-color: rgb(0, 0, 0);" width="746">
                            {{ $report->description}}
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div></div>
        </form>

@endsection