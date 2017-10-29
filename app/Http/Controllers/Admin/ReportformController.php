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

      var_dump($req);
  $report = new Reportform;      
  $report->uid=1;      
  $report->areacode='232353';     
  $result = $report->where('uid',$report->uid)->get();
  if ($result->isEmpty()) { 
    $report->total_capital=$req['total_capital']; 
   echo $req['total_capital'];  
   echo $report->total_capital;
  $report->money_capital=$req['money_capital'];       
  $report->total_capital=$req['other_capital']; 
  $report->total_capital=$req['total_debtcapital'];    
  $report->total_capital=$req['total_debtcapital'];     
  $report->total_capital=$req['paidup_capital'];    
  $report->total_capital=$req['income'];      
  $report->total_capital=$req['loan_income'];     
  $report->total_capital=$req['profit_income'];      
  $report->total_capital=$req['loan_remainder'];     
  $report->total_capital=$req['bad_remainder'];   
  $report->total_capital=$req['loan_family'];    
  $report->total_capital=$req['loan_num'];       
  $report->total_capital=$req['year_issueloan']; 
  $report->total_capital=$req['year_issuefamily'];     
  $report->total_capital=$req['year_issuenum'];     
  $report->total_capital=$req['year_backloan'];       
  $report->total_capital=$req['year_backfamily'];    
  $report->total_capital=$req['year_backnum'];     
  $report->total_capital=$req['farmer_loan_remainder']; 
  $report->total_capital=$req['farmer_loan_family']; 
  $report->total_capital=$req['farmer_issue'];     
  $report->total_capital=$req['farmer_backnum'];      
  $report->total_capital=$req['company_loan_remainder'];
  $report->total_capital=$req['company_loan_family'];      
  $report->total_capital=$req['company_issue'];       
  $report->total_capital=$req['company_backnum'];     
  $report->total_capital=$req['total_remainder'];      
  $report->total_capital=$req['total_loan_family'];  
  $report->total_capital=$req['total_issue'];      
  $report->total_capital=$req['total_backnum'];     
  $report->total_capital=$req['person_loan_remainder']; 
  $report->total_capital=$req['person_loan_family'];      
  $report->total_capital=$req['person_issue'];      
  $report->total_capital=$req['person_backnum'];   
  $report->total_capital=$req['normal_loan_remainder'];    
  $report->total_capital=$req['normal_loan_family'];    
  $report->total_capital=$req['month_loan_remainder'];     
  $report->total_capital=$req['month_loan_family'];      
  $report->total_capital=$req['quarter_loan_remainder'];     
  $report->total_capital=$req['quarter_loan_family'];    
  $report->total_capital=$req['ninety_loan_remainder'];  
  $report->total_capital=$req['ninety_loan_family'];       
  $report->total_capital=$req['highest_interest'];  
  $report->total_capital=$req['lowest_interest'];      
  $report->total_capital=$req['Average_interest'];   
  $report->total_capital=$req['normal_loan'];       
  $report->total_capital=$req['follow_loan'];      
  $report->total_capital=$req['second_loan'];     
  $report->total_capital=$req['doubt_loan'];     
  $report->total_capital=$req['noback_loan'];     
  $report->total_capital=$req['credit_loan_remainder'];    
  $report->total_capital=$req['credit_loan_family'];       
  $report->total_capital=$req['promise_loan_remainder'];     
  $report->total_capital=$req['promise_loan_family'];       
  $report->total_capital=$req['mortgage_loan_remainder'];   
  $report->total_capital=$req['mortgage_loan_family'];      
  $report->total_capital=$req['pledge_loan_remainder'];    
  $report->total_capital=$req['pledge_loan_family'];     
  $report->total_capital=$req['other_loan_remainder'];  
  $report->total_capital=$req['other_loan_family'];     
  $report->total_capital=$req['bank_financing'];      
  $report->total_capital=$req['shareholder_loan'];   
  $report->total_capital=$req['profit_transfer'];    
  $report->total_capital=$req['bond_bill'];        
  $report->total_capital=$req['parterner_loan'];   
  $report->total_capital=$req['securitisation'];    
  $report->total_capital=$req['market_capital'];   
  $report->total_capital=$req['othertype_capital']; 
  $report->total_capital=$req['othermoney'];     
  $report->total_capital=$req['paytaxes'];       
  $report->total_capital=$req['saletax'];        
  $report->total_capital=$req['incometax'];   
  $report->total_capital=$req['description'];  
  if ($report->save()) {//return redirect('admin/addreport')->with('status', '上传成功！ :)');
  json_or_dd($report);
}
   else {// return redirect()->back()->withInput()->withErrors('保存失败！');
}
}
else
   { //return redirect()->back()->withInput()->withErrors('数据已提交');
}
}



}
