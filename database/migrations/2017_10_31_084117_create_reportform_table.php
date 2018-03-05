<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportformTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportform', function (Blueprint $table) {
            $table->increments('id');
            //users表中id
            $table->integer('uid')->unsigned();
             //地区
            $table->string('areacode');
            //资产总额
            $table->float('total_capital');
            //货币资产
            $table->float('money_capital');
           //其他资产
            $table->float('other_capital'); 
            //负债总额
            $table->float('total_debtcapital'); 
            //实收资本
            $table->float('paidup_capital'); 
            //营业收入
            $table->float('income'); 
            //贷款利息收入
            $table->float('loan_income'); 
            //净利润
            $table->float('profit_income'); 
            //贷款余额
            $table->float('loan_remainder'); 
            //不良贷款余额
            $table->float('bad_remainder'); 
            //贷款户数
            $table->integer('loan_family'); 
            //贷款笔数
            $table->integer('loan_num'); 
             //本年内发放贷款金额
             $table->float('year_issueloan'); 
             //本年内发放贷款户数
             $table->integer('year_issuefamily'); 
            //本年发放内贷款笔数
             $table->integer('year_issuenum'); 
             
             //本年内收回贷款金额
             $table->float('year_backloan'); 
             //本年内收回贷款户数
             $table->integer('year_backfamily'); 
             //本年收回内贷款笔数
             $table->integer('year_backnum'); 
             //涉农贷款余额、户数、累计发放金额、累计发放户数
           $table->float('farmer_loan_remainder'); 
           $table->integer('farmer_loan_family'); 
           $table->float('farmer_issue'); 
           $table->integer('farmer_backnum'); 
           // 小微企业贷款余额、户数、累计发放金额、累计发放户数
           $table->float('company_loan_remainder'); 
           $table->integer('company_loan_family'); 
           $table->float('company_issue'); 
           $table->integer('company_backnum'); 
           //涉农及小微贷款合计贷款余额、户数、累计发放金额、累计发放户数
            $table->float('total_remainder'); 
           $table->integer('total_loan_family'); 
           $table->float('total_issue'); 
           $table->integer('total_backnum'); 
           //个人贷款
           $table->float('person_loan_remainder'); 
           $table->integer('person_loan_family'); 
           $table->float('person_issue'); 
           $table->integer('person_backnum');
            //正常贷款余额、户数
           $table->float('normal_loan_remainder'); 
           $table->integer('normal_loan_family'); 
          //逾期30天（含）以下
           $table->float('month_loan_remainder'); 
           $table->integer('month_loan_family'); 
          //逾期30天-90天
           $table->float('quarter_loan_remainder'); 
           $table->integer('quarter_loan_family'); 
           //逾期90天以上
           $table->float('ninety_loan_remainder'); 
           $table->integer('ninety_loan_family'); 
           //利率:最高、最低、平均

            $table->float('highest_interest');
           $table->float('lowest_interest');
           $table->float('Average_interest');

            //贷款五级分类:正常、关注、次级类、可疑类、损失类
           $table->float('normal_loan'); 
           $table->float('follow_loan'); 
           $table->float('second_loan'); 
           $table->float('doubt_loan');
           $table->float('noback_loan'); 
                // 贷款种类信用贷款、保证担保、抵押担保、质押担保、其他方式
           $table->float('credit_loan_remainder');
           $table->integer('credit_loan_family');

           $table->float('promise_loan_remainder');
           $table->integer('promise_loan_family');

            $table->float('mortgage_loan_remainder');
           $table->integer('mortgage_loan_family');

            $table->float('pledge_loan_remainder');
            $table->integer('pledge_loan_family');

            $table->float('other_loan_remainder');
            $table->integer('other_loan_family');
          //银行融资、股东借款、收益权转让、债券票据、小贷公司同业拆借
              $table->float('bank_financing');
              $table->float('shareholder_loan');
              $table->float('profit_transfer');
              $table->float('bond_bill');
              $table->float('parterner_loan');

           //资产证券化、资本市场挂牌、其他（分别填报类型及金额）
              $table->float('securitisation');
              $table->float('market_capital');
              $table->string('othertype_capital')->nullable();
              $table->float('othermoney')->nullable();
           //今年内累计纳税支出 
              $table->float('paytaxes');
           //年内累计营业税金及附加支出
              $table->float('saletax')->default(0);
           //年内累计所得税支出
              $table->float("incometax");
             //注释及说明
              $table->string('description')->nullable();
              //上传几月的报表
              $table->dateTime('dtime');
              //0:可以修改；1不可以修改
              $table->integer('edit')->default(0);

              $table->timestamps();
        });

        Schema::table('reportform', function($table) {
        $table->foreign('uid')->references('id')->on('users');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reportform');
    }
}
