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
       // 一级审核显示的列表页
    public function firstverify()
    {
         # code...
        
           $report =$report->where('uid',$report->uid)->get();
           return view('admin.reportform');
    }
     


    /**
     * 根据id查询报表
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $report = reportform::find($id);
        $this->json_or_dd($report->toArray());
    }

   public function store()
    {
        $data = \Request::all();
        $reportform = reportform::create($data);
        $this->json_or_dd($reportform->toArray());
    }
     //提交报表
    public static function submitreport(Request $request)
    {
       // 过滤空值，并且trim
    $req = collect($request)->map(function ($item) {
        if (is_string($item)) {
            $item = empty(trim($item)) ? null : trim($item);
        }
        return $item;
    });

      //var_dump($req);
  $report = new Reportform;      
  $report->uid=1;      
  $report->areacode='232353';     
  $result = $report->where('uid',$report->uid)->get();
  if ($result->isEmpty()) { 
    $report->total_capital=$req['total_capital']; 
  $report->money_capital=$req['money_capital'];       
  $report->other_capital=$req['other_capital']; 
  $report->total_debtcapital=$req['total_debtcapital'];    
  $report->total_debtcapital=$req['total_debtcapital'];     
  $report->paidup_capital=$req['paidup_capital'];    
  $report->income=$req['income'];      
  $report->loan_income=$req['loan_income'];     
  $report->profit_income=$req['profit_income'];      
  $report->loan_remainder=$req['loan_remainder'];     
  $report->bad_remainder=$req['bad_remainder'];   
  $report->loan_family=$req['loan_family'];    
  $report->loan_num=$req['loan_num'];       
  $report->year_issueloan=$req['year_issueloan']; 
  $report->year_issuefamily=$req['year_issuefamily'];     
  $report->year_issuenum=$req['year_issuenum'];     
  $report->year_backloan=$req['year_backloan'];       
  $report->year_backfamily=$req['year_backfamily'];    
  $report->year_backnum=$req['year_backnum'];     
  $report->farmer_loan_remainder=$req['farmer_loan_remainder']; 
  $report->farmer_loan_family=$req['farmer_loan_family']; 
  $report->farmer_issue=$req['farmer_issue'];     
  $report->farmer_backnum=$req['farmer_backnum'];      
  $report->company_loan_remainder=$req['company_loan_remainder'];
  $report->company_loan_family=$req['company_loan_family'];      
  $report->company_issue=$req['company_issue'];       
  $report->company_backnum=$req['company_backnum'];     
  $report->total_remainder=$req['total_remainder'];      
  $report->total_loan_family=$req['total_loan_family'];  
  $report->total_issue=$req['total_issue'];      
  $report->total_backnum=$req['total_backnum'];     
  $report->person_loan_remainder=$req['person_loan_remainder']; 
  $report->person_loan_family=$req['person_loan_family'];      
  $report->person_issue=$req['person_issue'];      
  $report->person_backnum=$req['person_backnum'];   
  $report->normal_loan_remainder=$req['normal_loan_remainder'];    
  $report->normal_loan_family=$req['normal_loan_family'];    
  $report->month_loan_remainder=$req['month_loan_remainder'];     
  $report->month_loan_family=$req['month_loan_family'];      
  $report->quarter_loan_remainder=$req['quarter_loan_remainder'];     
  $report->quarter_loan_family=$req['quarter_loan_family'];    
  $report->ninety_loan_remainder=$req['ninety_loan_remainder'];  
  $report->ninety_loan_family=$req['ninety_loan_family'];       
  $report->highest_interest=$req['highest_interest'];  
  $report->lowest_interest=$req['lowest_interest'];      
  $report->Average_interest=$req['Average_interest'];   
  $report->normal_loan=$req['normal_loan'];       
  $report->follow_loan=$req['follow_loan'];      
  $report->second_loan=$req['second_loan'];     
  $report->doubt_loan=$req['doubt_loan'];     
  $report->noback_loan=$req['noback_loan'];     
  $report->credit_loan_remainder=$req['credit_loan_remainder'];    
  $report->credit_loan_family=$req['credit_loan_family'];       
  $report->promise_loan_remainder=$req['promise_loan_remainder'];     
  $report->promise_loan_family=$req['promise_loan_family'];       
  $report->mortgage_loan_remainder=$req['mortgage_loan_remainder'];   
  $report->mortgage_loan_family=$req['mortgage_loan_family'];      
  $report->pledge_loan_remainder=$req['pledge_loan_remainder'];    
  $report->pledge_loan_family=$req['pledge_loan_family'];     
  $report->other_loan_remainder=$req['other_loan_remainder'];  
  $report->other_loan_family=$req['other_loan_family'];     
  $report->bank_financing=$req['bank_financing'];      
  $report->shareholder_loan=$req['shareholder_loan'];   
  $report->profit_transfer=$req['profit_transfer'];    
  $report->bond_bill=$req['bond_bill'];        
  $report->parterner_loan=$req['parterner_loan'];   
  $report->securitisation=$req['securitisation'];    
  $report->market_capital=$req['market_capital'];   
  $report->othertype_capital=$req['othertype_capital']; 
  $report->othermoney=$req['othermoney'];     
  $report->paytaxes=$req['paytaxes'];       
  $report->saletax=$req['saletax'];        
  $report->incometax=$req['incometax'];   
  $report->description=$req['description'];  
  if ($report->save()) {
    echo '<script>alert("上传成功！");window.location.href="admin/addreport";</script>';
  //json_or_dd($report);
}
   else { echo '<script>alert("保存失败！");window.location.href="admin/addreport";</script>';
}
}
else
   {
    echo '<script>alert("数据已提交");window.location.href="admin/addreport";</script>';
}
}



}
