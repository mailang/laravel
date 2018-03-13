<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class reportform extends Model
{
   /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'reportform';
    public $timestamps = true;//false;
    public $primaryKey = 'id';


     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','uid', 'areacode', 'total_capital', 'money_capital', 'other_capital',
'total_debtcapital','paidup_capital', 'income', 'loan_income', 'profit_income', 'loan_remainder',
'bad_remainder','loan_family','loan_num','year_issueloan','year_issuefamily','year_issuenum','  year_backloan','year_backfamily','year_backnum','farmer_loan_remainder','farmer_loan_family','farmer_issue','farmer_backnum','company_loan_remainder','company_loan_family','company_issue','company_backnum','total_remainder','total_loan_family',
   'total_issue','total_backnum','person_loan_remainder','person_loan_family','person_issue','person_backnum','normal_loan_remainder',
   'normal_loan_family','month_loan_remainder','month_loan_family','quarter_loan_remainder','quarter_loan_family','ninety_loan_remainder'
,'ninety_loan_family','highest_interest','lowest_interest','Average_interest','normal_loan','follow_loan','second_loan','doubt_loan','noback_loan','credit_loan_remainder','credit_loan_family','promise_loan_remainder','promise_loan_family','mortgage_loan_remainder',
'mortgage_loan_family','pledge_loan_remainder','pledge_loan_family','other_loan_remainder','other_loan_family','bank_financing','shareholder_loan','profit_transfer','bond_bill','parterner_loan','securitisation','market_capital','othertype_capital','othermoney',
'paytaxes','saletax',"incometax",'description','edit'];
 protected $hidden = ['id'];
}
