<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\reportform;
use App\Models\Area;
use App\Models\Company;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Excel;
use PHPExcel;
use PHPExcel_IOFactory;
use App\Src\timedefine;

define('base_path',str_replace('\\','/',realpath(dirname(__FILE__).'/../../'))."/");
class ReportformController extends Controller
{
    function __construct()
    {

    }

    /**
     * @param $id 报表id
     * 报表导出
     */
    public function export($id)
    {
        $inputFileName=base_path.'excel/'.iconv('UTF-8', 'GBK//IGNORE','template' ).'.xls';
        $inputFileType='Excel5';
        $objReader = PHPExcel_IOFactory::createReader($inputFileType);
        $excel=$objReader->load($inputFileName);
        $report=reportform::find($id);
        $company=DB::table('company')->where('uid',$report->uid)->first();

        $excel->getActiveSheet()->setCellValue('A3', $company->name);
        $excel->getActiveSheet()->setCellValue('D3', $report->created_at);

        $excel->getActiveSheet()->setCellValue('G5', $report->total_capital);
        $excel->getActiveSheet()->setCellValue('G6', $report->money_capital);
        $excel->getActiveSheet()->setCellValue('G7', $report->other_capital);
        $excel->getActiveSheet()->setCellValue('G8', $report->total_debtcapital);

        $excel->getActiveSheet()->setCellValue('G9', $report->paidup_capital);
        $excel->getActiveSheet()->setCellValue('G10', $report->income);
        $excel->getActiveSheet()->setCellValue('G11', $report->loan_income);
        $excel->getActiveSheet()->setCellValue('G12', $report->profit_income);
        $excel->getActiveSheet()->setCellValue('G13', $report->loan_remainder);
        $excel->getActiveSheet()->setCellValue('G14', $report->bad_remainder);
        $excel->getActiveSheet()->setCellValue('G15', $report->loan_family);
        $excel->getActiveSheet()->setCellValue('G16', $report->loan_num);
        $excel->getActiveSheet()->setCellValue('G17', $report->year_issueloan);
        $excel->getActiveSheet()->setCellValue('G18', $report->year_issuefamily);
        $excel->getActiveSheet()->setCellValue('G19', $report->year_issuenum);

        $excel->getActiveSheet()->setCellValue('G20', $report->year_backloan);
        $excel->getActiveSheet()->setCellValue('G21', $report->year_backfamily);
        $excel->getActiveSheet()->setCellValue('G22', $report->year_backnum);

        $excel->getActiveSheet()->setCellValue('G23', $report->farmer_loan_remainder);
        $excel->getActiveSheet()->setCellValue('G24', $report->farmer_loan_family);
        $excel->getActiveSheet()->setCellValue('G25', $report->farmer_issue);
        $excel->getActiveSheet()->setCellValue('G26', $report->farmer_backnum);

        $excel->getActiveSheet()->setCellValue('G27', $report->company_loan_remainder);
        $excel->getActiveSheet()->setCellValue('G28', $report->company_loan_family);
        $excel->getActiveSheet()->setCellValue('G29', $report->company_issue);
        $excel->getActiveSheet()->setCellValue('G30', $report->company_backnum);

        $excel->getActiveSheet()->setCellValue('G31', $report->total_remainder);
        $excel->getActiveSheet()->setCellValue('G32', $report->total_loan_family);
        $excel->getActiveSheet()->setCellValue('G33', $report->total_issue);
        $excel->getActiveSheet()->setCellValue('G34', $report->total_backnum);

        $excel->getActiveSheet()->setCellValue('G35', $report->person_loan_remainder);
        $excel->getActiveSheet()->setCellValue('G36', $report->person_loan_family);
        $excel->getActiveSheet()->setCellValue('G37', $report->person_issue);
        $excel->getActiveSheet()->setCellValue('G38', $report->person_backnum);

        $excel->getActiveSheet()->setCellValue('G39', $report->normal_loan_remainder);
        $excel->getActiveSheet()->setCellValue('G40', $report->normal_loan_family);

        $excel->getActiveSheet()->setCellValue('G41', $report->month_loan_remainder);
        $excel->getActiveSheet()->setCellValue('G42', $report->month_loan_family);
        $excel->getActiveSheet()->setCellValue('G43', $report->quarter_loan_remainde);
        $excel->getActiveSheet()->setCellValue('G44', $report->quarter_loan_family);

        $excel->getActiveSheet()->setCellValue('G45', $report->ninety_loan_remainder);
        $excel->getActiveSheet()->setCellValue('G46', $report->ninety_loan_family);

        $excel->getActiveSheet()->setCellValue('G47', $report->highest_interest);
        $excel->getActiveSheet()->setCellValue('G48', $report->lowest_interest);
        $excel->getActiveSheet()->setCellValue('G49', $report->Average_interest);

        $excel->getActiveSheet()->setCellValue('G50', $report->normal_loan);
        $excel->getActiveSheet()->setCellValue('G51', $report->follow_loan);
        $excel->getActiveSheet()->setCellValue('G52', $report->second_loan);
        $excel->getActiveSheet()->setCellValue('G53', $report->doubt_loan);
        $excel->getActiveSheet()->setCellValue('G54', $report->noback_loan);

        $excel->getActiveSheet()->setCellValue('G55', $report->credit_loan_remainder);
        $excel->getActiveSheet()->setCellValue('G56', $report->credit_loan_family);
        $excel->getActiveSheet()->setCellValue('G57', $report->promise_loan_remainder);
        $excel->getActiveSheet()->setCellValue('G58', $report->promise_loan_family);
        $excel->getActiveSheet()->setCellValue('G59', $report->mortgage_loan_remainder);
        $excel->getActiveSheet()->setCellValue('G60', $report->mortgage_loan_family);
        $excel->getActiveSheet()->setCellValue('G61', $report->pledge_loan_remainder);
        $excel->getActiveSheet()->setCellValue('G62', $report->pledge_loan_family);
        $excel->getActiveSheet()->setCellValue('G63', $report->other_loan_remainder);
        $excel->getActiveSheet()->setCellValue('G64', $report->other_loan_family);

        $excel->getActiveSheet()->setCellValue('G65', $report->bank_financing);
        $excel->getActiveSheet()->setCellValue('G66', $report->shareholder_loan);
        $excel->getActiveSheet()->setCellValue('G67', $report->profit_transfer);
        $excel->getActiveSheet()->setCellValue('G68', $report->bond_bill);
        $excel->getActiveSheet()->setCellValue('G69', $report->parterner_loan);

        $excel->getActiveSheet()->setCellValue('G70', $report->securitisation);
        $excel->getActiveSheet()->setCellValue('G71', $report->market_capital);
        $excel->getActiveSheet()->setCellValue('G72', $report->othermoney);
        $excel->getActiveSheet()->setCellValue('G73', $report->paytaxes);
        //$excel->getActiveSheet()->setCellValue('G74', $report->saletax);
        $excel->getActiveSheet()->setCellValue('G74', $report->incometax);
        $excel->getActiveSheet()->setCellValue('D75',$report->description);
        $excel-> setActiveSheetIndex(0);
        $objWriter =PHPExcel_IOFactory :: createWriter($excel, 'Excel5');

        header('Content-Type:application/vnd.ms-excel');
        header('Content-Disposition:attachment;filename="'.$company->name. date('Y-m',strtotime($report->dtime)). '.xls"');
        header('Cache-Control:max-age=0');
        $objWriter-> save('php://output');
    }

    /*get 请求报表页面*/
    public function addreport(Request $request, $old = null)
    {
        $user = Auth::user();

        $datenew = timedefine::getdatenew();
        $dateold = timedefine::getdateold();


        $isuploadedold = Reportform::where("uid", $user->id)->whereDate('dtime', $dateold)->first();
        $isuploadednew = Reportform::where("uid", $user->id)->whereDate('dtime', $datenew)->first();
        if (!$isuploadedold) {
            $request->session()->flash('modeltext', "您需先补填历史报表！");
            $time = $dateold;
        } else {
            if ($isuploadednew) {
                return view("admin.report.isuploaded");
            } else {
                $time = $datenew;
            }
        }
        //dd($time);
        $data["timetitle"] = date("Y年m月", strtotime($time)) . "份报表";
        $data["timea"] = date("Y年m月", strtotime($time)) . "底";
        //$timep = date()
        if (date('m', strtotime($time)) == "1") {
            $data["timep"] = date("Y年m月", strtotime($time)) . "份";
        } else {
            $data["timep"] = date("Y年1-m月", strtotime($time)) . "份";
        }
        $data["dtime"] = $time;
        //dd($data);
        $company = Company::where('uid','=',$user->id)->first();
        $data['reg_capital'] = $company->reg_capital;
        $data['name'] = $company->name;
        //dd($data);
        return view('admin.report.addreport')->with("data", $data);

    }

    //根据报表id查看报表信息
    public function seereport($id = null)
    {
        # code...
        $user = Auth::user();
        $reportform = new Reportform;
        if ($id) {
             $report = $reportform->where('id', $id)->get()->first();
             $company=Company::where('uid',$report->uid)->get(['name'])->first();
        }
        if ($report) {
            return view('admin.report.reportform', compact('report','company'));
        } else {
            flash("数据未上传！请上传!", "error");
            return view('admin.report.addreport');
        }
    }

    // 一级审核显示的列表页
    public function reportlist($areacode = null)
    {
        #
        $user = Auth::user();
        $areacode = $user['areacode'];
        $type = $user['type'];
        $field = ['reportform.id', 'reportform.updated_at', 'reportform.dtime', 'company.name', 'company.code','edit','company.id as cid'];
        if ($type == 1) {
            //企业登录查看上传的报表
            $reports = DB::table('company')
                ->rightJoin('reportform', 'company.uid', '=', 'reportform.uid')
                ->where('reportform.uid', $user['id'])
                ->orderBy('reportform.updated_at', 'desc')
                ->get($field);

        } else {
            $isfirst = Area::where('pcode', $areacode)->get();
            if ($isfirst->isEmpty()) {
                //区级审核者审核区以下企业报表
                $reports = DB::table('company')
                    ->rightJoin('reportform', 'company.uid', '=', 'reportform.uid')
                    ->where('reportform.areacode', $areacode)
                    ->orderBy('reportform.updated_at', 'desc')
                    ->get($field);
            } else
                return view('index');
        }
        return view('admin.report.reportformlist', compact('reports'));
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

    //查看本月是否已提交报表，已提交则不可以继续添加
    public static function submitreport(Request $request)
    {
        // 过滤空值，并且trim
//        $req = collect($request)->map(function ($item) {
//            if (is_string($item)) {
//                $item = empty(trim($item)) ? null : trim($item);
//            }
//            return $item;
//        });
        $req = $request;
        $report = new Reportform;
        $user = Auth::user();
        $datenew = timedefine::getdatenew();
        $report->uid = $user['id'];
        $report->areacode = $user['areacode'];

        $result = $report->where('uid', $report->uid)
            ->whereDate('dtime', $datenew)
            ->get();
        if ($result->isEmpty()) {
            $report->total_capital = $req['total_capital'];
            $report->money_capital = $req['money_capital'];
            $report->other_capital = $req['other_capital'];
            $report->total_debtcapital = $req['total_debtcapital'];
            $report->total_debtcapital = $req['total_debtcapital'];
            $report->paidup_capital = $req['paidup_capital'];
            $report->income = $req['income'];
            $report->loan_income = $req['loan_income'];
            $report->profit_income = $req['profit_income'];
            $report->loan_remainder = $req['loan_remainder'];
            $report->bad_remainder = $req['bad_remainder'];
            $report->loan_family = $req['loan_family'];
            $report->loan_num = $req['loan_num'];
            $report->year_issueloan = $req['year_issueloan'];
            $report->year_issuefamily = $req['year_issuefamily'];
            $report->year_issuenum = $req['year_issuenum'];
            $report->year_backloan = $req['year_backloan'];
            $report->year_backfamily = $req['year_backfamily'];
            $report->year_backnum = $req['year_backnum'];
            $report->farmer_loan_remainder = $req['farmer_loan_remainder'];
            $report->farmer_loan_family = $req['farmer_loan_family'];
            $report->farmer_issue = $req['farmer_issue'];
            $report->farmer_backnum = $req['farmer_backnum'];
            $report->company_loan_remainder = $req['company_loan_remainder'];
            $report->company_loan_family = $req['company_loan_family'];
            $report->company_issue = $req['company_issue'];
            $report->company_backnum = $req['company_backnum'];
            $report->total_remainder = $req['total_remainder'];
            $report->total_loan_family = $req['total_loan_family'];
            $report->total_issue = $req['total_issue'];
            $report->total_backnum = $req['total_backnum'];
            $report->person_loan_remainder = $req['person_loan_remainder'];
            $report->person_loan_family = $req['person_loan_family'];
            $report->person_issue = $req['person_issue'];
            $report->person_backnum = $req['person_backnum'];
            $report->normal_loan_remainder = $req['normal_loan_remainder'];
            $report->normal_loan_family = $req['normal_loan_family'];
            $report->month_loan_remainder = $req['month_loan_remainder'];
            $report->month_loan_family = $req['month_loan_family'];
            $report->quarter_loan_remainder = $req['quarter_loan_remainder'];
            $report->quarter_loan_family = $req['quarter_loan_family'];
            $report->ninety_loan_remainder = $req['ninety_loan_remainder'];
            $report->ninety_loan_family = $req['ninety_loan_family'];
            $report->highest_interest = $req['highest_interest'];
            $report->lowest_interest = $req['lowest_interest'];
            $report->Average_interest = $req['Average_interest'];
            $report->normal_loan = $req['normal_loan'];
            $report->follow_loan = $req['follow_loan'];
            $report->second_loan = $req['second_loan'];
            $report->doubt_loan = $req['doubt_loan'];
            $report->noback_loan = $req['noback_loan'];
            $report->credit_loan_remainder = $req['credit_loan_remainder'];
            $report->credit_loan_family = $req['credit_loan_family'];
            $report->promise_loan_remainder = $req['promise_loan_remainder'];
            $report->promise_loan_family = $req['promise_loan_family'];
            $report->mortgage_loan_remainder = $req['mortgage_loan_remainder'];
            $report->mortgage_loan_family = $req['mortgage_loan_family'];
            $report->pledge_loan_remainder = $req['pledge_loan_remainder'];
            $report->pledge_loan_family = $req['pledge_loan_family'];
            $report->other_loan_remainder = $req['other_loan_remainder'];
            $report->other_loan_family = $req['other_loan_family'];
            $report->bank_financing = $req['bank_financing'];
            $report->shareholder_loan = $req['shareholder_loan'];
            $report->profit_transfer = $req['profit_transfer'];
            $report->bond_bill = $req['bond_bill'];
            $report->parterner_loan = $req['parterner_loan'];
            $report->securitisation = $req['securitisation'];
            $report->market_capital = $req['market_capital'];
            $report->othertype_capital = $req['othertype_capital'];
            $report->othermoney = $req['othermoney'];
            $report->paytaxes = $req['paytaxes'];
            //$report->saletax = $req['saletax'];
            $report->incometax = $req['incometax'];
            $report->description = $req['description'];

            $report->dtime = $req['dtime'];

            if ($report->save()) {
                $datenew = timedefine::getdatenew();
                if ($req['dtime'] == $datenew){
                    flash("报表上传成功!", "success");
                }
                else{
                    flash("历史报表上传成功，请上传当本月报表!", "success");
                }

                return redirect()->back();
            } else {
                return Redirect::back()->withErrors("报表上传失败！");
            }
        } else {
            flash("本月报表已提交!", "success");
            return redirect()->back();
        }

    }

    public  function  edit($id)
    {
        $report=reportform::find($id);
        $time=$report->dtime;
        $data["timetitle"] = date("Y年m月", strtotime($time)) . "份报表";
        $data["timea"] = date("Y年m月", strtotime($time)) . "底";
        //$timep = date()
        if (date('m', strtotime($time)) == "1") {
            $data["timep"] = date("Y年m月", strtotime($time)) . "份";
        } else {
            $data["timep"] = date("Y年1-m月", strtotime($time)) . "份";
        }
        $data["dtime"] = $time;
        $user = Auth::user();
        $company = Company::where('uid','=',$user->id)->first();
        $data['reg_capital'] = $company->reg_capital;
        $data['name'] = $company->name;
        //dd($report);
        return view('admin.report.editreport',compact('report','data'));

    }
    public function  update(Request $request,$id)
    {
        $req = $request->all();
        $report=reportform::find($id);
        $report['total_capital'] = $req['total_capital'];
        $report['money_capital']= $req['money_capital'];
        $report['other_capital']= $req['other_capital'];
        $report['total_debtcapital']= $req['total_debtcapital'];
        $report['total_debtcapital']= $req['total_debtcapital'];
        $report['paidup_capital']= $req['paidup_capital'];
        $report['income']= $req['income'];
        $report['loan_income']= $req['loan_income'];
        $report['profit_income']= $req['profit_income'];
        $report['loan_remainder']= $req['loan_remainder'];
        $report['bad_remainder']= $req['bad_remainder'];
        $report['loan_family']= $req['loan_family'];
        $report['loan_num']= $req['loan_num'];
        $report['year_issueloan']= $req['year_issueloan'];
        $report['year_issuefamily']= $req['year_issuefamily'];
        $report['year_issuenum']= $req['year_issuenum'];
        $report['year_backloan']= $req['year_backloan'];
        $report['year_backfamily']= $req['year_backfamily'];
        $report['year_backnum']= $req['year_backnum'];
        $report['farmer_loan_remainder']= $req['farmer_loan_remainder'];
        $report['farmer_loan_family']= $req['farmer_loan_family'];
        $report['farmer_issue']= $req['farmer_issue'];
        $report['farmer_backnum']= $req['farmer_backnum'];
        $report['company_loan_remainder']= $req['company_loan_remainder'];
        $report['company_loan_family']= $req['company_loan_family'];
        $report['company_issue']= $req['company_issue'];
        $report['company_backnum']= $req['company_backnum'];
        $report['total_remainder']= $req['total_remainder'];
        $report['total_loan_family']= $req['total_loan_family'];
        $report['total_issue']= $req['total_issue'];
        $report['total_backnum']= $req['total_backnum'];
        $report['person_loan_remainder']= $req['person_loan_remainder'];
        $report['person_loan_family']= $req['person_loan_family'];
        $report['person_issue']= $req['person_issue'];
        $report['person_backnum']= $req['person_backnum'];
        $report['normal_loan_remainder']= $req['normal_loan_remainder'];
        $report['normal_loan_family']= $req['normal_loan_family'];
        $report['month_loan_remainder']= $req['month_loan_remainder'];
        $report['month_loan_family']= $req['month_loan_family'];
        $report['quarter_loan_remainder']= $req['quarter_loan_remainder'];
        $report['quarter_loan_family']= $req['quarter_loan_family'];
        $report['ninety_loan_remainder']= $req['ninety_loan_remainder'];
        $report['ninety_loan_family']= $req['ninety_loan_family'];
        $report['highest_interest']= $req['highest_interest'];
        $report['lowest_interest']= $req['lowest_interest'];
        $report['Average_interest']= $req['Average_interest'];
        $report['normal_loan']= $req['normal_loan'];
        $report['follow_loan']= $req['follow_loan'];
        $report['second_loan']= $req['second_loan'];
        $report['doubt_loan']= $req['doubt_loan'];
        $report['noback_loan']= $req['noback_loan'];
        $report['credit_loan_remainder']= $req['credit_loan_remainder'];
        $report['credit_loan_family']= $req['credit_loan_family'];
        $report['promise_loan_remainder']= $req['promise_loan_remainder'];
        $report['promise_loan_family']= $req['promise_loan_family'];
        $report['mortgage_loan_remainder']= $req['mortgage_loan_remainder'];
        $report['mortgage_loan_family']= $req['mortgage_loan_family'];
        $report['pledge_loan_remainder']= $req['pledge_loan_remainder'];
        $report['pledge_loan_family']= $req['pledge_loan_family'];
        $report['other_loan_remainder']= $req['other_loan_remainder'];
        $report['other_loan_family']= $req['other_loan_family'];
        $report['bank_financing']= $req['bank_financing'];
        $report['shareholder_loan']= $req['shareholder_loan'];
        $report['profit_transfer']= $req['profit_transfer'];
        $report['bond_bill']= $req['bond_bill'];
        $report['parterner_loan']= $req['parterner_loan'];
        $report['securitisation']= $req['securitisation'];
        $report['market_capital']= $req['market_capital'];
        $report['othertype_capital']= $req['othertype_capital'];
        $report['othermoney']= $req['othermoney'];
        $report['paytaxes']= $req['paytaxes'];
//$report['saletax']= $req['saletax'];
        $report['incometax']= $req['incometax'];
        $report['description']= $req['description'];
        if ($report->save()) {
            $datenew = timedefine::getdatenew();
            if ($req['dtime'] == $datenew){
                flash("报表上传成功!", "success");
            }
            else{
                flash("历史报表上传成功，请上传当本月报表!", "success");
            }

            return redirect()->back();
        } else {
            return Redirect::back()->withErrors("报表上传失败！");
        }

    }

}
