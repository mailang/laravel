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

<form id="form" action="/admin/addreport" method="post">
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
                    <input class="form-control" type="text" id="total_capital" name="total_capital" placeholder="资产总额">
                    <span class="input-group-addon">万元</span>
                  </div>
                  </div>
                  </div>
                 <div class="form-group">  
                  <label for="money_capital" class="col-sm-2 control-label">货币资金:</label> 
                 <div class=" col-sm-4"> 
                  <div class="input-group ">
                    <input class="form-control" id="money_capital" name="money_capital" placeholder="货币资金" type="text">
                    <span class="input-group-addon">万元</span>
                  </div>
                  </div>
                 <label for="other_capital" class="col-sm-2 control-label">其他资金:</label> 
                 <div class=" col-sm-4"> 
                  <div class="input-group ">
                    <input class="form-control" id="other_capital" name="other_capital" placeholder="其他资金" type="text">
                    <span class="input-group-addon">万元</span>
                  </div>
                  </div>
                 </div>

                 <div class="form-group">
                    <label for="total_debtcapital" class="col-sm-2 control-label">负债总额:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" type="text" placeholder="负债总额" name="total_debtcapital"  id="total_debtcapital">
                    <span class="input-group-addon">万元</span>
                  </div>
                  </div>
                  </div>
                   <div class="form-group">
                    <label for="paidup_capital" class="col-sm-2 control-label">实收资本:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" type="text" placeholder="实收资本" name="paidup_capital" id="paidup_capital">
                    <span class="input-group-addon">万元</span>
                  </div>
                  </div>
                  </div>
                   <div class="form-group">
                    <label for="income" class="col-sm-2 control-label">营业收入:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" type="text" placeholder="营业收入" name="income" id="income">
                    <span class="input-group-addon">万元</span>
                  </div>
                  </div>
                    <div class=" col-sm-4"> 
                  <div class="input-group ">
                    <input class="form-control" id="other_capital" placeholder="贷款利息收入" name="loan_income" type="text" id="loan_income">
                    <span class="input-group-addon">万元</span>
                  </div>
                  </div>
                  </div>
                    <div class="form-group">
                    <label for="profit_income" class="col-sm-2 control-label">净利润:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" type="text" placeholder="净利润" name="profit_income" id="profit_income"/>
                    <span class="input-group-addon">万元</span>
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
                    <input class="form-control" type="text" placeholder="净利润" name="normal_loan_remainder" id="normal_loan_remainder"/>
                    <span class="input-group-addon">万元</span>
                  </div>
                  </div>
                  </div>
                   <div class="form-group">
                    <label for="normal_loan_family" class="col-sm-4 control-label">正常贷款户数:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" type="text" placeholder="正常贷款户数" name="normal_loan_family" id="normal_loan_family"/>
                    <span class="input-group-addon">户</span>
                  </div>
                  </div>
                  </div>


                  <div class="form-group">
                    <label for="month_loan_remainder" class="col-sm-4 control-label">逾期30天以下贷款余额:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" type="text" placeholder="逾期30天以下贷款户数"  name="month_loan_remainder" id="month_loan_remainder"/>
                    <span class="input-group-addon">户</span>
                  </div>
                  </div>
                  </div>
                   <div class="form-group">
                    <label for="month_loan_family" class="col-sm-4 control-label">逾期30天以下贷款户数:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" type="text" placeholder="逾期30天以下贷款户数" name="month_loan_family" id="month_loan_family"/>
                    <span class="input-group-addon">户元</span>
                  </div>
                  </div>
                  </div>

                   <div class="form-group">
                    <label for="quarter_loan_remainder" class="col-sm-4 control-label">逾期30天-90天贷款金额:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" type="text" placeholder="逾期30天-90天贷款金额" name="quarter_loan_remainder"  id="quarter_loan_remainder"/>
                    <span class="input-group-addon">万元</span>
                  </div>
                  </div>
                  </div>
                   <div class="form-group">
                    <label for="quarter_loan_family" class="col-sm-4 control-label">逾期30天-90天贷款户数:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" type="text" placeholder="逾期30天-90天贷款户数" name="quarter_loan_family" id="quarter_loan_family"/>
                    <span class="input-group-addon">户</span>
                  </div>
                  </div>
                  </div>
                    <div class="form-group">
                    <label for="ninety_loan_remainder" class="col-sm-4 control-label">逾期90天以上贷款金额:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" type="text" placeholder="逾期30天以下贷款户数" name="ninety_loan_remainder" id="ninety_loan_remainder"/>
                    <span class="input-group-addon">万元</span>
                  </div>
                  </div>
                  </div>
                   <div class="form-group">
                    <label for="ninety_loan_family" class="col-sm-4 control-label">逾期90天以上贷款户数:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" type="text" placeholder="逾期30天以下贷款户数" name="ninety_loan_family" id="ninety_loan_family"/>
                    <span class="input-group-addon">户</span>
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
                    <input class="form-control" type="text" placeholder="最高利率" name="highest_interest" id="highest_interest"/>
                    <span class="input-group-addon">%</span>
                  </div> </div></div>

                     <div class="form-group">
                    <label for="lowest_interest" class="col-sm-3 control-label">最低利率:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" type="text" placeholder="最低利率" name="lowest_interest" id="lowest_interest"/>
                    <span class="input-group-addon">%</span>
                  </div>
                  </div>
                  </div>
                     <div class="form-group">
                    <label for="Average_interest" class="col-sm-3 control-label">加权平均利率:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" type="text" placeholder="加权平均利率" name="Average_interest" id="Average_interest"/>
                    <span class="input-group-addon">%</span>
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
                    <input class="form-control" type="text" placeholder="正常类贷款" name="normal_loan" id="normal_loan"/>
                    <span class="input-group-addon">万元</span>
                  </div> </div></div>

                    <div class="form-group">
                    <label for="follow_loan" class="col-sm-3 control-label">关注类贷款:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" type="text" placeholder="关注类贷款" name="follow_loan" id="follow_loan"/>
                    <span class="input-group-addon">万元</span>
                  </div> </div></div>

                    <div class="form-group">
                    <label for="second_loan" class="col-sm-3 control-label">次级类贷款:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" type="text" placeholder="次级类贷款" name="second_loan" id="second_loan"/>
                    <span class="input-group-addon">万元</span>
                  </div> </div></div>
                 
                   <div class="form-group">
                    <label for="doubt_loan" class="col-sm-3 control-label">可疑类贷款:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" type="text" placeholder="可疑类贷款" name="doubt_loan" id="doubt_loan"/>
                    <span class="input-group-addon">万元</span>
                  </div> </div></div>
                    <div class="form-group">
                    <label for="noback_loan" class="col-sm-3 control-label">损失类贷款:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" type="text" placeholder="损失类贷款" name="noback_loan" id="noback_loan"/>
                    <span class="input-group-addon">万元</span>
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
                    <input class="form-control" type="text" placeholder="信用贷款金额" name="credit_loan_remainder" id="credit_loan_remainder"/>
                    <span class="input-group-addon">万元</span>
                  </div> </div>
                 <div class=" col-sm-5"> 
                  <div class="input-group ">
                    <input class="form-control" id="credit_loan_family" name="credit_loan_family" placeholder="信用贷款户数" type="text">
                    <span class="input-group-addon">户</span>
                  </div>
                  </div>
              </div>

                    <div class="form-group">
                    <label for="promise_loan_remainder" class="col-sm-2 control-label">保证担保:</label>
                    <div class="col-sm-5">
                    <div class="input-group">
                    <input class="form-control" type="text" placeholder="保证担保金额" name="promise_loan_remainder" id="promise_loan_remainder"/>
                    <span class="input-group-addon">万元</span>
                  </div> </div>
                   <div class=" col-sm-5"> 
                  <div class="input-group ">
                    <input class="form-control" id="promise_loan_family" placeholder="保证担保户数" name="promise_loan_family" type="text">
                    <span class="input-group-addon">户</span>
                  </div> </div>  </div>

                    <div class="form-group">
                    <label for="mortgage_loan_remainder" class="col-sm-2 control-label">抵押担保:</label>
                    <div class="col-sm-5">
                    <div class="input-group">
                    <input class="form-control" type="text" placeholder="抵押担保金额" name="mortgage_loan_remainder" id="mortgage_loan_remainder"/>
                    <span class="input-group-addon">万元</span>
                  </div> </div> <div class=" col-sm-5"> 
                  <div class="input-group ">
                    <input class="form-control" id="mortgage_loan_family" name="mortgage_loan_family"  placeholder="抵押担保户数" type="text">
                    <span class="input-group-addon">户</span>
                  </div> </div>  </div>

                   <div class="form-group">
                    <label for="pledge_loan_remainder" class="col-sm-2 control-label">质押担保:</label>
                    <div class="col-sm-5">
                    <div class="input-group">
                    <input class="form-control" type="text" placeholder="质押担保金额" name="pledge_loan_remainder" id="pledge_loan_remainder"/>
                    <span class="input-group-addon">万元</span>
                  </div> </div>
                  <div class=" col-sm-5"> 
                  <div class="input-group ">
                    <input class="form-control" id="pledge_loan_family" name="pledge_loan_family" placeholder="质押担保户数" type="text">
                    <span class="input-group-addon">户</span>
                  </div> </div>  </div>

                    <div class="form-group">
                    <label for="other_loan_remainder" class="col-sm-2 control-label">其他方式:</label>
                    <div class="col-sm-5">
                    <div class="input-group">
                    <input class="form-control" type="text" placeholder="其他方式" name="other_loan_remainder" id="other_loan_remainder"/>
                    <span class="input-group-addon">万元</span>
                  </div> </div><div class=" col-sm-5"> 
                  <div class="input-group ">
                    <input class="form-control" id="other_loan_family" name="other_loan_family" placeholder="其他方式户数" type="text">
                    <span class="input-group-addon">户</span>
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
                    <input class="form-control" placeholder="银行融资" name="bank_financing" type="text" id="bank_financing">
                    <span class="input-group-addon">万元</span>
                  </div></div></div>
                <div class="form-group">
                    <label for="shareholder_loan" class="col-sm-4 control-label">股东借款:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" placeholder="股东借款" type="text" name="shareholder_loan" id="shareholder_loan">
                    <span class="input-group-addon">万元</span>
                  </div></div></div>

                 <div class="form-group">
                    <label for="profit_transfer" class="col-sm-4 control-label">资产、资产收益权转让:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" placeholder="资产、资产收益权转让" name="profit_transfer"  type="text" id="profit_transfer">
                    <span class="input-group-addon">万元</span>
                  </div></div></div>

              <div class="form-group">
                    <label for="bond_bill" class="col-sm-4 control-label">债券、票据(包括私募债):</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" placeholder="债券、票据(包括私募债)" type="text" name="bond_bill" id="bond_bill">
                    <span class="input-group-addon">万元</span>
                  </div></div></div>

             <div class="form-group">
                    <label for="parterner_loan" class="col-sm-4 control-label">小贷公司同业拆借、小额再贷款:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" placeholder="小贷公司同业拆借、小额再贷款" type="text" name="parterner_loan" id="parterner_loan">
                    <span class="input-group-addon">万元</span>
                  </div></div></div>

               <div class="form-group">
                    <label for="securitisation" class="col-sm-4 control-label">资产证券化:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" placeholder="资产证券化" type="text" name="securitisation" id="securitisation">
                    <span class="input-group-addon">万元</span>
                  </div></div></div>

                 <div class="form-group">
                    <label for="market_capital" class="col-sm-4 control-label">资本市场挂牌:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" placeholder="资本市场挂牌" type="text" name="market_capital" id="market_capital">
                    <span class="input-group-addon">万元</span>
                  </div></div></div>
                  <div class="form-group">
                    <label for="othertype_capital" class="col-sm-4 control-label">其他融资类型:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" placeholder="其他融资类型" type="text" name="othertype_capital" id="othertype_capital">
                  </div></div></div>

                   <div class="form-group">
                   <label for="othertype_capital" class="col-sm-4 control-label">其他融资金额:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" placeholder="其他融资金额" type="text" name="othermoney" id="othermoney">
                    <span class="input-group-addon">万元</span>

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
                    <input class="form-control" placeholder="贷款余额" type="text" name="loan_remainder" id="loan_remainder">
                    <span class="input-group-addon">万元</span>
                  </div>
                  </div>
                  <div class=" col-sm-4"> 
                  <div class="input-group ">
                    <input class="form-control" id="other_capital" placeholder="不良贷款余额" name="bad_remainder" type="text" id="bad_remainder">
                    <span class="input-group-addon">万元</span>
                  </div>
                  </div>
                  </div>

                     <div class="form-group">
                    <label for="loan_family" class="col-sm-2 control-label">贷款户数:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" placeholder="贷款户数" type="text" name="loan_family" id="loan_family">
                    <span class="input-group-addon">户</span>
                  </div></div></div>
                  <div class="form-group">
                    <label for="loan_num" class="col-sm-2 control-label">贷款笔数:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" placeholder="贷款笔数" type="text" name="loan_num" id="loan_num">
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
                    <input class="form-control" placeholder="本年发放贷款金额" type="text" name="year_issueloan" id="year_issueloan">
                    <span class="input-group-addon">万元</span>
                  </div></div></div>

                 <div class="form-group">
                    <label for="year_issuefamily" class="col-sm-3 control-label">发放贷款户数:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" placeholder="本年内发放贷款户数" type="text" name="year_issuefamily" id="year_issuefamily">
                    <span class="input-group-addon">户</span>
                  </div></div></div>
                  <div class="form-group">
                    <label for="year_issuenum" class="col-sm-3 control-label">发放贷款笔数:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" placeholder="发放贷款笔数" type="text" name="year_issuenum" id="year_issuenum">
                  </div></div></div>

                   <div class="form-group">
                    <label for="year_backloan" class="col-sm-3 control-label">收回贷款金额:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" placeholder="本年收回贷款金额" type="text" name="year_backloan" id="year_backloan">
                    <span class="input-group-addon">万元</span>
                  </div></div></div>
                    <div class="form-group">
                    <label for="year_backfamily" class="col-sm-3 control-label">收回贷款户数:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" placeholder="收回贷款户数" type="text" name="year_backfamily" id="year_backfamily">
                    <span class="input-group-addon">户</span>
                  </div></div></div>
                  <div class="form-group">
                    <label for="year_backnum" class="col-sm-3 control-label">收回贷款笔数:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" placeholder="收回贷款笔数" type="text" name="year_backnum" id="year_backnum">
                    
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
                    <input class="form-control" placeholder="涉农贷款金额" type="text" name="farmer_loan_remainder" id="farmer_loan_remainder">
                    <span class="input-group-addon">万元</span>
                  </div></div></div>
                      <div class="form-group">
                    <label for="farmer_loan_family" class="col-sm-3 control-label">贷款户数:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" placeholder="涉农贷款户数" type="text" name="farmer_loan_family" id="farmer_loan_family">
                    <span class="input-group-addon">户</span>
                  </div></div></div>

                   <div class="form-group">
                    <label for="farmer_issue" class="col-sm-3 control-label">累计发放金额:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" placeholder="累计发放金额" type="text" name="farmer_issue" id="farmer_issue">
                    <span class="input-group-addon">万元</span>
                  </div></div></div>
                   <div class="form-group">
                    <label for="farmer_backnum" class="col-sm-3 control-label">累计发放户数:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" placeholder="累计发放户数" type="text" name="farmer_backnum" id="farmer_backnum">
                    <span class="input-group-addon">户</span>
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
                    <input class="form-control" placeholder="涉农贷款金额" type="text" name="company_loan_remainder" id="company_loan_remainder">
                    <span class="input-group-addon">万元</span>
                  </div></div></div>
                      <div class="form-group">
                    <label for="company_loan_family" class="col-sm-3 control-label">贷款户数:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" placeholder="涉农贷款户数" type="text" name="company_loan_family" id="company_loan_family">
                    <span class="input-group-addon">户</span>
                  </div></div></div>

                   <div class="form-group">
                    <label for="company_issue" class="col-sm-3 control-label">累计发放金额:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" placeholder="累计发放金额" type="text" name="company_issue" id="company_issue">
                    <span class="input-group-addon">万元</span>
                  </div></div></div>
                   <div class="form-group">
                    <label for="company_backnum" class="col-sm-3 control-label">累计发放户数:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" placeholder="累计发放户数" type="text" name="company_backnum" id="company_backnum">
                    <span class="input-group-addon">户</span>
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
                    <input class="form-control" placeholder="涉农贷款金额" type="text" name="total_remainder" id="total_remainder">
                    <span class="input-group-addon">万元</span>
                  </div></div></div>
                      <div class="form-group">
                    <label for="total_loan_family" class="col-sm-3 control-label">贷款户数:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" placeholder="涉农贷款户数" type="text" name="total_loan_family" id="total_loan_family">
                    <span class="input-group-addon">户</span>
                  </div></div></div>

                   <div class="form-group">
                    <label for="total_issue" class="col-sm-3 control-label">累计发放金额:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" placeholder="累计发放金额" type="text" name="total_issue" id="total_issue">
                    <span class="input-group-addon">万元</span>
                  </div></div></div>
                   <div class="form-group">
                    <label for="total_backnum" class="col-sm-3 control-label">累计发放户数:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" placeholder="累计发放户数" type="text" name="total_backnum" id="total_backnum">
                    <span class="input-group-addon">户</span>
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
                    <input class="form-control" placeholder="涉农贷款金额" type="text" name="person_loan_remainder" id="person_loan_remainder">
                    <span class="input-group-addon">万元</span>
                  </div></div></div>
                      <div class="form-group">
                    <label for="person_loan_family" class="col-sm-3 control-label">贷款户数:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" placeholder="涉农贷款户数" type="text" name="person_loan_family" id="person_loan_family">
                    <span class="input-group-addon">户</span>
                  </div></div></div>

                   <div class="form-group">
                    <label for="person_issue" class="col-sm-3 control-label">累计发放金额:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" placeholder="累计发放金额" type="text" name="person_issue" id="person_issue">
                    <span class="input-group-addon">万元</span>
                  </div></div></div>
                   <div class="form-group">
                    <label for="person_backnum" class="col-sm-3 control-label">累计发放户数:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" placeholder="累计发放户数" type="text" name="person_backnum" id="person_backnum">
                    <span class="input-group-addon">户</span>
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
                    <input class="form-control" placeholder="今年内累计纳税支出" type="text" name="paytaxes" id="paytaxes">
                    <span class="input-group-addon">万元</span>
                  </div></div></div>
                      <div class="form-group">
                    <label for="saletax" class="col-sm-3 control-label">累计营业税金及附加支出:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" placeholder="累计营业税金及附加支出" type="text" name="saletax" id="saletax">
                    <span class="input-group-addon">万元</span>
                  </div></div></div>

                   <div class="form-group">
                    <label for="incometax" class="col-sm-3 control-label">累计所得税支出:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" placeholder="累计所得税支出" type="text" name="incometax" id="incometax">
                    <span class="input-group-addon">万元</span>
                  </div></div></div>
                  </div></div>

                <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">注释及说明</h3>
                </div><!-- /.box-header -->

                <div class="box-body">
              <div class="form-group">
                      <label for="description">注释及说明</label>
                      <textarea class="form-control" rows="3" id="description" name="description" placeholder="注释及说明"></textarea>
                    </div>
              <div class="box-footer">
                    <button type="submit" class="btn btn-primary">提交</button>
                  </div>
            </div><!--/.col (right) -->
          </div>

          </div>
        </form>
       
 @endsection