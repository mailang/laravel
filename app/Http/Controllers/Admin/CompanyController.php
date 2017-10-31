<?php

namespace App\Http\Controllers\Admin;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Area;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CompanyRequest;

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
            return view("admin.company.add",compact('areacode'));
        }

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
            $res = Company::create($request->all());
        }
        if($res)
        {
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
