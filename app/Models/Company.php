<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Company extends Model
{
    //
    protected $table = "company";
    protected $fillable = [
        'name',
        'contacts',
        'code',
        'opening_at',
        'areacode',
        'address',
        'tel',
        'phone',
        'reg_capital',
        'legal_person',
        'chairman',
        'manager',
        'shareholder',
        'scope',
        'type',
        'bus_area',
        'branch_num',
        'p_num',
        'uid'
    ];

}
