<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use PHPExcel_IOFactory;
use App\Models\Area;
use App\Models\reportform;
use Symfony\Component\VarDumper\Caster\DateCaster;

class CompanyreportController extends Controller
{
    /*查看公司报表列表*/
    function  list()
    {
        $areacode=Auth::user()->areacode;//340600
        $isp=substr($areacode,-4,4);
        if ($isp=='0000')
        { $list=DB::table('area')->where('pcode',$areacode)->get(); }
        else
        {
            $isg=substr($areacode,-2,2);
            if ($isg=='00')  $list=DB::table('area')->where('areacode',$areacode)->get();
            else $list="无权限用户";
        }
        return view('admin.companyreport.list',compact('list'));
    }

    /*报表导出*/
    public  function  export(Request $request)
    {
        $prams=$request->all();
        $areacode=$prams['area'];
        $areaname=DB::table('area')->where('areacode',$areacode)->get(['name']);
        $areas=Area::where('pcode', $areacode)->get(['areacode']);
        $time1=$prams['year'].'-'.$prams['month'].'-01';
        $time2=$prams['year'].'-'.($prams['month']+1).'-01';
        $list=DB::table('company')->leftJoin('reportform','company.uid','=','reportform.uid')
            ->select(['company.name','company.address','company.opening_at','company.reg_capital','company.type','company.shareholder','company.p_num','company.branch_num','company.isclosing','company.closing_at','company.tel','company.phone','reportform.*'])
            ->whereBetween('reportform.created_at',[$time1,$time2])
            ->whereIn('company.areacode',$areas)
            ->get();
        if (count($list)==0){flash('未找到相关数据');return redirect()->back();}

        $inputFileName=storage_path('/excel/').iconv('UTF-8', 'GBK//IGNORE','template' ).'.xls';
        $inputFileType='Excel5';
        $objReader = PHPExcel_IOFactory::createReader($inputFileType);
        $excel=$objReader->load($inputFileName);
        $sheet= $excel->getSheet(0)->setTitle("已上报报表");
        $sheet->setCellValue('E2',"报送周期：".date('Y').'年1月1日至'.date('Y年m月d日',strtotime($prams['year'].'-'.($prams['month']+1).'-01'.'-1 day')));
        $sheet->setCellValue('B1',$areaname[0]->name."小额贷款公司基本报表");
        $sheet->setCellValue('J4','1.9是否已于'. date('Y').'年1月1日至（含）以后取消经营资质');

        foreach ($list as $key=>$report)
        {
            $num=6+$key;
            $sheet->setCellValue('A'.$num, ++$key);
            $sheet->setCellValue('B'.$num, $report->name);
            $sheet->setCellValue('C'.$num, $report->address);
            $sheet->setCellValue('D'.$num,date('Y-m-d',strtotime($report->opening_at)));
            $sheet->setCellValue('E'.$num, $report->reg_capital);
            //0：国有控股，1：民营控股，2：外资控股
               switch($report->type) {
                   case 0: $type="国有控股"; break;
                   case 1: $type="民营控股"; break;
                   case 2: $type="外资控股"; break;
                   default:$type="民营控股"; break;
               }
               $share=json_decode($report->shareholder);
               $len=count($share);
               $manager=0;
               for($i=0;$i<$len;$i++)
              {
                    if($manager<$share[$i]->equity)$manager=$share[$i]->equity;
                    else continue;
               }
            $sheet->setCellValue('F'.$num,$type);
            $sheet->setCellValue('G'.$num, $manager);
            $sheet->setCellValue('H'.$num, $report->p_num);
            $sheet->setCellValue('I'.$num, $report->branch_num);
            $close="否";
            if($report->isclosing==1&&strtotime($report->closing_at)>strtotime('2018-07-01'))
                $close="是";
            $sheet->setCellValue('J'.$num, $close);
            $sheet->setCellValue('K'.$num, $report->phone);
            $sheet->setCellValue('L'.$num, $report->total_capital);
            $sheet->setCellValue('M'.$num, $report->total_debtcapital);
            $sheet->setCellValue('N'.$num, $report->paidup_capital);
            $sheet->setCellValue('O'.$num, $report->profit_income);
            $sheet->setCellValue('P'.$num, $report->loan_remainder);
            $sheet->setCellValue('Q'.$num, $report->person_loan_remainder);
            $sheet->setCellValue('R'.$num, $report->farmer_loan_remainder);
            $sheet->setCellValue('S'.$num, $report->company_loan_remainder);
            $sheet->setCellValue('T'.$num, $report->bad_remainder);
            $sheet->setCellValue('U'.$num, $report->loan_family);
            $sheet->setCellValue('V'.$num, $report->loan_num);
            $sheet->setCellValue('W'.$num, $report->year_issueloan);
            $sheet->setCellValue('X'.$num, $report->year_issuefamily);
            $sheet->setCellValue('Y'.$num, $report->year_issuenum);
            $sheet->setCellValue('Z'.$num, $report->Average_interest);
            $totalmoney=$report->bank_financing+$report->shareholder_loan+$report->securitisation+$report->parterner_loan+$report->profit_transfer;
            $othermoney=$report->bond_bill+$report->market_capital+$report->othermoney;
            $sheet->setCellValue('AA'.$num, $totalmoney+$othermoney);
            $sheet->setCellValue('AB'.$num, $report->bank_financing);//银行
            $sheet->setCellValue('AC'.$num, $report->shareholder_loan);//股东
            $sheet->setCellValue('AD'.$num, $report->securitisation);//资产证券化
            $sheet->setCellValue('AE'.$num, $report->profit_transfer);//收益转让
            $sheet->setCellValue('AF'.$num, $report->parterner_loan);//同行拆借
            $sheet->setCellValue('AG'.$num, $othermoney);//其他类型及金额
            $sheet->setCellValue('AH'.$num, $report->description);
            $sheet->getRowDimension($num)->setRowHeight(60);
            $styleArray = array(
                'borders' => array(
                    'allborders' => array(
                        'style' => \PHPExcel_Style_Border::BORDER_THIN,//细边框
                    ),
                ),
            );
            $sheet->getStyle('A'.$num.':AH'.$num)->applyFromArray($styleArray);
        }
        $objWriter =PHPExcel_IOFactory :: createWriter($excel, 'Excel5');
        header('Content-Type:application/vnd.ms-excel');
        header('Content-Disposition:attachment;filename="'.$areaname[0]->name.'小贷报表'.date('Ymd'). '.xls"');
        header('Cache-Control:max-age=0');
        $objWriter-> save('php://output');

    }

    /*获取未上传报表的企业信息*/
    public function noupload($id=null)
    {

        $areacode=Auth::user()->areacode;//340600
        $isp=substr($areacode,-4,4);
        if ($isp=='0000')
        { $list=Area::where('pcode',$areacode)->get(); }
        else
        {
            $isg=substr($areacode,-2,2);
            if ($isg=='00')  $list=Area::where('areacode',$areacode)->get();
        }
        if (count($list)==1){   $data['current']=$list[0]->name;$code=$list[0]->areacode; }
        else {if ($id!=null){
           $first=  DB::table('area')->where('areacode',$id)->first();
            $data['current']=$first->name;$code=$first->areacode;
        }else{$data['current']=$list[0]->name;$code=$list[0]->areacode;} }
        /*获取区县金融机构代码*/
        $child=Area::where('pcode',$code)->get(['areacode']);
        /*获取已上报的企业id*/
        $time1=date('Y').'-'.date('m').'-01';
        $time2=date('Y').'-'.date('m',strtotime('+1 month')).'-01';
        $uid=reportform::whereBetween('reportform.created_at',[$time1,$time2])
            ->whereIn('areacode',$child)
           ->get(['uid']);
        /*获取未上报的企业*/
        $company=DB::table('company')
            ->whereIn('company.areacode',$child)
            ->whereNotIn('uid',$uid)
            ->get(['name','opening_at']);
        $data['year']=date('Y');
        $data['month']=date('m');
        $data['code']=$code;
        return view('admin.companyreport.noupload',compact('list','company','data'));
    }
    /*获取未上传报表的企业信息*/
    public function search($id,$time)
    {

        $data['year']=Date('Y',$time);
        $data['month']=Date('m',$time);

        $areacode=Auth::user()->areacode;//340600
        $isp=substr($areacode,-4,4);
        if ($isp=='0000')
        { $list=Area::where('pcode',$areacode)->get(); }
        else
        {
            $isg=substr($areacode,-2,2);
            if ($isg=='00')  $list=Area::where('areacode',$areacode)->get();
        }
        if (count($list)==1){   $data['current']=$list[0]->name;$code=$list[0]->areacode; }
        else {if ($id!=null){
            $first=  DB::table('area')->where('areacode',$id)->first();
            $data['current']=$first->name;$code=$first->areacode;
        }else{$data['current']=$list[0]->name;$code=$list[0]->areacode;} }
        /*获取区县金融机构代码*/
        $child=Area::where('pcode',$id)->get(['areacode']);
        /*获取已上报的企业id*/
        $time1=$data['year'].'-'.$data['month'] .'-01';
        $time2=$data['year'].'-'.($data['month']+1) .'-01';
        $uid=reportform::whereBetween('reportform.created_at',[$time1,$time2])
            ->whereIn('areacode',$child)
            ->get(['uid']);
        /*获取未上报的企业*/
        $company=DB::table('company')
            ->whereIn('company.areacode',$child)
            ->whereNotIn('uid',$uid)
            ->get(['name','opening_at']);
        $data['code']=$code;
        return view('admin.companyreport.noupload',compact('list','company','data'));
    }
}
