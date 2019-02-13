<?php

namespace App\Http\Controllers\Admin;

use App\Models\oldsummaryform;
use App\Models\Summaryform;
use App\Models\Users;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Area;
use App\Models\reportform;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Src\timedefine;

class SummaryformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = Auth::user();
        $areacode = $user['areacode'];
        $jrbuser = Users::where("areacode",$areacode)->where("type",2)->first();
        $uid = $jrbuser->id;
        $field = ['summaryform.id', 'summaryform.updated_at', 'summaryform.dtime','users.id as uid', 'users.name'];
        $reports = DB::table('users')
            ->rightJoin('summaryform', 'users.id', '=', 'summaryform.uid')
            ->where('users.id', $uid)
            //->where('income','<>','0')
            ->orderBy('summaryform.updated_at', 'desc')
            ->get($field);
        $url = route("summaryform.historylist");


        return view('admin.summaryform.historylist', compact('reports','url'));
    }
/*获取上传和未上传报表的企业报表*/
    public function uploadlist($id = null)
    {
        //

        $field = ['reportform.id', 'reportform.updated_at', 'reportform.dtime', 'company.name', 'company.code', 'company.uid','company.id as cid','reportform.edit as enableedit','company.state'];
        $url = "";
        $enableback = false;
        $companystatechangeable = false;
        $datenew = timedefine::getdatenew();
        if ($id == null) {
            $user = Auth::user();
            $areacode = $user['areacode'];
            $time = $datenew;
            $companystatechangeable = true;
            $isuploaded = Summaryform::where("uid", $user->id)->whereDate('dtime', $datenew)->first();
            if(!$isuploaded){
                $enableback = true;
            }
        } else {
            $user = Users::find($id);
            $areacode = $user['areacode'];
            $time = $datenew;
        }
        $isfirst = Area::where('pcode', $areacode)->get(['areacode']);
        //dd($isfirst);
        if ($isfirst->isEmpty()) {
            //没有子级金融办
            //$url = route("reportform.reportlist");
            //dd($url);
            //array_push($field,'1 as edit');
            $reports = DB::table('company')
                ->rightJoin('reportform', 'company.uid', '=', 'reportform.uid')
                ->where('reportform.areacode', $areacode)
                ->whereDate('reportform.dtime', $time)
                ->orderBy('reportform.updated_at', 'desc')
                ->get($field);
            //dd($reports);

            //取出所有未提交报表的子公司
            $userlist=DB::table("users")
                ->leftJoin('company','users.id','=','company.uid')
                ->where('users.type',1)
                ->where('users.areacode', $areacode)
                ->whereNotIn('users.id', array_column($reports->toArray(),"uid" ))
                ->get(['users.id','company.id as cid','users.name','company.code','company.state']);

            return view('admin.report.reportformlist', compact('reports','userlist','enableback','companystatechangeable'));
        }
        else {
            //有子级金融办机构
            $url = route("summaryform.uploadlist");
            $field = ['summaryform.id', 'summaryform.uid','summaryform.updated_at', 'summaryform.dtime', 'users.name'];
            $reports = DB::table('users')
                ->rightJoin('summaryform', 'users.id', '=', 'summaryform.uid')
                ->whereIn('summaryform.areacode',$isfirst)
                //->where('summaryform.areacode',$areacode)
                ->whereDate('summaryform.dtime', $time)
                ->orderBy('summaryform.updated_at', 'desc')
                ->get($field);

//            foreach ($reports as $report) {
//                $report->url = $url."/".$report->id;
//            }

            //dd($reports);
            $uidlist= array_column($reports->toArray(),"uid");
            //dd($url);
            $userlist= DB::table("users")
                ->where('type', 2)
                ->whereIn('areacode', $isfirst)
                ->whereNotIn('id',$uidlist )
                ->get(["id","name"]);
            //dd($userlist);
            return view('admin.summaryform.list', compact('reports','url','userlist','enableback'));

        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //$old = new Summaryform();

        $user = Auth::user();
        $areacode = $user['areacode'];
        //$field = ['reportform.id','reportform.updated_at','company.name','company.code'];
        $datenew = timedefine::getdatenew();

        $isuploaded = Summaryform::where("uid", $user->id)->whereDate('dtime', $datenew)->first();
        //dd(date('Y-m-01', strtotime('-1 month')));
        //dd($isuploaded);
        if ($isuploaded) {
            if($areacode == "340000"){
                $summaryid = $isuploaded->id;
            }
            return view("admin.report.isuploaded",compact('summaryid'));
        }

        $isfirst = Area::where('pcode', $areacode)->get();
        $datenew = timedefine::getdatenew();
        $dateold = timedefine::getdateold();
        $dateoldopen = timedefine::getdateoldopen();
        //$summary = new Summaryform();
        //$old = $summary
        // ->where("uid", $user->id)
        // ->whereDate('dtime', date('Y-12-01',strtotime('-1 year',strtotime($datenew))))
        //  ->get()
        //  ->first();
        //$old=new Summaryform();
        if ($isfirst->isEmpty()) {
           $hasnotval = Company::where("areacode",$areacode)->where("state","0")->first();
            if ($hasnotval){
                return view("admin.hasnotval");
            }

        }

            $old=new oldsummaryform();
            if ($isfirst->isEmpty()) {

                $table = DB::table("company")->where('areacode', $areacode)->whereDate('opening_at','<',$dateoldopen)
//                    ->where(function ($query) use ($dateold) {
//                        $query->where('state','<>', '5')
//                            ->orWhere('state', '5')->where('closing_at','>',$dateold);})
                    ->get();
                $old->lp_ins_num = $table->count();
                $old->branch_ins_num = $table->sum('branch_num');
                $old->all_ins_num = $old->lp_ins_num + $old->branch_ins_num;
                $old['state0'] = $table->where('state','0')->count();
                $old['state1'] = $table->where('state','1')->count();
                $old['state2'] = $table->where('state','2')->count();
                $old['state3'] = $table->where('state','3')->count();
                $old['state4'] = $table->where('state','4')->count();
                $old['state5'] = $table->where('state','5')->count();
                $old['gt500m_num'] = $table->where('reg_capital', '>=', '50000')->count();
                $old['200mto500m_num'] = $table->where('reg_capital', '<', '50000')->where('reg_capital', '>=', '20000')->count();
                $old['100mto200m_num'] = $table->where('reg_capital', '<', '20000')->where('reg_capital', '>=', '10000')->count();
                $old['50mto100m_num'] = $table->where('reg_capital', '<', '10000')->where('reg_capital', '>=', '5000')->count();
                $old['lt50m_num'] = $table->where('reg_capital', '<', '5000')->count();
                $old->sh_num = $table->where('type', 0)->count();
                $old->ph_num = $table->where('type', 1)->count();
                $old->fh_num = $table->where('type', 2)->count();
                $old->allp_num = $table->where('bus_area', 2)->count();
                $old->p_num = $table->sum('p_num');

                $reports = DB::table('company')
                    ->rightJoin('reportform', 'company.uid', '=', 'reportform.uid')
                    ->where('reportform.areacode', $areacode)
                    ->whereDate('reportform.dtime', $dateold)->get();

                $old->total_capital = $reports->sum('total_capital');

                $old->money_capital = $reports->sum('money_capital');
                $old->other_capital = $reports->sum('other_capital');
                $old->total_debtcapital = $reports->sum('total_debtcapital');
                $old->paidup_capital = $reports->sum('paidup_capital');
                $old->income = $reports->sum('income');
                $old->loan_income = $reports->sum('loan_income');
                $old->profit_income = $reports->sum('profit_income');

                $old->loan_remainder = $reports->sum('loan_remainder');
                $old->bad_remainder = $reports->sum('bad_remainder');
                $old->loan_family = $reports->sum('loan_family');
                $old->loan_num = $reports->sum('loan_num');
                $old->year_issueloan = $reports->sum('year_issueloan');
                $old->year_issuefamily = $reports->sum('year_issuefamily');
                $old->year_issuenum = $reports->sum('year_issuenum');

                $old->farmer_loan_remainder = $reports->sum('farmer_loan_remainder');
                $old->farmer_loan_family = $reports->sum('farmer_loan_family');
                $old->farmer_issue = $reports->sum('farmer_issue');
                $old->farmer_backnum = $reports->sum('farmer_backnum');

                $old->company_loan_remainder = $reports->sum('company_loan_remainder');
                $old->company_loan_family = $reports->sum('company_loan_family');
                $old->company_issue = $reports->sum('company_issue');
                $old->company_backnum = $reports->sum('company_backnum');

                $old->total_remainder = $reports->sum('total_remainder');
                $old->total_loan_family = $reports->sum('total_loan_family');
                $old->total_issue = $reports->sum('total_issue');
                $old->total_backnum = $reports->sum('total_backnum');

                $old->person_loan_remainder = $reports->sum('person_loan_remainder');
                $old->person_loan_family = $reports->sum('person_loan_family');
                $old->person_issue = $reports->sum('person_issue');
                $old->person_backnum = $reports->sum('person_backnum');

                $old->normal_loan_remainder = $reports->sum('normal_loan_remainder');
                $old->normal_loan_family = $reports->sum('normal_loan_family');
                $old->month_loan_remainder = $reports->sum('month_loan_remainder');
                $old->month_loan_family = $reports->sum('month_loan_family');
                $old->quarter_loan_remainder = $reports->sum('quarter_loan_remainder');
                $old->quarter_loan_family = $reports->sum('quarter_loan_family');
                $old->ninety_loan_remainder = $reports->sum('ninety_loan_remainder');
                $old->ninety_loan_family = $reports->sum('ninety_loan_family');

                $old->highest_interest = $reports->max('highest_interest');
                $old->highest_interest = isset($old->highest_interest)?$old->highest_interest:"0";
                //dd($old->highest_interest);
                $tmpreports = $reports->where('lowest_interest','<>','0');
                $old->lowest_interest = $tmpreports->min('lowest_interest');
                //dd($reports,$tmpreports,$old->lowest_interest);
                $old->lowest_interest = isset($old->lowest_interest)?$old->lowest_interest:"0";

                //$new->ninety_loan_family = $reports->average('ninety_loan_family');

                $old->normal_loan = $reports->sum('normal_loan');
                $old->follow_loan = $reports->sum('follow_loan');
                $old->second_loan = $reports->sum('second_loan');
                $old->doubt_loan = $reports->sum('doubt_loan');
                $old->noback_loan = $reports->sum('noback_loan');

                $old->credit_loan_remainder = $reports->sum('credit_loan_remainder');
                $old->credit_loan_family = $reports->sum('credit_loan_family');
                $old->promise_loan_remainder = $reports->sum('promise_loan_remainder');
                $old->promise_loan_family = $reports->sum('promise_loan_family');
                $old->mortgage_loan_remainder = $reports->sum('mortgage_loan_remainder');
                $old->mortgage_loan_family = $reports->sum('mortgage_loan_family');
                $old->pledge_loan_remainder = $reports->sum('pledge_loan_remainder');
                $old->pledge_loan_family = $reports->sum('pledge_loan_family');
                $old->other_loan_remainder = $reports->sum('other_loan_remainder');
                $old->other_loan_family = $reports->sum('other_loan_family');

//            $new->loantocounty_remainder = $reports->sum('loantocounty_remainder');
//            $new->loantocounty_family = $reports->sum('loantocounty_family');
//            $new->loantocity_remainder = $reports->sum('loantocity_remainder');
//            $new->loantocity_family = $reports->sum('loantocity_family');

                $old->bank_financing = $reports->sum('bank_financing');
                $old->shareholder_loan = $reports->sum('shareholder_loan');
                $old->profit_transfer = $reports->sum('profit_transfer');
                $old->bond_bill = $reports->sum('bond_bill');
                $old->parterner_loan = $reports->sum('parterner_loan');

                $old->securitisation = $reports->sum('securitisation');
                $old->market_capital = $reports->sum('market_capital');
                $old->othermoney = $reports->sum('othermoney');

                $old->paytaxes = $reports->sum('paytaxes');
                //$old->saletax = $reports->sum('saletax');
                $old->incometax = $reports->sum('incometax');

                $old->loantocounty_remainder = $reports->where('bus_area', 0)->sum('loan_remainder');
                $old->loantocounty_family = $reports->where('bus_area', 0)->sum('loan_family');

                $old->loantocity_remainder = $reports->where('bus_area', 1)->sum('loan_remainder');
                $old->loantocity_family = $reports->where('bus_area', 1)->sum('loan_family');

            }
            else{
                $reports = DB::table('area')
                    ->rightJoin('oldsummaryform', 'oldsummaryform.areacode', '=', 'area.areacode')
                    ->where('area.pcode', $areacode)
                    ->whereDate('oldsummaryform.dtime', timedefine::getdatenew())
                    //->whereBetween('oldsummaryform.created_at',[date('Y-m-01 00:00:00',time()),date('Y-m-d H:i:s')])
                    ->get();

                $columns = Schema::getColumnListing('oldsummaryform');

                foreach ($columns as $key => $column){
                    //if()
                    $arr = array('id','uid','areacode','areacode','areacode','highest_interest','lowest_interest','Average_interest','othertype_capital','description','dtime','created_at','updated_at','leader');
                    if(in_array($column,$arr)) {
                        continue;
                    }
                    //dd($reports->sum($column));
                    //dd(gettype($reports->sum($column)),gettype(5));

                    $old[$column] = $reports->sum($column);

                    //dd($reports->sum($column));
                    //dd($new["$column"],$column,$reports->sum($column),$reports->sum("all_ins_num"));

                }
                $old->highest_interest = $reports->max('highest_interest');

                $tmpreports = $reports->where('lowest_interest','<>','0');
                $old->lowest_interest = $tmpreports->min('lowest_interest');
                //dd($reports,$tmpreports,$old->lowest_interest);
                $old->lowest_interest = isset($old->lowest_interest)?$old->lowest_interest:"0";
                //$old->lowest_interest = $reports->max('lowest_interest');
            }
          $new = new Summaryform();
        if ($isfirst->isEmpty()) {

            //$new->lp_ins_num = DB::select("SELECT COUNT(id) FROM company WHERE areacode = ?", [$areacode])->value();
            //$new->branch_ins_num = DB::select("SELECT COUNT(branch_num) FROM company WHERE areacode = ?", [$areacode])->value();
            // $new->lp_ins_num = DB::table("company")->where('areacode',$areacode)->count();
            //$new->branch_ins_num = DB::table("company")->where('areacode',$areacode)->sum('branch_num');

            $table = DB::table("company")->where('areacode', $areacode)
//                ->where(function ($query) use ($datenew) {
//                    $query->where('state','<>', '5')
//                        ->orWhere('state', '5')->where('closing_at','>',$datenew);})
                ->get();
            $new->lp_ins_num = $table->count();
            $new->branch_ins_num = $table->sum('branch_num');
            $new->all_ins_num = $new->lp_ins_num + $new->branch_ins_num;
            $new['state0'] = $table->where('state','0')->count();
            $new['state1'] = $table->where('state','1')->count();
            $new['state2'] = $table->where('state','2')->count();
            $new['state3'] = $table->where('state','3')->count();
            $new['state4'] = $table->where('state','4')->count();
            $new['state5'] = $table->where('state','5')->count();
            $new['gt500m_num'] = $table->where('reg_capital', '>=', '50000')->count();
            $new['200mto500m_num'] = $table->where('reg_capital', '<', '50000')->where('reg_capital', '>=', '20000')->count();
            $new['100mto200m_num'] = $table->where('reg_capital', '<', '20000')->where('reg_capital', '>=', '10000')->count();
            $new['50mto100m_num'] = $table->where('reg_capital', '<', '10000')->where('reg_capital', '>=', '5000')->count();
            $new['lt50m_num'] = $table->where('reg_capital', '<', '5000')->count();
            $new->sh_num = $table->where('type', 0)->count();
            $new->ph_num = $table->where('type', 1)->count();
            $new->fh_num = $table->where('type', 2)->count();
            $new->allp_num = $table->where('bus_area', 2)->count();
            $new->p_num = $table->sum('p_num');

            //dd($areacode,$table,$new);
            $reports = DB::table('company')
                ->rightJoin('reportform', 'company.uid', '=', 'reportform.uid')
                ->where('reportform.areacode', $areacode)
                ->whereDate('reportform.dtime', $datenew)->get();

            $new->total_capital = $reports->sum('total_capital');
            $new->money_capital = $reports->sum('money_capital');
            $new->other_capital = $reports->sum('other_capital');
            $new->total_debtcapital = $reports->sum('total_debtcapital');
            $new->paidup_capital = $reports->sum('paidup_capital');
            $new->income = $reports->sum('income');
            $new->loan_income = $reports->sum('loan_income');
            $new->profit_income = $reports->sum('profit_income');

            $new->loan_remainder = $reports->sum('loan_remainder');
            $new->bad_remainder = $reports->sum('bad_remainder');
            $new->loan_family = $reports->sum('loan_family');
            $new->loan_num = $reports->sum('loan_num');
            $new->year_issueloan = $reports->sum('year_issueloan');
            $new->year_issuefamily = $reports->sum('year_issuefamily');
            $new->year_issuenum = $reports->sum('year_issuenum');

            $new->farmer_loan_remainder = $reports->sum('farmer_loan_remainder');
            $new->farmer_loan_family = $reports->sum('farmer_loan_family');
            $new->farmer_issue = $reports->sum('farmer_issue');
            $new->farmer_backnum = $reports->sum('farmer_backnum');

            $new->company_loan_remainder = $reports->sum('company_loan_remainder');
            $new->company_loan_family = $reports->sum('company_loan_family');
            $new->company_issue = $reports->sum('company_issue');
            $new->company_backnum = $reports->sum('company_backnum');

            $new->total_remainder = $reports->sum('total_remainder');
            $new->total_loan_family = $reports->sum('total_loan_family');
            $new->total_issue = $reports->sum('total_issue');
            $new->total_backnum = $reports->sum('total_backnum');

            $new->person_loan_remainder = $reports->sum('person_loan_remainder');
            $new->person_loan_family = $reports->sum('person_loan_family');
            $new->person_issue = $reports->sum('person_issue');
            $new->person_backnum = $reports->sum('person_backnum');

            $new->normal_loan_remainder = $reports->sum('normal_loan_remainder');
            $new->normal_loan_family = $reports->sum('normal_loan_family');
            $new->month_loan_remainder = $reports->sum('month_loan_remainder');
            $new->month_loan_family = $reports->sum('month_loan_family');
            $new->quarter_loan_remainder = $reports->sum('quarter_loan_remainder');
            $new->quarter_loan_family = $reports->sum('quarter_loan_family');
            $new->ninety_loan_remainder = $reports->sum('ninety_loan_remainder');
            $new->ninety_loan_family = $reports->sum('ninety_loan_family');

            $new->highest_interest = $reports->max('highest_interest');
            $new->highest_interest = isset($new->highest_interest)?$new->highest_interest:"0";
            $tmpreports = $reports->where('lowest_interest','<>','0');
            $new->lowest_interest = $tmpreports->min('lowest_interest');
            $new->lowest_interest = isset($new->lowest_interest)?$new->lowest_interest:"0";
            //dd($reports,$tmpreports,$new->lowest_interest);
            //$new->ninety_loan_family = $reports->average('ninety_loan_family');
            //dd($reports);

            $new->normal_loan = $reports->sum('normal_loan');
            $new->follow_loan = $reports->sum('follow_loan');
            $new->second_loan = $reports->sum('second_loan');
            $new->doubt_loan = $reports->sum('doubt_loan');
            $new->noback_loan = $reports->sum('noback_loan');

            $new->credit_loan_remainder = $reports->sum('credit_loan_remainder');
            $new->credit_loan_family = $reports->sum('credit_loan_family');
            $new->promise_loan_remainder = $reports->sum('promise_loan_remainder');
            $new->promise_loan_family = $reports->sum('promise_loan_family');
            $new->mortgage_loan_remainder = $reports->sum('mortgage_loan_remainder');
            $new->mortgage_loan_family = $reports->sum('mortgage_loan_family');
            $new->pledge_loan_remainder = $reports->sum('pledge_loan_remainder');
            $new->pledge_loan_family = $reports->sum('pledge_loan_family');
            $new->other_loan_remainder = $reports->sum('other_loan_remainder');
            $new->other_loan_family = $reports->sum('other_loan_family');

//            $new->loantocounty_remainder = $reports->sum('loantocounty_remainder');
//            $new->loantocounty_family = $reports->sum('loantocounty_family');
//            $new->loantocity_remainder = $reports->sum('loantocity_remainder');
//            $new->loantocity_family = $reports->sum('loantocity_family');

            $new->bank_financing = $reports->sum('bank_financing');
            $new->shareholder_loan = $reports->sum('shareholder_loan');
            $new->profit_transfer = $reports->sum('profit_transfer');
            $new->bond_bill = $reports->sum('bond_bill');
            $new->parterner_loan = $reports->sum('parterner_loan');

            $new->securitisation = $reports->sum('securitisation');
            $new->market_capital = $reports->sum('market_capital');
            $new->othermoney = $reports->sum('othermoney');

            $new->paytaxes = $reports->sum('paytaxes');
            //$new->saletax = $reports->sum('saletax');
            $new->incometax = $reports->sum('incometax');
            $new->add_num=$new->lp_ins_num-$old->lp_ins_num;

            $new->loantocounty_remainder = $reports->where('bus_area', 0)->sum('loan_remainder');
            $new->loantocounty_family = $reports->where('bus_area', 0)->sum('loan_family');

            $new->loantocity_remainder = $reports->where('bus_area', 1)->sum('loan_remainder');
            $new->loantocity_family = $reports->where('bus_area', 1)->sum('loan_family');

            //dd($new);

        }
        else {



            $reports = DB::table('area')
                ->rightJoin('summaryform', 'summaryform.areacode', '=', 'area.areacode')
                ->where('area.pcode', $areacode)
                ->whereDate('summaryform.dtime', $datenew)->get();
            $columns = Schema::getColumnListing('summaryform');

            foreach ($columns as $key => $column){
                //if()
                $arr = array('id','uid','areacode','areacode','areacode','highest_interest','lowest_interest','Average_interest','othertype_capital','description','dtime','created_at','updated_at','leader');
                if(in_array($column,$arr)) {
                    continue;
                }
                //dd($reports->sum($column));
                //dd(gettype($reports->sum($column)),gettype(5));

                $new[$column] = $reports->sum($column);

                //dd($reports->sum($column));
                //dd($new["$column"],$column,$reports->sum($column),$reports->sum("all_ins_num"));

            }
            $new->highest_interest = $reports->max('highest_interest');

            $tmpreports = $reports->where('lowest_interest','<>','0');
            $new->lowest_interest = $tmpreports->min('lowest_interest');
            $new->lowest_interest = isset($new->lowest_interest)?$new->lowest_interest:"0";
            //dd($reports,$tmpreports,$new->lowest_interest);
            //$new->lowest_interest = $reports->min('lowest_interest');
            //$new->highest_interest = $reports->max('highest_interest');
            //dd($new);

        }
        //dd($new);
        //表二
        $month = 6;
        $tabletwo = [];
        for ($i=0;$i< $month;$i++){
            $monthsub = $month - $i;
           $date = date('Y-m-d',strtotime('-'.$monthsub.' month',strtotime($datenew)));
           $tabletwo[$i]["time"] = date('Y年m月',strtotime('-'.$monthsub.' month',strtotime($datenew)));

           $summary = Summaryform::where('areacode',$areacode)->whereDate('dtime', $date)->first();
           if (!$summary){
               $tabletwo[$i]["all_ins_num"] = "未上传";
               $tabletwo[$i]["lp_ins_num"] = "未上传";
               $tabletwo[$i]["state1"] = "未上传";
               $tabletwo[$i]["state2"] = "未上传";
               $tabletwo[$i]["state3"] = "未上传";
               $tabletwo[$i]["state4"] = "未上传";
               $tabletwo[$i]["state5"] = "未上传";
               $tabletwo[$i]["upload_num"] = "未上传";
               $tabletwo[$i]["loan_remainder"] = "未上传";
               $tabletwo[$i]["income"] = "未上传";
               $tabletwo[$i]["paytaxes"] = "未上传";

           }
           else{
               $tabletwo[$i]["all_ins_num"] = $summary->all_ins_num;
               $tabletwo[$i]["lp_ins_num"] = $summary->lp_ins_num;
               $tabletwo[$i]["state1"] = $summary->state1;
               $tabletwo[$i]["state2"] = $summary->state2;
               $tabletwo[$i]["state3"] = $summary->state3;
               $tabletwo[$i]["state4"] = $summary->state4;
               $tabletwo[$i]["state5"] = $summary->state5;


               $uploadnum = reportform::where('areacode','like',rtrim($areacode).'%')->whereDate('dtime',$date)->get()->count();

               $tabletwo[$i]["upload_num"] = $uploadnum;
               $tabletwo[$i]["loan_remainder"] = $summary->loan_remainder;
               $tabletwo[$i]["income"] = $summary->income;
               $tabletwo[$i]["paytaxes"] = $summary->paytaxes;
           }
        }

        return view('admin.summaryform.add', compact('old', 'new','user','tabletwo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datenew = timedefine::getdatenew();
        $user = Auth::user();
        $areacode = $user['areacode'];
        $all = $request->all();

        //$old = DB::table('summaryform')
          //  ->where("uid", $user->id)
          //  ->whereDate('dtime', date('Y-12-01',strtotime('-1 year',strtotime($datenew))))
            //->first();
        $newr = $all["new"];
        $newr["areacode"] = $areacode;
        $newr["uid"] = Auth::user()->id;
        $newr["dtime"] = $datenew;
         $res1 = Summaryform::create($newr);

//         $summary=new Summaryform();
//         $id=  $summary
//            ->where('uid',Auth::user()->id)
//            ->whereDate('dtime', $datenew)->get(['id'])->first();

            $oldr = $all["old"];
            $oldr["id"]= $res1->id;
            $oldr["areacode"] = $areacode;
            $oldr["uid"] = Auth::user()->id;
            $oldr["dtime"] = timedefine::getdatenew();

            $res0 = oldsummaryform::create($oldr);
            //如果是一级审核机构，提交汇总报表后，则该区域内的企业提交的报表不可以更改

        $user = Auth::user();
        $areacode = $user['areacode'];
        $isfirst = Area::where('pcode', $areacode)->get();
        if($isfirst->isEmpty()&&$res0)
        {
          //edit值修改为1;不给企业修改
           DB::table('reportform')->where('areacode',$areacode)
               ->where('edit',0)
                ->update(["edit"=>1]);

        }
       return view('admin.report.isuploaded');
        //dd($res0,$res1);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ModelsSummaryform $modelsSummaryform
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        //$user = Auth::user();
        //$areacode = $user['areacode'];

        $field = ["summaryform.*","users.name"];

        $new = Summaryform::leftJoin('users','users.id','=','uid')->find($id,$field);



        //表二
        $areacode = $new->areacode;
        $datenew = $new->dtime;
        $month = 6;
        $tabletwo = [];
        for ($i=0;$i< $month;$i++){
            $monthsub = $month - $i;
            $date = date('Y-m-d',strtotime('-'.$monthsub.' month',strtotime($datenew)));
            $tabletwo[$i]["time"] = date('Y年m月',strtotime('-'.$monthsub.' month',strtotime($datenew)));

            $summary = Summaryform::where('areacode',$areacode)->whereDate('dtime', $date)->first();
            if (!$summary){
                $tabletwo[$i]["all_ins_num"] = "未上传";
                $tabletwo[$i]["lp_ins_num"] = "未上传";
                $tabletwo[$i]["state1"] = "未上传";
                $tabletwo[$i]["state2"] = "未上传";
                $tabletwo[$i]["state3"] = "未上传";
                $tabletwo[$i]["state4"] = "未上传";
                $tabletwo[$i]["state5"] = "未上传";
                $tabletwo[$i]["upload_num"] = "未上传";
                $tabletwo[$i]["loan_remainder"] = "未上传";
                $tabletwo[$i]["income"] = "未上传";
                $tabletwo[$i]["paytaxes"] = "未上传";

            }
            else{
                $tabletwo[$i]["all_ins_num"] = $summary->all_ins_num;
                $tabletwo[$i]["lp_ins_num"] = $summary->lp_ins_num;
                $tabletwo[$i]["state1"] = $summary->state1;
                $tabletwo[$i]["state2"] = $summary->state2;
                $tabletwo[$i]["state3"] = $summary->state3;
                $tabletwo[$i]["state4"] = $summary->state4;
                $tabletwo[$i]["state5"] = $summary->state5;


                $uploadnum = reportform::where('areacode','like',rtrim($areacode).'%')->whereDate('dtime',$date)->get()->count();

                $tabletwo[$i]["upload_num"] = $uploadnum;
                $tabletwo[$i]["loan_remainder"] = $summary->loan_remainder;
                $tabletwo[$i]["income"] = $summary->income;
                $tabletwo[$i]["paytaxes"] = $summary->paytaxes;
            }
        }
        //dd($new);
        //dd(strtotime("-1 year"));
        //$oldtime = date('Y-12-01', strtotime('-1 year', strtotime($new->dtime)));
       // $old = Summaryform::leftJoin('users','users.id','=','uid')
         //   ->where('uid', $new->uid)
           // ->where('dtime', $oldtime)
           // ->first();
        $old = oldsummaryform::where('id',$id)->first();
        if ($old) {
            $areaname=Area::where('areacode',$old->areacode)->first();
            $name=$areaname['name'];
            if($name=="市辖区") {$pname=Area::where('areacode',$areaname->pcode)->first();$name=$pname->name.'辖区';}

            return view('admin.summaryform.edit', compact('old', 'new','name','tabletwo'));
        } else {
            return view('admin.summaryform.old');
        }


    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ModelsSummaryform $modelsSummaryform
     * @return \Illuminate\Http\Response
     */
    public function edit(Summaryform $Summaryform)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\ModelsSummaryform $modelsSummaryform
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Summaryform $Summaryform)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ModelsSummaryform $modelsSummaryform
     * @return \Illuminate\Http\Response
     */
    public function destroy(Summaryform $Summaryform)
    {
        //
    }

    public function back($id)
    {
        $summary = Summaryform::find($id);
        $oldsummary = oldsummaryform::where('id',$id)->first();
        //dd($summary,$oldsummary);
//        oldsummaryform::destroy($oldsummary);
//        Summaryform::destroy($summary);
        $oldsummary->delete();
        $summary->delete();
        flash('操作成功');
        return redirect()->back();
    }

    public function historylist($sid)
    {
        //
        $companystatechangeable = false;
        $field = ['reportform.id', 'reportform.updated_at', 'reportform.dtime', 'company.name', 'company.code', 'company.uid','company.id as cid'];
        $url = "";


         $summary = Summaryform::find($sid);
         $areacode = $summary->areacode;
         $time = date('Y-m-01', strtotime($summary->dtime));


        $isfirst = Area::where('pcode', $areacode)->get(['areacode']);
        //dd($isfirst);
        if ($isfirst->isEmpty()) {
            //没有子级金融办
            //$url = route("reportform.reportlist");
            //dd($url);
            $reports = DB::table('company')
                ->rightJoin('reportform', 'company.uid', '=', 'reportform.uid')
                ->where('reportform.areacode', $areacode)
                ->whereDate('reportform.dtime', $time)

                ->orderBy('reportform.updated_at', 'desc')
                ->get($field);
            //dd($reports);

            //取出所有未提交报表的子公司
            $userlist=DB::table("users")
                ->leftJoin('company','users.id','=','company.uid')
                ->where('users.type',1)
                ->where('users.areacode', $areacode)
                ->whereNotIn('users.id', array_column($reports->toArray(),"uid" ))
                ->get(['users.id','company.id as cid','users.name','company.code']);

            return view('admin.report.reportformlist', compact('reports','userlist','companystatechangeable'));
        }
        else {
            //有子级金融办机构
            $url = route("summaryform.historylist");
            $field = ['summaryform.id', 'summaryform.uid','summaryform.updated_at', 'summaryform.dtime', 'users.name'];
            $reports = DB::table('users')
                ->rightJoin('summaryform', 'users.id', '=', 'summaryform.uid')
                ->whereIn('summaryform.areacode',$isfirst)
                //->where('summaryform.areacode',$areacode)
                ->whereDate('summaryform.dtime', $time)
                ->orderBy('summaryform.updated_at', 'desc')
                ->get($field);

//            foreach ($reports as $report) {
//                $report->url = $url."/".$report->id;
//            }

            //dd($reports);
            $uidlist= array_column($reports->toArray(),"uid");
            //dd($url);
            $userlist= DB::table("users")
                ->where('type', 2)
                ->whereIn('areacode', $isfirst)
                ->whereNotIn('id',$uidlist )
                ->get(["id","name"]);
            //dd($userlist);
            return view('admin.summaryform.historylist', compact('reports','url','userlist'));

        }

    }

    public function test()
    {

        $area[2] = DB::table('area')->where('pcode','=','000000')->get(['areacode'])->map(function ($value) {
            return (array)$value;
        })->toArray();

        $area[1] = DB::table('area')->whereIn('pcode', $area[2])->get(['areacode'])->map(function ($value) {
            return (array)$value;
        })->toArray();

        $area[0] = DB::table('area')->whereIn('pcode', $area[1])->get(['areacode'])->map(function ($value) {
            return (array)$value;
        })->toArray();

        ksort($area);


        foreach ($area as $key=>$a)
        {
            $summary = DB::table('summaryform')->whereIn('areacode',$a)->get();

            if ($key == 0)
            {

                foreach ($summary as $s)
                {
                    $id = $s->id;
                    $areacode = $s->areacode;
                    $dtime = $s->dtime;

                    $datenew = $dtime;
                    $dateold = timedefine::getdateold($dtime);
                    $dateoldopen = timedefine::getdateoldopen($dtime);



                    $oldreports = DB::table('company')
                        ->rightJoin('reportform', 'company.uid', '=', 'reportform.uid')
                        ->where('reportform.areacode', $areacode)
                        ->whereDate('reportform.dtime', $dateold)->get();

                    $newreports =  DB::table('company')
                        ->rightJoin('reportform', 'company.uid', '=', 'reportform.uid')
                        ->where('reportform.areacode', $areacode)
                        ->whereDate('reportform.dtime', $datenew)->get();


                    $old= oldsummaryform::where('id',$id)->first();


                    $oldtable = DB::table("company")->where('areacode', $areacode)->whereDate('opening_at','<',$dateoldopen)
//                        ->where(function ($query) use ($dateold) {
//                            $query->where('state','<>', '5')
//                                ->orWhere('state', '1')->where('closing_at','>',$dateold);})
                        ->get();
                    $old->lp_ins_num = $oldtable->count();
                    $old->branch_ins_num = $oldtable->sum('branch_num');
                    $old->all_ins_num = $old->lp_ins_num + $old->branch_ins_num;
                    $old['state0'] = $oldtable->where('state','0')->count();
                    $old['state1'] = $oldtable->where('state','1')->count();
                    $old['state2'] = $oldtable->where('state','2')->count();
                    $old['state3'] = $oldtable->where('state','3')->count();
                    $old['state4'] = $oldtable->where('state','4')->count();
                    $old['state5'] = $oldtable->where('state','5')->count();

                    $old['gt500m_num'] = $oldtable->where('reg_capital', '>=', '50000')->count();
                    $old['200mto500m_num'] = $oldtable->where('reg_capital', '<', '50000')->where('reg_capital', '>=', '20000')->count();
                    $old['100mto200m_num'] = $oldtable->where('reg_capital', '<', '20000')->where('reg_capital', '>=', '10000')->count();
                    $old['50mto100m_num'] = $oldtable->where('reg_capital', '<', '10000')->where('reg_capital', '>=', '5000')->count();
                    $old['lt50m_num'] = $oldtable->where('reg_capital', '<', '5000')->count();
                    $old->sh_num = $oldtable->where('type', 0)->count();
                    $old->ph_num = $oldtable->where('type', 1)->count();
                    $old->fh_num = $oldtable->where('type', 2)->count();
                    $old->allp_num = $oldtable->where('bus_area', 2)->count();
                    $old->p_num = $oldtable->sum('p_num');


                    $old->total_capital = $oldreports->sum('total_capital');

                    $old->money_capital = $oldreports->sum('money_capital');
                    $old->other_capital = $oldreports->sum('other_capital');
                    $old->total_debtcapital = $oldreports->sum('total_debtcapital');
                    $old->paidup_capital = $oldreports->sum('paidup_capital');
                    $old->income = $oldreports->sum('income');
                    $old->loan_income = $oldreports->sum('loan_income');
                    $old->profit_income = $oldreports->sum('profit_income');

                    $old->loan_remainder = $oldreports->sum('loan_remainder');
                    $old->bad_remainder = $oldreports->sum('bad_remainder');
                    $old->loan_family = $oldreports->sum('loan_family');
                    $old->loan_num = $oldreports->sum('loan_num');
                    $old->year_issueloan = $oldreports->sum('year_issueloan');
                    $old->year_issuefamily = $oldreports->sum('year_issuefamily');
                    $old->year_issuenum = $oldreports->sum('year_issuenum');

                    $old->farmer_loan_remainder = $oldreports->sum('farmer_loan_remainder');
                    $old->farmer_loan_family = $oldreports->sum('farmer_loan_family');
                    $old->farmer_issue = $oldreports->sum('farmer_issue');
                    $old->farmer_backnum = $oldreports->sum('farmer_backnum');

                    $old->company_loan_remainder = $oldreports->sum('company_loan_remainder');
                    $old->company_loan_family = $oldreports->sum('company_loan_family');
                    $old->company_issue = $oldreports->sum('company_issue');
                    $old->company_backnum = $oldreports->sum('company_backnum');

                    $old->total_remainder = $oldreports->sum('total_remainder');
                    $old->total_loan_family = $oldreports->sum('total_loan_family');
                    $old->total_issue = $oldreports->sum('total_issue');
                    $old->total_backnum = $oldreports->sum('total_backnum');

                    $old->person_loan_remainder = $oldreports->sum('person_loan_remainder');
                    $old->person_loan_family = $oldreports->sum('person_loan_family');
                    $old->person_issue = $oldreports->sum('person_issue');
                    $old->person_backnum = $oldreports->sum('person_backnum');

                    $old->normal_loan_remainder = $oldreports->sum('normal_loan_remainder');
                    $old->normal_loan_family = $oldreports->sum('normal_loan_family');
                    $old->month_loan_remainder = $oldreports->sum('month_loan_remainder');
                    $old->month_loan_family = $oldreports->sum('month_loan_family');
                    $old->quarter_loan_remainder = $oldreports->sum('quarter_loan_remainder');
                    $old->quarter_loan_family = $oldreports->sum('quarter_loan_family');
                    $old->ninety_loan_remainder = $oldreports->sum('ninety_loan_remainder');
                    $old->ninety_loan_family = $oldreports->sum('ninety_loan_family');

                    $old->highest_interest = $oldreports->max('highest_interest');
                    $old->highest_interest = isset($old->highest_interest)?$old->highest_interest:"0";
                    //dd($old->highest_interest);
                    $tmpreports = $oldreports->where('lowest_interest','<>','0');
                    $old->lowest_interest = $tmpreports->min('lowest_interest');
                    //dd($oldreports,$tmpreports,$old->lowest_interest);
                    $old->lowest_interest = isset($old->lowest_interest)?$old->lowest_interest:"0";

                    //$new->ninety_loan_family = $oldreports->average('ninety_loan_family');

                    $old->normal_loan = $oldreports->sum('normal_loan');
                    $old->follow_loan = $oldreports->sum('follow_loan');
                    $old->second_loan = $oldreports->sum('second_loan');
                    $old->doubt_loan = $oldreports->sum('doubt_loan');
                    $old->noback_loan = $oldreports->sum('noback_loan');

                    $old->credit_loan_remainder = $oldreports->sum('credit_loan_remainder');
                    $old->credit_loan_family = $oldreports->sum('credit_loan_family');
                    $old->promise_loan_remainder = $oldreports->sum('promise_loan_remainder');
                    $old->promise_loan_family = $oldreports->sum('promise_loan_family');
                    $old->mortgage_loan_remainder = $oldreports->sum('mortgage_loan_remainder');
                    $old->mortgage_loan_family = $oldreports->sum('mortgage_loan_family');
                    $old->pledge_loan_remainder = $oldreports->sum('pledge_loan_remainder');
                    $old->pledge_loan_family = $oldreports->sum('pledge_loan_family');
                    $old->other_loan_remainder = $oldreports->sum('other_loan_remainder');
                    $old->other_loan_family = $oldreports->sum('other_loan_family');


                    $old->bank_financing = $oldreports->sum('bank_financing');
                    $old->shareholder_loan = $oldreports->sum('shareholder_loan');
                    $old->profit_transfer = $oldreports->sum('profit_transfer');
                    $old->bond_bill = $oldreports->sum('bond_bill');
                    $old->parterner_loan = $oldreports->sum('parterner_loan');

                    $old->securitisation = $oldreports->sum('securitisation');
                    $old->market_capital = $oldreports->sum('market_capital');
                    $old->othermoney = $oldreports->sum('othermoney');

                    $old->paytaxes = $oldreports->sum('paytaxes');
                    //$old->saletax = $oldreports->sum('saletax');
                    $old->incometax = $oldreports->sum('incometax');

                    $old->loantocounty_remainder = $oldreports->where('bus_area', 0)->sum('loan_remainder');
                    $old->loantocounty_family = $oldreports->where('bus_area', 0)->sum('loan_family');

                    $old->loantocity_remainder = $oldreports->where('bus_area', 1)->sum('loan_remainder');
                    $old->loantocity_family = $oldreports->where('bus_area', 1)->sum('loan_family');
                    $old->save();

                    $new= summaryform::Find($id);
                    $newtable = DB::table("company")->where('areacode', $areacode)
//                        ->where(function ($query) use ($datenew) {
//                            $query->where('state','<>', '5')
//                                ->orWhere('isclosing', '5')->where('closing_at','>',$datenew);})
                        ->get();
                    $new->lp_ins_num = $newtable->count();
                    $new->branch_ins_num = $newtable->sum('branch_num');
                    $new->all_ins_num = $new->lp_ins_num + $new->branch_ins_num;

                    $new['state0'] = $newtable->where('state','0')->count();
                    $new['state1'] = $newtable->where('state','1')->count();
                    $new['state2'] = $newtable->where('state','2')->count();
                    $new['state3'] = $newtable->where('state','3')->count();
                    $new['state4'] = $newtable->where('state','4')->count();
                    $new['state5'] = $newtable->where('state','5')->count();

                    $new['gt500m_num'] = $newtable->where('reg_capital', '>=', '50000')->count();
                    $new['200mto500m_num'] = $newtable->where('reg_capital', '<', '50000')->where('reg_capital', '>=', '20000')->count();
                    $new['100mto200m_num'] = $newtable->where('reg_capital', '<', '20000')->where('reg_capital', '>=', '10000')->count();
                    $new['50mto100m_num'] = $newtable->where('reg_capital', '<', '10000')->where('reg_capital', '>=', '5000')->count();
                    $new['lt50m_num'] = $newtable->where('reg_capital', '<', '5000')->count();
                    $new->sh_num = $newtable->where('type', 0)->count();
                    $new->ph_num = $newtable->where('type', 1)->count();
                    $new->fh_num = $newtable->where('type', 2)->count();
                    $new->allp_num = $newtable->where('bus_area', 2)->count();
                    $new->p_num = $newtable->sum('p_num');

                    $new->total_capital = $newreports->sum('total_capital');
                    $new->money_capital = $newreports->sum('money_capital');
                    $new->other_capital = $newreports->sum('other_capital');
                    $new->total_debtcapital = $newreports->sum('total_debtcapital');
                    $new->paidup_capital = $newreports->sum('paidup_capital');
                    $new->income = $newreports->sum('income');
                    $new->loan_income = $newreports->sum('loan_income');
                    $new->profit_income = $newreports->sum('profit_income');

                    $new->loan_remainder = $newreports->sum('loan_remainder');
                    $new->bad_remainder = $newreports->sum('bad_remainder');
                    $new->loan_family = $newreports->sum('loan_family');
                    $new->loan_num = $newreports->sum('loan_num');
                    $new->year_issueloan = $newreports->sum('year_issueloan');
                    $new->year_issuefamily = $newreports->sum('year_issuefamily');
                    $new->year_issuenum = $newreports->sum('year_issuenum');

                    $new->farmer_loan_remainder = $newreports->sum('farmer_loan_remainder');
                    $new->farmer_loan_family = $newreports->sum('farmer_loan_family');
                    $new->farmer_issue = $newreports->sum('farmer_issue');
                    $new->farmer_backnum = $newreports->sum('farmer_backnum');

                    $new->company_loan_remainder = $newreports->sum('company_loan_remainder');
                    $new->company_loan_family = $newreports->sum('company_loan_family');
                    $new->company_issue = $newreports->sum('company_issue');
                    $new->company_backnum = $newreports->sum('company_backnum');

                    $new->total_remainder = $newreports->sum('total_remainder');
                    $new->total_loan_family = $newreports->sum('total_loan_family');
                    $new->total_issue = $newreports->sum('total_issue');
                    $new->total_backnum = $newreports->sum('total_backnum');

                    $new->person_loan_remainder = $newreports->sum('person_loan_remainder');
                    $new->person_loan_family = $newreports->sum('person_loan_family');
                    $new->person_issue = $newreports->sum('person_issue');
                    $new->person_backnum = $newreports->sum('person_backnum');

                    $new->normal_loan_remainder = $newreports->sum('normal_loan_remainder');
                    $new->normal_loan_family = $newreports->sum('normal_loan_family');
                    $new->month_loan_remainder = $newreports->sum('month_loan_remainder');
                    $new->month_loan_family = $newreports->sum('month_loan_family');
                    $new->quarter_loan_remainder = $newreports->sum('quarter_loan_remainder');
                    $new->quarter_loan_family = $newreports->sum('quarter_loan_family');
                    $new->ninety_loan_remainder = $newreports->sum('ninety_loan_remainder');
                    $new->ninety_loan_family = $newreports->sum('ninety_loan_family');

                    $new->highest_interest = $newreports->max('highest_interest');
                    $new->highest_interest = isset($new->highest_interest)?$new->highest_interest:"0";
                    $tmpreports = $newreports->where('lowest_interest','<>','0');
                    $new->lowest_interest = $tmpreports->min('lowest_interest');
                    $new->lowest_interest = isset($new->lowest_interest)?$new->lowest_interest:"0";
                    //dd($newreports,$tmpreports,$new->lowest_interest);
                    //$new->ninety_loan_family = $newreports->average('ninety_loan_family');
                    //dd($newreports);

                    $new->normal_loan = $newreports->sum('normal_loan');
                    $new->follow_loan = $newreports->sum('follow_loan');
                    $new->second_loan = $newreports->sum('second_loan');
                    $new->doubt_loan = $newreports->sum('doubt_loan');
                    $new->noback_loan = $newreports->sum('noback_loan');

                    $new->credit_loan_remainder = $newreports->sum('credit_loan_remainder');
                    $new->credit_loan_family = $newreports->sum('credit_loan_family');
                    $new->promise_loan_remainder = $newreports->sum('promise_loan_remainder');
                    $new->promise_loan_family = $newreports->sum('promise_loan_family');
                    $new->mortgage_loan_remainder = $newreports->sum('mortgage_loan_remainder');
                    $new->mortgage_loan_family = $newreports->sum('mortgage_loan_family');
                    $new->pledge_loan_remainder = $newreports->sum('pledge_loan_remainder');
                    $new->pledge_loan_family = $newreports->sum('pledge_loan_family');
                    $new->other_loan_remainder = $newreports->sum('other_loan_remainder');
                    $new->other_loan_family = $newreports->sum('other_loan_family');

//            $new->loantocounty_remainder = $newreports->sum('loantocounty_remainder');
//            $new->loantocounty_family = $newreports->sum('loantocounty_family');
//            $new->loantocity_remainder = $newreports->sum('loantocity_remainder');
//            $new->loantocity_family = $newreports->sum('loantocity_family');

                    $new->bank_financing = $newreports->sum('bank_financing');
                    $new->shareholder_loan = $newreports->sum('shareholder_loan');
                    $new->profit_transfer = $newreports->sum('profit_transfer');
                    $new->bond_bill = $newreports->sum('bond_bill');
                    $new->parterner_loan = $newreports->sum('parterner_loan');

                    $new->securitisation = $newreports->sum('securitisation');
                    $new->market_capital = $newreports->sum('market_capital');
                    $new->othermoney = $newreports->sum('othermoney');

                    $new->paytaxes = $newreports->sum('paytaxes');
                    //$new->saletax = $newreports->sum('saletax');
                    $new->incometax = $newreports->sum('incometax');
                    $new->add_num=$new->lp_ins_num-$old->lp_ins_num;

                    $new->loantocounty_remainder = $newreports->where('bus_area', 0)->sum('loan_remainder');
                    $new->loantocounty_family = $newreports->where('bus_area', 0)->sum('loan_family');

                    $new->loantocity_remainder = $newreports->where('bus_area', 1)->sum('loan_remainder');
                    $new->loantocity_family = $newreports->where('bus_area', 1)->sum('loan_family');
                    $new->save();

                }
            }
            else
            {
                foreach ($summary as $s) {
                    $id = $s->id;
                    $areacode = $s->areacode;
                    $dtime = $s->dtime;

                    $datenew = $dtime;
                    $dateold = timedefine::getdateold($dtime);

                    $oldreports = DB::table('area')
                        ->rightJoin('oldsummaryform', 'oldsummaryform.areacode', '=', 'area.areacode')
                        ->where('area.pcode', $areacode)
                        ->whereDate('oldsummaryform.dtime', $datenew)
                        //->whereBetween('oldsummaryform.created_at',[date('Y-m-01 00:00:00',time()),date('Y-m-d H:i:s')])
                        ->get();
                    $newreports = DB::table('area')
                        ->rightJoin('summaryform', 'summaryform.areacode', '=', 'area.areacode')
                        ->where('area.pcode', $areacode)
                        ->whereDate('summaryform.dtime', $datenew)->get();

                    $old= oldsummaryform::where('id',$id)->first();
                    $columns = Schema::getColumnListing('oldsummaryform');

                    foreach ($columns as $key => $column){
                        //if()
                        $arr = array('oldid','id','uid','areacode','areacode','areacode','highest_interest','lowest_interest','Average_interest','othertype_capital','description','dtime','created_at','updated_at','leader');
                        if(in_array($column,$arr)) {
                            continue;
                        }
                        //dd($reports->sum($column));
                        //dd(gettype($reports->sum($column)),gettype(5));

                        $old[$column] = $oldreports->sum($column);

                        //dd($reports->sum($column));
                        //dd($new["$column"],$column,$reports->sum($column),$reports->sum("all_ins_num"));

                    }
                    $old->highest_interest = $oldreports->max('highest_interest');

                    $tmpreports = $oldreports->where('lowest_interest','<>','0');
                    $old->lowest_interest = $tmpreports->min('lowest_interest');
                    //dd($reports,$tmpreports,$old->lowest_interest);
                    $old->lowest_interest = isset($old->lowest_interest)?$old->lowest_interest:"0";


                    $old->save();

                    $new= summaryform::Find($id);
                    $columns = Schema::getColumnListing('summaryform');

                    foreach ($columns as $key => $column){
                        //if()
                        $arr = array('id','uid','areacode','areacode','areacode','highest_interest','lowest_interest','Average_interest','othertype_capital','description','dtime','created_at','updated_at','leader');
                        if(in_array($column,$arr)) {
                            continue;
                        }
                        //dd($reports->sum($column));
                        //dd(gettype($reports->sum($column)),gettype(5));

                        $new[$column] = $newreports->sum($column);

                        //dd($reports->sum($column));
                        //dd($new["$column"],$column,$reports->sum($column),$reports->sum("all_ins_num"));

                    }
                    $new->highest_interest = $newreports->max('highest_interest');

                    $tmpreports = $newreports->where('lowest_interest','<>','0');
                    $new->lowest_interest = $tmpreports->min('lowest_interest');
                    $new->lowest_interest = isset($new->lowest_interest)?$new->lowest_interest:"0";
                    $new->save();


                }
            }
        }
        echo 'ok';
    }

}
