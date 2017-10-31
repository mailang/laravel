@extends('layouts.master')
@section('title')
       <h1>
           首页
            <small>it all starts here</small>
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
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">财务情况</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
              
                  <div class="box-body form-horizontal">

                  <div class="form-group">
                    <label for="total_capital" class="col-sm-2 control-label">资产总额:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    {{ $report->total_capital}}
                   <span>万元</span>
                  </div>
                  </div>
                  </div>
                 <div class="form-group">  
                  <label for="money_capital" class="col-sm-2 control-label">货币资金:</label> 
                 <div class=" col-sm-4"> 
                  <div class="input-group ">
                    {{ $report->money_capital}}
                    <span>万元</span>
                  </div>
                  </div>
                 <label for="other_capital" class="col-sm-2 control-label">其他资金:</label> 
                 <div class=" col-sm-4"> 
                  <div class="input-group ">
                    {{ $report->other_capital}}
                    <span>万元</span>
                  </div>
                  </div>
                 </div>

                 <div class="form-group">
                    <label for="total_debtcapital" class="col-sm-2 control-label">负债总额:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    {{ $report->total_debtcapital}}
                    <span >万元</span>
                  </div>
                  </div>
                  </div>
                   <div class="form-group">
                    <label for="paidup_capital" class="col-sm-2 control-label">实收资本:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                  
                      {{ $report->paidup_capital}}
                    <span >万元</span>
                  </div>
                  </div>
                  </div>
                   <div class="form-group">
                    <label for="income" class="col-sm-2 control-label">营业收入:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    {{ $report->income}}
                    <span >万元</span>
                  </div>
                  </div>
                    <div class=" col-sm-4"> 
                  <div class="input-group ">
                   
                     {{ $report->loan_income}}
                    <span >万元</span>
                  </div>
                  </div>
                  </div>
                    <div class="form-group">
                    <label for="profit_income" class="col-sm-2 control-label">净利润:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    {{ $report->profit_income}}
                    <span >万元</span>
                  </div>
                  </div>
                  </div>

                  </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- Form Element sizes -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">按贷款质量分类</h3>
                </div>
                <div class="box-body form-horizontal">
                 
                  <div class="form-group">
                    <label for="normal_loan_remainder" class="col-sm-4 control-label">正常贷款余额:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                   
                     {{ $report->normal_loan_remainder}}
                    <span >万元</span>
                  </div>
                  </div>
                  </div>
                   <div class="form-group">
                    <label for="normal_loan_family" class="col-sm-4 control-label">正常贷款户数:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                   
                     {{ $report->normal_loan_family}}
                    <span >户</span>
                  </div>
                  </div>
                  </div>


                  <div class="form-group">
                    <label for="month_loan_remainder" class="col-sm-4 control-label">逾期30天以下贷款余额:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    {{ $report->month_loan_remainder}}
                    <span >万元</span>
                  </div>
                  </div>
                  </div>
                   <div class="form-group">
                    <label for="month_loan_family" class="col-sm-4 control-label">逾期30天以下贷款户数:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                   
                     {{ $report->month_loan_family}}
                    <span >户</span>
                  </div>
                  </div>
                  </div>

                   <div class="form-group">
                    <label for="quarter_loan_remainder" class="col-sm-4 control-label">逾期30天-90天贷款金额:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    {{ $report->quarter_loan_remainder}}
                    <span >万元</span>
                  </div>
                  </div>
                  </div>
                   <div class="form-group">
                    <label for="quarter_loan_family" class="col-sm-4 control-label">逾期30天-90天贷款户数:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                   
                      {{ $report->quarter_loan_family}}
                    <span >户</span>
                  </div>
                  </div>
                  </div>
                    <div class="form-group">
                    <label for="ninety_loan_remainder" class="col-sm-4 control-label">逾期90天以上贷款金额:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                   
                    {{ $report->ninety_loan_remainder}}
                    <span >万元</span>
                  </div>
                  </div>
                  </div>
                   <div class="form-group">
                    <label for="ninety_loan_family" class="col-sm-4 control-label">逾期90天以上贷款户数:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                   
                    {{ $report->ninety_loan_family}}
                    <span >户</span>
                  </div>
                  </div>
                  </div>

                </div><!-- /.box-body -->
              </div><!-- /.box -->
              <!-- Form Element sizes -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">折合年化利率</h3>
                </div>
                <div class="box-body form-horizontal">

                <div class="form-group">
                    <label for="highest_interest" class="col-sm-3 control-label">最高利率:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                      {{ $report->highest_interest}}
                    <span >%</span>
                  </div> </div></div>

                     <div class="form-group">
                    <label for="lowest_interest" class="col-sm-3 control-label">最低利率:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                
                      {{ $report->lowest_interest}}
                    <span >%</span>
                  </div>
                  </div>
                  </div>
                     <div class="form-group">
                    <label for="Average_interest" class="col-sm-3 control-label">加权平均利率:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                 
                     {{ $report->Average_interest}}
                    <span >%</span>
                  </div>
                  </div>
                  </div>
                   </div><!-- /.box-body -->
              </div><!-- /.box -->

              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">贷款五级分类</h3>
                </div>
                <div class="box-body form-horizontal">
                   <div class="form-group">
                    <label for="normal_loan" class="col-sm-3 control-label">正常类贷款:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    {{ $report->normal_loan}} <span >万元</span>
                  </div> </div></div>

                    <div class="form-group">
                    <label for="follow_loan" class="col-sm-3 control-label">关注类贷款:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    {{ $report->follow_loan}}
                    <span >万元</span>
                  </div> </div></div>

                    <div class="form-group">
                    <label for="second_loan" class="col-sm-3 control-label">次级类贷款:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    {{ $report->second_loan}}
                    <span >万元</span>
                  </div> </div></div>
                 
                   <div class="form-group">
                    <label for="doubt_loan" class="col-sm-3 control-label">可疑类贷款:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                   {{ $report->doubt_loan}}
                    <span >万元</span>
                  </div> </div></div>
                    <div class="form-group">
                    <label for="noback_loan" class="col-sm-3 control-label">损失类贷款:</label>
                    <div class="col-sm-6">
                    <div class="input-group"> {{ $report->noback_loan}}
                   <span >万元</span>
                  </div> </div></div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

             <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">贷款种类划分</h3>
                </div>
                <div class="box-body form-horizontal">
                   <div class="form-group">
                    <label for="credit_loan_remainder" class="col-sm-2 control-label">信用贷款:</label>
                    <div class="col-sm-5">
                    <div class="input-group">
                    {{ $report->credit_loan_remainder}}
                 
                    <span >万元</span>
                  </div> </div>
                 <div class=" col-sm-5"> 
                  <div class="input-group ">
                
                      {{ $report->credit_loan_family}}
                    <span >户</span>
                  </div>
                  </div>
              </div>

                    <div class="form-group">
                    <label for="promise_loan_remainder" class="col-sm-2 control-label">保证担保:</label>
                    <div class="col-sm-5">
                    <div class="input-group">
                   
                     {{ $report->promise_loan_remainder}}
                    <span >万元</span>
                  </div> </div>
                   <div class=" col-sm-5"> 
                  <div class="input-group ">
               
                         {{ $report->promise_loan_family}}
                    <span >户</span>
                  </div> </div>  </div>

                    <div class="form-group">
                    <label for="mortgage_loan_remainder" class="col-sm-2 control-label">抵押担保:</label>
                    <div class="col-sm-5">
                    <div class="input-group">
            
                     {{ $report->mortgage_loan_remainder}}
                    <span >万元</span>
                  </div> </div> <div class=" col-sm-5"> 
                  <div class="input-group ">
                   
                       {{ $report->mortgage_loan_family}}
                    <span >户</span>
                  </div> </div>  </div>

                   <div class="form-group">
                    <label for="pledge_loan_remainder" class="col-sm-2 control-label">质押担保:</label>
                    <div class="col-sm-5">
                    <div class="input-group">
                 
                    {{ $report->pledge_loan_remainder}}
                    <span >万元</span>
                  </div> </div>
                  <div class=" col-sm-5"> 
                  <div class="input-group ">
                    
                    {{ $report->pledge_loan_family}}
                    <span >户</span>
                  </div> </div>  </div>

                    <div class="form-group">
                    <label for="other_loan_remainder" class="col-sm-2 control-label">其他方式:</label>
                    <div class="col-sm-5">
                    <div class="input-group">
                     {{ $report->other_loan_remainder}}
                    <span >万元</span>
                  </div> </div><div class=" col-sm-5"> 
                  <div class="input-group ">
             
                    {{ $report->other_loan_family}}

                    <span >户</span>
                  </div> </div>  </div>

                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- Input addon -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">融入资金金额</h3>
                </div>
                <div class="box-body form-horizontal">
                  <div class="form-group">
                    <label for="bank_financing" class="col-sm-4 control-label">银行融资:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    
                    {{ $report->bank_financing}}

                    <span >万元</span>
                  </div></div></div>
                <div class="form-group">
                    <label for="shareholder_loan" class="col-sm-4 control-label">股东借款:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                   
                     {{ $report->shareholder_loan}}

                    <span >万元</span>
                  </div></div></div>

                 <div class="form-group">
                    <label for="profit_transfer" class="col-sm-4 control-label">资产、资产收益权转让:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    
                    {{ $report->profit_transfer}}

                    <span >万元</span>
                  </div></div></div>

              <div class="form-group">
                    <label for="bond_bill" class="col-sm-4 control-label">债券、票据(包括私募债):</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    
                    {{ $report->bond_bill}}

                    <span >万元</span>
                  </div></div></div>

             <div class="form-group">
                    <label for="parterner_loan" class="col-sm-4 control-label">小贷公司同业拆借、小额再贷款:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                  
                    {{ $report->parterner_loan}}

                    <span >万元</span>
                  </div></div></div>

               <div class="form-group">
                    <label for="securitisation" class="col-sm-4 control-label">资产证券化:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    
                    {{ $report->securitisation}}

                    <span >万元</span>
                  </div></div></div>

                 <div class="form-group">
                    <label for="market_capital" class="col-sm-4 control-label">资本市场挂牌:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    
                    {{ $report->market_capital}}

                    <span >万元</span>
                  </div></div></div>
                  <div class="form-group">
                    <label for="othertype_capital" class="col-sm-4 control-label">其他融资类型:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                 
                    {{ $report->othertype_capital}}

                  </div></div></div>

                   <div class="form-group">
                   <label for="othertype_capital" class="col-sm-4 control-label">其他融资金额:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    
                    {{ $report->othermoney}}

                    <span >万元</span>

                  </div></div></div>

                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">贷款情况</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
              
                  <div class="box-body form-horizontal">

                 <div class="form-group">
                    <label for="loan_remainder" class="col-sm-2 control-label">贷款余额:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                   
                    {{ $report->loan_remainder}}

                    <span >万元</span>
                  </div>
                  </div>
                  <div class=" col-sm-4"> 
                  <div class="input-group ">
                 
                    {{ $report->bad_remainder}}

                    <span >万元</span>
                  </div>
                  </div>
                  </div>

                     <div class="form-group">
                    <label for="loan_family" class="col-sm-2 control-label">贷款户数:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                   
                    {{ $report->loan_family}}

                    <span >户</span>
                  </div></div></div>
                  <div class="form-group">
                    <label for="loan_num" class="col-sm-2 control-label">贷款笔数:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                   
                    {{ $report->loan_num}}

                  </div>
                  </div>
                  </div>
                  </div><!-- /.box-body -->
                <!-- /.box-footer -->
        <!-- form end -->
              </div><!-- /.box -->
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">本年内贷款情况</h3>
                </div><!-- /.box-header -->
                <div class="box-body  form-horizontal">
                    <!-- text input -->
                 <div class="form-group">
                    <label for="year_issueloan" class="col-sm-3 control-label">发放贷款:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    
                    {{ $report->year_issueloan}}

                    <span >万元</span>
                  </div></div></div>

                 <div class="form-group">
                    <label for="year_issuefamily" class="col-sm-3 control-label">发放贷款户数:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                   
                    {{ $report->year_issuefamily}}

                    <span >户</span>
                  </div></div></div>
                  <div class="form-group">
                    <label for="year_issuenum" class="col-sm-3 control-label">发放贷款笔数:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                   
                    {{ $report->year_issuenum}}

                  </div></div></div>

                   <div class="form-group">
                    <label for="year_backloan" class="col-sm-3 control-label">收回贷款金额:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    
                    {{ $report->year_backloan}}

                    <span >万元</span>
                  </div></div></div>
                    <div class="form-group">
                    <label for="year_backfamily" class="col-sm-3 control-label">收回贷款户数:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    
                    {{ $report->year_backfamily}}

                    <span >户</span>
                  </div></div></div>
                  <div class="form-group">
                    <label for="year_backnum" class="col-sm-3 control-label">收回贷款笔数:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                  
                    {{ $report->year_backnum}}

                    
                  </div></div></div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

               <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">涉农贷款</h3>
                </div><!-- /.box-header -->
                <div class="box-body  form-horizontal">
              <div class="form-group">
                    <label for="farmer_loan_remainder" class="col-sm-3 control-label">贷款余额:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                   
                    {{ $report->farmer_loan_remainder}}

                    <span >万元</span>
                  </div></div></div>
                      <div class="form-group">
                    <label for="farmer_loan_family" class="col-sm-3 control-label">贷款户数:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                   
                    {{ $report->farmer_loan_family}}

                    <span >户</span>
                  </div></div></div>

                   <div class="form-group">
                    <label for="farmer_issue" class="col-sm-3 control-label">累计发放金额:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                   
                    {{ $report->farmer_issue}}

                    <span >万元</span>
                  </div></div></div>
                   <div class="form-group">
                    <label for="farmer_backnum" class="col-sm-3 control-label">累计发放户数:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    
                    {{ $report->farmer_backnum}}

                    <span >户</span>
                  </div></div></div>
                </div></div>

                 <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">小微企业贷款</h3>
                </div><!-- /.box-header -->
                <div class="box-body  form-horizontal">
              <div class="form-group">
                    <label for="company_loan_remainder" class="col-sm-3 control-label">贷款余额:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                   
                    {{ $report->company_loan_remainder}}

                    <span >万元</span>
                  </div></div></div>
                      <div class="form-group">
                    <label for="company_loan_family" class="col-sm-3 control-label">贷款户数:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                   
                    {{ $report->company_loan_family}}

                    <span >户</span>
                  </div></div></div>

                   <div class="form-group">
                    <label for="company_issue" class="col-sm-3 control-label">累计发放金额:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                   
                    {{ $report->company_issue}}

                    <span >万元</span>
                  </div></div></div>
                   <div class="form-group">
                    <label for="company_backnum" class="col-sm-3 control-label">累计发放户数:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    
                    {{ $report->company_backnum}}

                    <span >户</span>
                  </div></div></div>
                </div></div>

                 <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">涉农及小微贷款合计（剔除重叠部分）</h3>
                </div><!-- /.box-header -->
                <div class="box-body  form-horizontal">
              <div class="form-group">
                    <label for="total_remainder" class="col-sm-3 control-label">贷款余额:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                   
                    {{ $report->total_remainder}}

                    <span >万元</span>
                  </div></div></div>
                      <div class="form-group">
                    <label for="total_loan_family" class="col-sm-3 control-label">贷款户数:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    
                    {{ $report->total_loan_family}}

                    <span >户</span>
                  </div></div></div>

                   <div class="form-group">
                    <label for="total_issue" class="col-sm-3 control-label">累计发放金额:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                   
                    {{ $report->total_issue}}

                    <span >万元</span>
                  </div></div></div>
                   <div class="form-group">
                    <label for="total_backnum" class="col-sm-3 control-label">累计发放户数:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                  
                    {{ $report->total_backnum}}

                    <span >户</span>
                  </div></div></div>
                </div></div>

                 <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">个人贷款</h3>
                </div><!-- /.box-header -->
                <div class="box-body  form-horizontal">
              <div class="form-group">
                    <label for="person_loan_remainder" class="col-sm-3 control-label">贷款余额:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    
                    {{ $report->person_loan_remainder}}

                    <span >万元</span>
                  </div></div></div>
                      <div class="form-group">
                    <label for="person_loan_family" class="col-sm-3 control-label">贷款户数:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                   
                    {{ $report->person_loan_family}}

                    <span >户</span>
                  </div></div></div>

                   <div class="form-group">
                    <label for="person_issue" class="col-sm-3 control-label">累计发放金额:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                   
                    {{ $report->person_issue}}

                    <span >万元</span>
                  </div></div></div>
                   <div class="form-group">
                    <label for="person_backnum" class="col-sm-3 control-label">累计发放户数:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                   
                    {{ $report->person_backnum}}

                    <span >户</span>
                  </div></div></div>
                </div></div>

               <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">今年内税务情况</h3>
                </div><!-- /.box-header -->
                <div class="box-body  form-horizontal">
              <div class="form-group">
                    <label for="paytaxes" class="col-sm-3 control-label">累计纳税支出:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                   
                    {{ $report->paytaxes}}

                    <span >万元</span>
                  </div></div></div>
                      <div class="form-group">
                    <label for="saletax" class="col-sm-3 control-label">累计营业税金及附加支出:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                   
                    {{ $report->saletax}}

                    <span >万元</span>
                  </div></div></div>

                   <div class="form-group">
                    <label for="incometax" class="col-sm-3 control-label">累计所得税支出:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    
                    {{ $report->incometax}}

                    <span >万元</span>
                  </div></div></div>
                  </div></div>

                <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">注释及说明</h3>
                </div><!-- /.box-header -->

                <div class="box-body">
              <div class="form-group">
                      <label for="description">注释及说明</label>
                      <br/>
                        {{ $report->description}}
             
                    </div>
            </div><!--/.col (right) -->
          </div>

          </div>
        </form>
       
 @endsection