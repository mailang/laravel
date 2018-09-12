<?php

namespace App\Http\Controllers\Admin;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Area;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CompanyRequest;
use Illuminate\Support\Facades\Session;
use Symfony\Component\VarDumper\Caster\DateCaster;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $areacode = $this->getareacode()->toJson();
        $company = Company::where('uid', Auth::user()->id)->first();
        if ($company)
        {
            return view("admin.company.edit",compact('areacode','company'));
        }
        else
        {
            $token = md5(time());
            Session::flash("token_c", $token);
            return view("admin.company.add",compact('areacode','token'));
        }

    }
    /*企业状态注销*/
   public function companycancel()
    {
        $company = Company::where('uid', Auth::user()->id)->first();

        return view("admin.company.cancel",compact('company'));


    }
    public function modifycancel(Request $request,$id)
    {
        $company = Company::find($id);
        $company->isclosing=1;
        $company->closing_at=Date('Y-m-d');
        $company->save();
        flash("修改成功!");
        return redirect()->back();
    }

    public function getareacode()
    {
       return Area::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $request)
    {
        //
        $company = Company::where('uid', Auth::user()->id)->first();
        if($company)
        {
            $res = $this->update($request,$company);
        }
        else
        {
            if(empty(Session::get("token_c"))) {
                flash("请勿重复提交!","error");
                return redirect()->back();
            }
            $sessionold = Session::get("token_c");
            Session::forget("token_c");
            $sessionnew = Session::get("token_c");
            $res = Company::create($request->all());
        }
        if($res)
        {
            $user = Auth::user();
            $user->areacode = $request->get("areacode");
            $user->name = $request->get("name");
            $user->save();
            flash("保存成功!","success");
            return redirect()->back();
        }
        else
        {
            flash("保存失败!","error");
            return redirect()->back()->withInput();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
        $areacode = $this->getareacode()->toJson();
        //$company = Company::where('uid', Auth::user()->id)->first();
        return view("admin.company.edit",compact('areacode','company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyRequest $request, Company $company)
    {
        //
        $res = $company->update($request->all());
        return $res;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
