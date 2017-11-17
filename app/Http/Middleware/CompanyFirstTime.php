<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\Company;
use Illuminate\Support\Facades\Route;

class CompanyFirstTime
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //dd($request);
        $user = Auth::user();
        //dd($user);
        if ($user->type == 1 && Route::currentRouteName() != "company.index" && Route::currentRouteName() != "company.store") {
            $company = Company::where('uid', $user->id)->first();
            //dd($company);
            if (!$company) {

                $request->session()->flash('modeltext', '请先完善公司信息！');
                //dd(session('modeltext'));
                return redirect()->route("company.index");
            }
        }

        return $next($request);
    }
}
