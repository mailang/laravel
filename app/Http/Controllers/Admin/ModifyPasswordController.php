<?php

namespace App\Http\Controllers\Admin;

//use Illuminate\Http\Request;
use App\Http\Requests\ModifyPasswordRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ModifyPasswordController extends Controller
{
    //

    function show()
    {
        return view('admin.modifypassword');
    }

    function update(ModifyPasswordRequest $request)
    {
        //if (Auth::user()->getAuthPassword() == md5($request->get("oldpassword")))

        $user = Auth::user();
        if($user->getAuthPassword()== md5($request->get("oldpassword")))
        {
            $user->password = md5($request->get("password"));
            $user->save();
            flash("修改成功！","success");
            return redirect()->back();
        }
        else
        {
            return Redirect::back()->withErrors("密码错误！");
    }

    }
}
