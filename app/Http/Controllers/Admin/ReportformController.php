<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\reportform;

class ReportformController extends Controller
{


    //get 请求报表页面
    public function addreport()
    {
    	 # code...
           return view('admin.addreport');
    }


     //提交报表
    public static function submitreport(Request $request)
    {
        $report = new reportform;
        $request->all();
        $report->uid=1;
        $report->areacode='232353';
      


        $report->total_capital=$request->input('total_capital');
        $report->money_capital=$request->input('money_capital');
        $report->total_capital=$request->input('other_capital');
        $report->total_capital=$request->input('total_debtcapital');

        $report->total_capital=$request->input('total_debtcapital');
        $report->total_capital=$request->input('paidup_capital');
        $report->total_capital=$request->input('income');
        $report->total_capital=$request->input('loan_income');
        $report->total_capital=$request->input('profit_income');
        $report->total_capital=$request->input('loan_remainder');
        $report->total_capital=$request->input('bad_remainder');
        $report->total_capital=$request->input('loan_family');
       $report->total_capital=$request->input('loan_num');
        $report->total_capital=$request->input('year_issueloan');
        $report->total_capital=$request->input('year_issuefamily');
        $report->total_capital=$request->input('year_issuenum');
        $report->total_capital=$request->input('year_backloan');
        $report->total_capital=$request->input('year_backfamily');
        $report->total_capital=$request->input('year_backnum');
        $report->total_capital=$request->input('farmer_loan_remainder');
        $report->total_capital=$request->input('farmer_loan_family');
        $report->total_capital=$request->input('farmer_issue');
        $report->total_capital=$request->input('farmer_backnum');
        $report->total_capital=$request->input('company_loan_remainder');
        $report->total_capital=$request->input('company_loan_family');
        $report->total_capital=$request->input('company_issue');
        $report->total_capital=$request->input('company_backnum');
        $report->total_capital=$request->input('total_remainder');
        $report->total_capital=$request->input('total_loan_family');
        $report->total_capital=$request->input('total_issue');
        $report->total_capital=$request->input('total_backnum');
        $report->total_capital=$request->input('person_loan_remainder');
        $report->total_capital=$request->input('person_loan_family');
        $report->total_capital=$request->input('person_issue');
        $report->total_capital=$request->input('person_backnum');
        $report->total_capital=$request->input('normal_loan_remainder');
        $report->total_capital=$request->input('normal_loan_family');
        $report->total_capital=$request->input('month_loan_remainder');
        $report->total_capital=$request->input('month_loan_family');
        $report->total_capital=$request->input('quarter_loan_remainder');
        $report->total_capital=$request->input('quarter_loan_family');
        $report->total_capital=$request->input('ninety_loan_remainder');
        $report->total_capital=$request->input('ninety_loan_family');
        $report->total_capital=$request->input('highest_interest');
        $report->total_capital=$request->input('lowest_interest');
        $report->total_capital=$request->input('Average_interest');
        $report->total_capital=$request->input('normal_loan');
        $report->total_capital=$request->input('follow_loan');
        $report->total_capital=$request->input('second_loan');
        $report->total_capital=$request->input('doubt_loan');
        $report->total_capital=$request->input('noback_loan');
        $report->total_capital=$request->input('credit_loan_remainder');
        $report->total_capital=$request->input('credit_loan_family');
        $report->total_capital=$request->input('promise_loan_remainder');
        $report->total_capital=$request->input('promise_loan_family');
        $report->total_capital=$request->input('mortgage_loan_remainder');
        $report->total_capital=$request->input('mortgage_loan_family');
        $report->total_capital=$request->input('pledge_loan_remainder');
        $report->total_capital=$request->input('pledge_loan_family');
        $report->total_capital=$request->input('other_loan_remainder');
        $report->total_capital=$request->input('other_loan_family');
        $report->total_capital=$request->input('bank_financing');
        $report->total_capital=$request->input('shareholder_loan');
        $report->total_capital=$request->input('profit_transfer');
        $report->total_capital=$request->input('bond_bill');
        $report->total_capital=$request->input('parterner_loan');
        $report->total_capital=$request->input('securitisation');
        $report->total_capital=$request->input('market_capital');
        $report->total_capital=$request->input('othertype_capital');
        $report->total_capital=$request->input('othermoney');
        $report->total_capital=$request->input('paytaxes');
        $report->total_capital=$request->input('saletax');
        $report->total_capital=$request->input('incometax');
        $report->total_capital=$request->input('description');
  
       $report->save();
    }

}
