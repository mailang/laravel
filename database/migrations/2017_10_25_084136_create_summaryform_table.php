<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSummaryformTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('summaryform', function (Blueprint $table) {
            $table->increments('id');
    
             //users表中id
            $table->integer('uid')->unsigned();
             //地区
            $table->string('areacode');
            //本辖区机构数量
            $table->integer('all_ins_num');
            //法人机构数量
            $table->integer('lp_ins_num');
            //按注册资本金额划分
            $table->integer('gt500m_num');
            $table->integer('200mto500m_num');
            $table->integer('100mto200m_num');
            $table->integer('50mto100m_num');
            $table->integer('lt50m_num');

            //按注册资本构成划分
            $table->integer('sh_num');
            $table->integer('ph_num');
            $table->integer('fh_num');

            //业务开展情况
            $table->integer('allp_num');
            $table->integer('net_num');

            //机构增设、退出情况
            $table->integer('add_num')->default(0);
            $table->integer('del_num')->default(0);

            //分支机构数量
            $table->integer('branch_ins_num');
            $table->integer('op_num');

            //从业人数
            $table->integer('p_num');

            //财务情况
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
            $table->float('income')->default(0);
            //贷款利息收入
            $table->float('loan_income')->default(0);
            //净利润
            $table->float('profit_income')->default(0);

            //贷款情况
            //贷款余额
            $table->float('loan_remainder');
            //不良贷款余额
            $table->float('bad_remainder');
            //贷款户数
            $table->integer('loan_family');
            //贷款笔数
            $table->integer('loan_num');
            //本年内发放贷款金额
            $table->float('year_issueloan')->default(0);
            //本年内发放贷款户数
            $table->integer('year_issuefamily')->default(0);
            //本年发放内贷款笔数
            $table->integer('year_issuenum')->default(0);

            //按服务对象划分
            //涉农贷款余额、户数、累计发放金额、累计发放户数
            $table->float('farmer_loan_remainder');
            $table->integer('farmer_loan_family');
            $table->float('farmer_issue')->default(0);
            $table->integer('farmer_backnum')->default(0);
            // 小微企业贷款余额、户数、累计发放金额、累计发放户数
            $table->float('company_loan_remainder');
            $table->integer('company_loan_family');
            $table->float('company_issue')->default(0);
            $table->integer('company_backnum')->default(0);
            //涉农及小微贷款合计贷款余额、户数、累计发放金额、累计发放户数
            $table->float('total_remainder');
            $table->integer('total_loan_family');
            $table->float('total_issue')->default(0);
            $table->integer('total_backnum')->default(0);
            //个人贷款
            $table->float('person_loan_remainder');
            $table->integer('person_loan_family');
            $table->float('person_issue')->default(0);
            $table->integer('person_backnum')->default(0);

            //按资产质量划分
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

            //利率
            //利率:最高、最低、平均
            $table->float('highest_interest')->default(0);
            $table->float('lowest_interest')->default(0);
            $table->float('Average_interest')->default(0);

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

            //贷款投向
            $table->float('loantocounty_remainder');
            $table->integer('loantocounty_family');
            $table->float('loantocity_remainder');
            $table->integer('loantocity_family');

            //银行融资、股东借款、收益权转让、债券票据、小贷公司同业拆借
            $table->float('bank_financing')->default(0);
            $table->float('shareholder_loan')->default(0);
            $table->float('profit_transfer')->default(0);
            $table->float('bond_bill')->default(0);
            $table->float('parterner_loan')->default(0);

            //资产证券化、资本市场挂牌、其他（分别填报类型及金额）
            $table->float('securitisation')->default(0);
            $table->float('market_capital')->default(0);
            $table->string('othertype_capital')->nullable();
            $table->float('othermoney')->nullable();
            //今年内累计纳税支出
            $table->float('paytaxes')->default(0);
            //年内累计营业税金及附加支出
            $table->float('saletax')->default(0);
            //年内累计所得税支出
            $table->float("incometax")->default(0);
            //注释及说明
            $table->string('description')->nullable();
            //单位负责人
            $table->string('leader')->nullable();
            //上传几月的报表
            $table->dateTime('dtime');

            $table->timestamps();
        });

      Schema::table('summaryform', function($table) {
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
        Schema::dropIfExists('summaryform');
    }
}
