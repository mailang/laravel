<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportformController extends Controller
{


    //get 请求报表页面
    public function addreport()
    {
    	 # code...
         return view('admin.addreport');
    }


     //提交报表
    public function submitreport()
    {



    }

}
