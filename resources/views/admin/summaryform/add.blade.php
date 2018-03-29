@extends('layouts.master')
@section('title')
    <h1>
        公司管理
        <small>it all starts here</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
        <li class="active">公司管理</li>
    </ol>
@endsection
@section('content')
    <script src="{{asset('bootstrap/js/validation.js')}}" type="text/javascript"></script>
    <form id="form" class="form-horizontal" action="/admin/summaryadd" method="post" onsubmit="return toVaild()">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-1"></div>
                <!-- general form elements -->

                    <table width="1213" style="width: 909.75pt;" border="1" cellpadding="0" cellspacing="0">
                        <colgroup>
                            <col width="91"/>
                            <col width="68"/>
                            <col width="188"/>
                            <col width="131"/>
                            <col width="207"/>
                            <col width="135"/>
                            <col width="132"/>
                            <col width="130"/>
                            <col width="131"/>
                        </colgroup>
                        <tbody>
                        <tr>
                            <td class="et5" colspan="9" width="1173"
                                style="font-size: 20pt; font-weight: 700; text-align: center; vertical-align: middle; height: 54pt; width: 879.75pt;">
                                安徽省小额贷款公司基本情况数据表
                            </td>
                        </tr>
                        <tr>
                            <td class="et8" colspan="4" width="438"
                                style="font-size: 12pt; vertical-align: middle; border-bottom-width: 1.2pt; border-bottom-color: rgb(0, 0, 0); height: 39pt; width: 328.5pt;">
                                填报单位：{{$user->name}}
                            </td>
                            <td class="et8" colspan="2" width="414"
                                style="font-size: 12pt; vertical-align: middle; border-bottom-width: 1.2pt; border-bottom-color: rgb(0, 0, 0); height: 39pt; width: 310.5pt;">
                                &nbsp;报送周期：{{date('Y年m月', strtotime(date('Y-m-01') . ' -1 month'))}}
                            </td>
                            <td class="et9" colspan="3" width="394"
                                style="font-size: 12pt; text-align: right; vertical-align: middle; height: 39pt; width: 295.5pt;">
                                数据单位：家、人、万元、户、%
                            </td>
                        </tr>
                        <tr>
                            <td class="et15" width="91"
                                style="font-size: 12pt; font-weight: 700; text-align: center; vertical-align: middle; border-width: 1.2pt 0.5pt 0.5pt 1.2pt; border-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                序号
                            </td>
                            <td class="et16" colspan="5" width="662"
                                style="font-size: 12pt; font-weight: 700; text-align: center; vertical-align: middle; border-width: 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 496.5pt;">
                                项&nbsp;&nbsp;目
                            </td>
                            <td class="et19" width="132"
                                style="font-size: 12pt; font-weight: 700; text-align: center; vertical-align: middle; border-width: 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;">
                                年初
                            </td>
                            <td class="et19" width="130"
                                style="font-size: 12pt; font-weight: 700; text-align: center; vertical-align: middle; border-width: 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;">
                                发生数
                            </td>
                            <td class="et46" width="131"
                                style="font-size: 12pt; font-weight: 700; text-align: center; vertical-align: middle; border-width: 1.2pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;">
                                期末
                            </td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                1
                            </td>
                            <td class="et21" colspan="5" width="662"
                                style="font-size: 12pt; vertical-align: middle; border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 496.5pt;">
                                1.&nbsp;&nbsp;本辖区小额贷款机构数量
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text"  class="text-center" name="old[all_ins_num]" id="old[all_ins_num]" value="{{$old->all_ins_num}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et47" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text" class="text-center" name="new[all_ins_num]" id="new[all_ins_num]" value="{{$new->all_ins_num}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                2
                            </td>
                            <td class="et23" colspan="5" width="662"
                                style="font-size: 12pt; text-align: justify; vertical-align: middle; border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 496.5pt;">
                                &nbsp;&nbsp;&nbsp;1.1&nbsp;&nbsp;法人机构数量
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text" class="text-center" name="old[lp_ins_num]" id="old[lp_ins_num]" value="{{$old->lp_ins_num}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et47" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text" class="text-center" name="new[lp_ins_num]" id="new[lp_ins_num]" value="{{$new->lp_ins_num}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                3
                            </td>
                            <td class="et22" colspan="2" rowspan="5" width="136"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 135pt; width: 102pt;">
                                按注册资本金额划分
                            </td>
                            <td class="et24" colspan="3" width="469"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 351.75pt;">
                                1.1.1&nbsp;&nbsp;5亿元(含)以上
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text" class="text-center" name="old[gt500m_num]" id="old[gt500m_num]" value="{{$old['gt500m_num']}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et47" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text" class="text-center" name="new[gt500m_num]" id="new[gt500m_num]" value="{{$new['gt500m_num']}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                4
                            </td>
                            <td class="et24" colspan="3" width="469"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 351.75pt;">
                                1.1.2&nbsp;&nbsp;2亿元(含)-5亿元
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text" class="text-center" name="old[200mto500m_num]" id="old[200mto500m_num]" value="{{$old['200mto500m_num']}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et47" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text" class="text-center" name="new[200mto500m_num]" id="new[200mto500m_num]" value="{{$new['200mto500m_num']}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                5
                            </td>
                            <td class="et24" colspan="3" width="469"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 351.75pt;">
                                1.1.3&nbsp;&nbsp;1亿元(含)-2亿元
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text" class="text-center" name="old[100mto200m_num]" id="old[100mto200m_num]" value="{{$old['100mto200m_num']}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et47" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text" class="text-center" name="new[100mto200m_num]" id="new[100mto200m_num]" value="{{$new['100mto200m_num']}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                6
                            </td>
                            <td class="et24" colspan="3" width="469"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 351.75pt;">
                                1.1.4&nbsp;&nbsp;5000万元(含)-1亿元
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text" class="text-center" name="old[50mto100m_num]" id="old[50mto100m_num]" value="{{$old['50mto100m_num']}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et47" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text" class="text-center" name="new[50mto100m_num]" id="new[50mto100m_num]" value="{{$new['50mto100m_num']}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                7
                            </td>
                            <td class="et24" colspan="3" width="469"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 351.75pt;">
                                1.1.5&nbsp;&nbsp;5000万元以下
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text" class="text-center" name="old[lt50m_num]" id="old[lt50m_num]" value="{{$old['lt50m_num']}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et47" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text" class="text-center" name="new[lt50m_num]" id="new[lt50m_num]" value="{{$new['lt50m_num']}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                8
                            </td>
                            <td class="et22" colspan="2" rowspan="3" width="136"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 81pt; width: 102pt;">
                                按注册资本构成划分
                            </td>
                            <td class="et24" colspan="3" width="469"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 351.75pt;">
                                1.1.6&nbsp;&nbsp;国有控股
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text" class="text-center" name="old[sh_num]" id="old[sh_num]" value="{{$old->sh_num}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et47" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text" class="text-center" name="new[sh_num]" id="new[sh_num]" value="{{$new->sh_num}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                9
                            </td>
                            <td class="et24" colspan="3" width="469"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 351.75pt;">
                                1.1.7&nbsp;&nbsp;民营控股
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text" class="text-center" name="old[ph_num]" id="old[ph_num]" value="{{$old->ph_num}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et47" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text" class="text-center" name="new[ph_num]" id="new[ph_num]" value="{{$new->ph_num}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                10
                            </td>
                            <td class="et24" colspan="3" width="469"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 351.75pt;">
                                1.1.8&nbsp;&nbsp;外资控股
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text" class="text-center" name="old[fh_num]" id="old[fh_num]" value="{{$old->fh_num}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et47" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text" class="text-center" name="new[fh_num]" id="new[fh_num]" value="{{$new->fh_num}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 45pt; width: 68.25pt;">
                                11
                            </td>
                            <td class="et22" colspan="2" rowspan="2" width="136"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 72pt; width: 102pt;">
                                业务开展情况
                            </td>
                            <td class="et26" colspan="3" width="469"
                                style="font-size: 12pt; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 45pt; width: 351.75pt;">
                                1.1.9&nbsp;&nbsp;在全省（自治区、直辖市）范围内开展业务的&nbsp;（不包括网络小贷）
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 45pt; width: 99pt;"><input type="text" class="text-center" name="old[allp_num]" id="old[allp_num]" value="{{$old->allp_num}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 45pt; width: 97.5pt;"></td>
                            <td class="et47" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 45pt; width: 98.25pt;"><input type="text" class="text-center" name="new[allp_num]" id="new[allp_num]" value="{{$new->allp_num}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                12
                            </td>
                            <td class="et24" colspan="3" width="469"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 351.75pt;">
                                1.1.10&nbsp;&nbsp;开展网络小贷业务的
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text" check-type="integer required" class="text-center" name="old[net_num]" id="old[net_num]" value="{{$old->net_num}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et47" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text" check-type="integer required"  class="text-center" name="new[net_num]" id="new[net_num]" value="{{$new->net_num}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                13
                            </td>
                            <td class="et22" colspan="2" rowspan="2" width="136"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 54pt; width: 102pt;">
                                机构增设、退出情况
                            </td>
                            <td class="et24" colspan="3" width="469"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 351.75pt;">
                                1.1.11&nbsp;新批机构数
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"><input type="text" check-type="integer required" class="text-center" name="new[add_num]" id="new[add_num]" value="{{$new->add_num}}" /></td>
                            <td class="et47" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                14
                            </td>
                            <td class="et24" colspan="3" width="469"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 351.75pt;">
                                1.1.12&nbsp;撤销经营资格机构数
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"><input type="text" check-type="integer required" class="text-center" name="new[del_num]" id="new[del_num]" value="{{$new->del_num==null?"0":$new->del_num}}" /></td>
                            <td class="et47" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                15
                            </td>
                            <td class="et23" colspan="5" width="662"
                                style="font-size: 12pt; text-align: justify; vertical-align: middle; border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 496.5pt;">
                                &nbsp;&nbsp;&nbsp;1.2&nbsp;&nbsp;分支机构数量
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text" class="text-center" name="old[branch_ins_num]" id="old[branch_ins_num]" value="{{$old->branch_ins_num}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et47" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text" class="text-center" name="new[branch_ins_num]" id="new[branch_ins_num]" value="{{$new->branch_ins_num}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                16
                            </td>
                            <td class="et27" colspan="5" width="662"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 496.5pt;">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.2.1&nbsp;&nbsp;其中：跨省（自治区、直辖市）在本辖区设立的
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text" check-type="integer required" class="text-center" name="old[op_num]" id="old[op_num]" value="{{$old->op_num}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et47" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text"  check-type="integer required" class="text-center" name="new[op_num]" id="new[op_num]" value="{{$new->op_num}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                17
                            </td>
                            <td class="et23" colspan="5" width="662"
                                style="font-size: 12pt; text-align: justify; vertical-align: middle; border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 496.5pt;">
                                2.&nbsp;&nbsp;从业人数
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text" class="text-center" name="old[p_num]" id="old[p_num]" value="{{$old->p_num}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text" class="text-center" name="new[p_num]" id="new[p_num]" value="{{$new->p_num}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                18
                            </td>
                            <td class="et29" colspan="2" rowspan="8" width="136"
                                style="font-size: 12pt; vertical-align: middle; border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 216pt; width: 102pt;">
                                3.&nbsp;&nbsp;财务情况
                            </td>
                            <td class="et24" colspan="3" width="469"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 351.75pt;">
                                3.1&nbsp;&nbsp;资产总额
                            </td>
                            <td class="et30" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text" class="text-center" name="old[total_capital]" id="old[total_capital]" value="{{$old->total_capital}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text" class="text-center" name="new[total_capital]" id="new[total_capital]" value="{{$new->total_capital}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                19
                            </td>
                            <td class="et27" colspan="3" width="469"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 351.75pt;">
                                &nbsp;&nbsp;3.1.1&nbsp;&nbsp;其中：货币资金
                            </td>
                            <td class="et30" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text" class="text-center" name="old[money_capital]" id="old[money_capital]" value="{{$old->money_capital}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text" class="text-center" name="new[money_capital]" id="new[money_capital]" value="{{$new->money_capital}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                20
                            </td>
                            <td class="et27" colspan="3" width="469"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 351.75pt;">
                                &nbsp;&nbsp;3.1.2&nbsp;&nbsp;其中：其他资金运用
                            </td>
                            <td class="et30" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text" class="text-center" name="old[other_capital]" id="old[other_capital]" value="{{$old->other_capital}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text" class="text-center" name="new[other_capital]" id="new[other_capital]" value="{{$new->other_capital}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                21
                            </td>
                            <td class="et24" colspan="3" width="469"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 351.75pt;">
                                3.2&nbsp;&nbsp;负债总额
                            </td>
                            <td class="et30" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text" class="text-center" name="old[total_debtcapital]" id="old[total_debtcapital]" value="{{$old->total_debtcapital}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text" class="text-center" name="new[total_debtcapital]" id="new[total_debtcapital]" value="{{$new->total_debtcapital}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                22
                            </td>
                            <td class="et27" colspan="3" width="469"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 351.75pt;">
                                3.3&nbsp;&nbsp;实收资本
                            </td>
                            <td class="et30" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text" class="text-center" name="old[paidup_capital]" id="old[paidup_capital]" value="{{$old->paidup_capital}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text" class="text-center" name="new[paidup_capital]" id="new[paidup_capital]" value="{{$new->paidup_capital}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                23
                            </td>
                            <td class="et24" colspan="3" width="469"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 351.75pt;">
                                3.4&nbsp;&nbsp;营业收入
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"></td>
                            <td class="et30" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"><input type="text" class="text-center" name="new[income]" id="new[income]" value="{{$new->income}}" /></td>
                            <td class="et47" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                24
                            </td>
                            <td class="et31" colspan="3" width="469"
                                style="font-size: 12pt; vertical-align: middle; border-left-width: 0.5pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); height: 27pt; width: 351.75pt;">
                                &nbsp;&nbsp;3.4.1&nbsp;&nbsp;其中：贷款利息收入
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"></td>
                            <td class="et30" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"><input type="text" class="text-center" name="new[loan_income]" id="new[loan_income]" value="{{$new->loan_income}}" /></td>
                            <td class="et47" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                25
                            </td>
                            <td class="et33" colspan="3" width="469"
                                style="font-size: 12pt; vertical-align: middle; border-left-width: 0.5pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); height: 27pt; width: 351.75pt;">
                                3.5&nbsp;&nbsp;净利润
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"></td>
                            <td class="et30" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"><input type="text" class="text-center" name="new[profit_income]" id="new[profit_income]" value="{{$new->profit_income}}" /></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                26
                            </td>
                            <td class="et34" colspan="2" rowspan="53" width="136"
                                style="font-size: 12pt; vertical-align: middle; border-left-width: 0.5pt; border-left-color: rgb(0, 0, 0); border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 1698.75pt; width: 102pt;">
                                4.&nbsp;&nbsp;贷款情况
                            </td>
                            <td class="et36" colspan="3" width="469"
                                style="font-size: 12pt; vertical-align: middle; border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 351.75pt;">
                                4.1&nbsp;&nbsp;贷款余额
                            </td>
                            <td class="et30" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text" class="text-center" name="old[loan_remainder]" id="old[loan_remainder]" value="{{$old->loan_remainder}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text" class="text-center" name="new[loan_remainder]" id="new[loan_remainder]" value="{{$new->loan_remainder}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 30pt; width: 68.25pt;">
                                27
                            </td>
                            <td class="et40" colspan="3" width="469"
                                style="font-size: 12pt; vertical-align: middle; white-space: normal; border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 30pt; width: 351.75pt;">
                                &nbsp;&nbsp;4.1.1&nbsp;&nbsp;其中：不良贷款余额
                            </td>
                            <td class="et30" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 30pt; width: 99pt;"><input type="text" class="text-center" name="old[bad_remainder]" id="old[bad_remainder]" value="{{$old->bad_remainder}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 30pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 30pt; width: 98.25pt;"><input type="text" class="text-center" name="new[bad_remainder]" id="new[bad_remainder]" value="{{$new->bad_remainder}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                28
                            </td>
                            <td class="et42" colspan="3" width="469"
                                style="font-size: 12pt; vertical-align: middle; border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 351.75pt;">
                                4.2&nbsp;&nbsp;贷款户数
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text" class="text-center" name="old[loan_family]" id="old[loan_family]" value="{{$old->loan_family}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et47" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text" class="text-center" name="new[loan_family]" id="new[loan_family]" value="{{$new->loan_family}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                29
                            </td>
                            <td class="et42" colspan="3" width="469"
                                style="font-size: 12pt; vertical-align: middle; border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 351.75pt;">
                                4.3&nbsp;&nbsp;贷款笔数
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text" class="text-center" name="old[loan_num]" id="old[loan_num]" value="{{$old->loan_num}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et47" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text" class="text-center" name="new[loan_num]" id="new[loan_num]" value="{{$new->loan_num}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                30
                            </td>
                            <td class="et42" colspan="3" width="469"
                                style="font-size: 12pt; vertical-align: middle; border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 351.75pt;">
                                4.4&nbsp;&nbsp;周期内累计发放贷款金额
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"><input type="text" class="text-center" name="new[year_issueloan]" id="new[year_issueloan]" value="{{$new->year_issueloan}}" /></td>
                            <td class="et47" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                31
                            </td>
                            <td class="et43" colspan="3" width="469"
                                style="font-size: 12pt; vertical-align: middle; border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); height: 27pt; width: 351.75pt;">
                                4.5&nbsp;&nbsp;周期内累计发放贷款户数
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"><input type="text" class="text-center" name="new[year_issuefamily]" id="new[year_issuefamily]" value="{{$new->year_issuefamily}}" /></td>
                            <td class="et47" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                32
                            </td>
                            <td class="et42" colspan="3" width="469"
                                style="font-size: 12pt; vertical-align: middle; border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 351.75pt;">
                                4.6&nbsp;&nbsp;周期内累计发放贷款笔数
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"><input type="text" class="text-center" name="new[year_issuenum]" id="new[year_issuenum]" value="{{$new->year_issuenum}}" /></td>
                            <td class="et47" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                33
                            </td>
                            <td class="et44" rowspan="16" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 432pt; width: 98.25pt;">
                                4.7&nbsp;&nbsp;按服务对象划分
                            </td>
                            <td class="et41" rowspan="4" width="207"
                                style="font-size: 12pt; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 108pt; width: 155.25pt;">
                                4.7.1&nbsp;&nbsp;涉农贷款
                            </td>
                            <td class="et22" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 101.25pt;">
                                余额
                            </td>
                            <td class="et30" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text" class="text-center" name="old[farmer_loan_remainder]" id="old[farmer_loan_remainder]" value="{{$old->farmer_loan_remainder}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text" class="text-center" name="new[farmer_loan_remainder]" id="new[farmer_loan_remainder]" value="{{$new->farmer_loan_remainder}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                34
                            </td>
                            <td class="et22" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 101.25pt;">
                                户数
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text" class="text-center" name="old[farmer_loan_family]" id="old[farmer_loan_family]" value="{{$old->farmer_loan_family}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text" class="text-center" name="new[farmer_loan_family]" id="new[farmer_loan_family]" value="{{$new->farmer_loan_family}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                35
                            </td>
                            <td class="et22" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 101.25pt;">
                                累计发放金额
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"></td>
                            <td class="et30" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"><input type="text" class="text-center" name="new[farmer_issue]" id="new[farmer_issue]" value="{{$new->farmer_issue}}" /></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                36
                            </td>
                            <td class="et22" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 101.25pt;">
                                累计发放户数
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"><input type="text" class="text-center" name="new[farmer_backnum]" id="new[farmer_backnum]" value="{{$new->farmer_backnum}}" /></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                37
                            </td>
                            <td class="et41" rowspan="4" width="207"
                                style="font-size: 12pt; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 108pt; width: 155.25pt;">
                                4.7.2&nbsp;&nbsp;小微企业贷款
                            </td>
                            <td class="et22" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 101.25pt;">
                                余额
                            </td>
                            <td class="et30" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text" class="text-center" name="old[company_loan_remainder]" id="old[company_loan_remainder]" value="{{$old->company_loan_remainder}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text" class="text-center" name="new[company_loan_remainder]" id="new[company_loan_remainder]" value="{{$new->company_loan_remainder}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                38
                            </td>
                            <td class="et22" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 101.25pt;">
                                户数
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text" class="text-center" name="old[company_loan_family]" id="old[company_loan_family]" value="{{$old->company_loan_family}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text" class="text-center" name="new[company_loan_family]" id="new[company_loan_family]" value="{{$new->company_loan_family}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                39
                            </td>
                            <td class="et22" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 101.25pt;">
                                累计发放金额
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"></td>
                            <td class="et30" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"><input type="text" class="text-center" name="new[company_issue]" id="new[company_issue]" value="{{$new->company_issue}}" /></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                40
                            </td>
                            <td class="et22" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 101.25pt;">
                                累计发放户数
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"><input type="text" class="text-center" name="new[company_backnum]" id="new[company_backnum]" value="{{$new->company_backnum}}" /></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                41
                            </td>
                            <td class="et41" rowspan="4" width="207"
                                style="font-size: 12pt; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 108pt; width: 155.25pt;">
                                4.7.3&nbsp;&nbsp;涉农及小微贷款合计（剔除重叠部分）
                            </td>
                            <td class="et22" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 101.25pt;">
                                余额
                            </td>
                            <td class="et30" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text" class="text-center" name="old[total_remainder]" id="old[total_remainder]" value="{{$old->total_remainder}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text" class="text-center" name="new[total_remainder]" id="new[total_remainder]" value="{{$new->total_remainder}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                42
                            </td>
                            <td class="et22" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 101.25pt;">
                                户数
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text" class="text-center" name="old[total_loan_family]" id="old[total_loan_family]" value="{{$old->total_loan_family}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text" class="text-center" name="new[total_loan_family]" id="new[total_loan_family]" value="{{$new->total_loan_family}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                43
                            </td>
                            <td class="et22" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 101.25pt;">
                                累计发放金额
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"></td>
                            <td class="et30" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"><input type="text" class="text-center" name="new[total_issue]" id="new[total_issue]" value="{{$new->total_issue}}" /></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                44
                            </td>
                            <td class="et22" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 101.25pt;">
                                累计发放户数
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"><input type="text" class="text-center" name="new[total_backnum]" id="new[total_backnum]" value="{{$new->total_backnum}}" /></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                45
                            </td>
                            <td class="et41" rowspan="4" width="207"
                                style="font-size: 12pt; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 108pt; width: 155.25pt;">
                                4.7.4&nbsp;&nbsp;个人贷款
                            </td>
                            <td class="et22" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 101.25pt;">
                                余额
                            </td>
                            <td class="et30" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text" class="text-center" name="old[person_loan_remainder]" id="old[person_loan_remainder]" value="{{$old->person_loan_remainder}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text" class="text-center" name="new[person_loan_remainder]" id="new[person_loan_remainder]" value="{{$new->person_loan_remainder}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                46
                            </td>
                            <td class="et22" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 101.25pt;">
                                户数
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text" class="text-center" name="old[person_loan_family]" id="old[person_loan_family]" value="{{$old->person_loan_family}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text" class="text-center" name="new[person_loan_family]" id="new[person_loan_family]" value="{{$new->person_loan_family}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                47
                            </td>
                            <td class="et22" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 101.25pt;">
                                累计发放金额
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"></td>
                            <td class="et30" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"><input type="text" class="text-center" name="new[person_issue]" id="new[person_issue]" value="{{$new->person_issue}}" /></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                48
                            </td>
                            <td class="et22" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 101.25pt;">
                                累计发放户数
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"><input type="text" class="text-center" name="new[person_backnum]" id="new[person_backnum]" value="{{$new->person_backnum}}" /></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                49
                            </td>
                            <td class="et44" rowspan="8" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 216pt; width: 98.25pt;">
                                4.8&nbsp;&nbsp;按资产质量划分
                            </td>
                            <td class="et41" rowspan="2" width="207"
                                style="font-size: 12pt; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 54pt; width: 155.25pt;">
                                4.8.1&nbsp;&nbsp;正常贷款
                            </td>
                            <td class="et22" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 101.25pt;">
                                余额
                            </td>
                            <td class="et30" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text" class="text-center" name="old[normal_loan_remainder]" id="old[normal_loan_remainder]" value="{{$old->normal_loan_remainder}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text" class="text-center" name="new[normal_loan_remainder]" id="new[normal_loan_remainder]" value="{{$new->normal_loan_remainder}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                50
                            </td>
                            <td class="et22" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 101.25pt;">
                                户数
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text" class="text-center" name="old[normal_loan_family]" id="old[normal_loan_family]" value="{{$old->normal_loan_family}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text" class="text-center" name="new[normal_loan_family]" id="new[normal_loan_family]" value="{{$new->normal_loan_family}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                51
                            </td>
                            <td class="et41" rowspan="2" width="207"
                                style="font-size: 12pt; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 54pt; width: 155.25pt;">
                                4.8.2&nbsp;&nbsp;逾期30天（含）以下
                            </td>
                            <td class="et22" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 101.25pt;">
                                余额
                            </td>
                            <td class="et30" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text" class="text-center" name="old[month_loan_remainder]" id="old[month_loan_remainder]" value="{{$old->month_loan_remainder}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text" class="text-center" name="new[month_loan_remainder]" id="new[month_loan_remainder]" value="{{$new->month_loan_remainder}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                52
                            </td>
                            <td class="et22" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 101.25pt;">
                                户数
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text" class="text-center" name="old[month_loan_family]" id="old[month_loan_family]" value="{{$old->month_loan_family}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text" class="text-center" name="new[month_loan_family]" id="new[month_loan_family]" value="{{$new->month_loan_family}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                53
                            </td>
                            <td class="et41" rowspan="2" width="207"
                                style="font-size: 12pt; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 54pt; width: 155.25pt;">
                                4.8.3&nbsp;&nbsp;逾期30天-90天（含）
                            </td>
                            <td class="et22" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 101.25pt;">
                                余额
                            </td>
                            <td class="et30" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text" class="text-center" name="old[quarter_loan_remainder]" id="old[quarter_loan_remainder]" value="{{$old->quarter_loan_remainder}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text" class="text-center" name="new[quarter_loan_remainder]" id="new[quarter_loan_remainder]" value="{{$new->quarter_loan_remainder}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                54
                            </td>
                            <td class="et22" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 101.25pt;">
                                户数
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text" class="text-center" name="old[quarter_loan_family]" id="old[quarter_loan_family]" value="{{$old->quarter_loan_family}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text" class="text-center" name="new[quarter_loan_family]" id="new[quarter_loan_family]" value="{{$new->quarter_loan_family}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                55
                            </td>
                            <td class="et41" rowspan="2" width="207"
                                style="font-size: 12pt; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 54pt; width: 155.25pt;">
                                4.8.4&nbsp;&nbsp;逾期90天以上
                            </td>
                            <td class="et22" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 101.25pt;">
                                余额
                            </td>
                            <td class="et30" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text" class="text-center" name="old[ninety_loan_remainder]" id="old[ninety_loan_remainder]" value="{{$old->ninety_loan_remainder}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text" class="text-center" name="new[ninety_loan_remainder]" id="new[ninety_loan_remainder]" value="{{$new->ninety_loan_remainder}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                56
                            </td>
                            <td class="et22" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 101.25pt;">
                                户数
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"><input type="text" class="text-center" name="old[ninety_loan_family]" id="old[ninety_loan_family]" value="{{$old->ninety_loan_family}}" /></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"><input type="text" class="text-center" name="new[ninety_loan_family]" id="new[ninety_loan_family]" value="{{$new->ninety_loan_family}}" /></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                57
                            </td>
                            <td class="et44" rowspan="3" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 81pt; width: 98.25pt;">
                                4.9&nbsp;利率
                            </td>
                            <td class="et41" colspan="2" width="414"
                                style="font-size: 12pt; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 310.5pt;">
                                4.9.1&nbsp;最高利率
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"><input type="text" class="text-center" name="new[highest_interest]" id="new[highest_interest]" value="{{$new->highest_interest}}" /></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                58
                            </td>
                            <td class="et41" colspan="2" width="414"
                                style="font-size: 12pt; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 310.5pt;">
                                4.9.2&nbsp;最低利率
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"><input type="text" class="text-center" name="new[lowest_interest]" id="new[lowest_interest]" value="{{$new->lowest_interest}}" /></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"></td>
                        </tr>
                        <tr>
                            <td class="et20" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-left-width: 1.2pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                59
                            </td>
                            <td class="et41" colspan="2" width="414"
                                style="font-size: 12pt; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 310.5pt;">
                                4.9.3&nbsp;加权平均利率（年化）
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"></td>
                            <td class="et22" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;"><input type="text" check-type="integer required" class="text-center" name="new[Average_interest]" id="new[Average_interest]" value="{{$new->Average_interest}}" /></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"></td>
                        </tr>
                        <tr>
                            <td class="et22" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 71.25pt; width: 68.25pt;">
                                61
                            </td>
                            <td class="et44" rowspan="5" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 356.25pt; width: 98.25pt;">
                                4.10贷款五级分类
                            </td>
                            <td class="et41" width="207"
                                style="font-size: 12pt; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 71.25pt; width: 155.25pt;">
                                4.10.1正常类贷款
                            </td>
                            <td class="et44" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 71.25pt; width: 101.25pt;">
                                余额
                            </td>
                            <td class="et30" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 71.25pt; width: 99pt;"><input type="text" class="text-center" name="old[normal_loan]" id="old[normal_loan]" value="{{$old->normal_loan}}" /></td>
                            <td class="et24" width="130"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 71.25pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 71.25pt; width: 98.25pt;"><input type="text" class="text-center" name="new[normal_loan]" id="new[normal_loan]" value="{{$new->normal_loan}}" /></td>
                        </tr>
                        <tr>
                            <td class="et22" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 71.25pt; width: 68.25pt;">
                                62
                            </td>
                            <td class="et41" width="207"
                                style="font-size: 12pt; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 71.25pt; width: 155.25pt;">
                                4.10.2关注类贷款
                            </td>
                            <td class="et44" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 71.25pt; width: 101.25pt;">
                                余额
                            </td>
                            <td class="et30" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 71.25pt; width: 99pt;"><input type="text" class="text-center" name="old[follow_loan]" id="old[follow_loan]" value="{{$old->follow_loan}}" /></td>
                            <td class="et24" width="130"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 71.25pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 71.25pt; width: 98.25pt;"><input type="text" class="text-center" name="new[follow_loan]" id="new[follow_loan]" value="{{$new->follow_loan}}" /></td>
                        </tr>
                        <tr>
                            <td class="et22" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 71.25pt; width: 68.25pt;">
                                63
                            </td>
                            <td class="et41" width="207"
                                style="font-size: 12pt; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 71.25pt; width: 155.25pt;">
                                4.10.3次级类贷款
                            </td>
                            <td class="et44" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 71.25pt; width: 101.25pt;">
                                余额
                            </td>
                            <td class="et30" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 71.25pt; width: 99pt;"><input type="text" class="text-center" name="old[second_loan]" id="old[second_loan]" value="{{$old->second_loan}}" /></td>
                            <td class="et24" width="130"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 71.25pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 71.25pt; width: 98.25pt;"><input type="text" class="text-center" name="new[second_loan]" id="new[second_loan]" value="{{$new->second_loan}}" /></td>
                        </tr>
                        <tr>
                            <td class="et22" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 71.25pt; width: 68.25pt;">
                                64
                            </td>
                            <td class="et41" width="207"
                                style="font-size: 12pt; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 71.25pt; width: 155.25pt;">
                                4.10.4可疑类贷款
                            </td>
                            <td class="et44" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 71.25pt; width: 101.25pt;">
                                余额
                            </td>
                            <td class="et30" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 71.25pt; width: 99pt;"><input type="text" class="text-center" name="old[doubt_loan]" id="old[doubt_loan]" value="{{$old->doubt_loan}}" /></td>
                            <td class="et24" width="130"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 71.25pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 71.25pt; width: 98.25pt;"><input type="text" class="text-center" name="new[doubt_loan]" id="new[doubt_loan]" value="{{$new->doubt_loan}}" /></td>
                        </tr>
                        <tr>
                            <td class="et22" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 71.25pt; width: 68.25pt;">
                                65
                            </td>
                            <td class="et41" width="207"
                                style="font-size: 12pt; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 71.25pt; width: 155.25pt;">
                                4.10.5损失类贷款
                            </td>
                            <td class="et44" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 71.25pt; width: 101.25pt;">
                                余额
                            </td>
                            <td class="et30" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 71.25pt; width: 99pt;"><input type="text" class="text-center" name="old[noback_loan]" id="old[noback_loan]" value="{{$old->noback_loan}}" /></td>
                            <td class="et24" width="130"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 71.25pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 71.25pt; width: 98.25pt;"><input type="text" class="text-center" name="new[noback_loan]" id="new[noback_loan]" value="{{$new->noback_loan}}" /></td>
                        </tr>
                        <tr>
                            <td class="et52" rowspan="2" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 57pt; width: 68.25pt;">
                                66
                            </td>
                            <td class="et53" rowspan="10" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 292.5pt; width: 98.25pt;">
                                4.11贷款种类
                            </td>
                            <td class="et54" rowspan="2" width="207"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 57pt; width: 155.25pt;">
                                4.11.1信用贷款
                            </td>
                            <td class="et44" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 28.5pt; width: 101.25pt;">
                                余额
                            </td>
                            <td class="et30" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 28.5pt; width: 99pt;"><input type="text" class="text-center" name="old[credit_loan_remainder]" id="old[credit_loan_remainder]" value="{{$old->credit_loan_remainder}}" /></td>
                            <td class="et55" width="130"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 28.5pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 28.5pt; width: 98.25pt;"><input type="text" class="text-center" name="new[credit_loan_remainder]" id="new[credit_loan_remainder]" value="{{$new->credit_loan_remainder}}" /></td>
                        </tr>
                        <tr>
                            <td class="et22" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 28.5pt; width: 101.25pt;">
                                户数
                            </td>
                            <td class="et30" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 28.5pt; width: 99pt;"><input type="text" class="text-center" name="old[credit_loan_family]" id="old[credit_loan_family]" value="{{$old->credit_loan_family}}" /></td>
                            <td class="et55" width="130"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 28.5pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 28.5pt; width: 98.25pt;"><input type="text" class="text-center" name="new[credit_loan_family]" id="new[credit_loan_family]" value="{{$new->credit_loan_family}}" /></td>
                        </tr>
                        <tr>
                            <td class="et52" rowspan="2" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 57pt; width: 68.25pt;">
                                67
                            </td>
                            <td class="et54" rowspan="2" width="207"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 57pt; width: 155.25pt;">
                                4.11.2保证担保
                            </td>
                            <td class="et44" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 28.5pt; width: 101.25pt;">
                                余额
                            </td>
                            <td class="et30" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 28.5pt; width: 99pt;"><input type="text" class="text-center" name="old[promise_loan_remainder]" id="old[promise_loan_remainder]" value="{{$old->promise_loan_remainder}}" /></td>
                            <td class="et55" width="130"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 28.5pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 28.5pt; width: 98.25pt;"><input type="text" class="text-center" name="new[promise_loan_remainder]" id="new[promise_loan_remainder]" value="{{$new->promise_loan_remainder}}" /></td>
                        </tr>
                        <tr>
                            <td class="et22" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 28.5pt; width: 101.25pt;">
                                户数
                            </td>
                            <td class="et30" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 28.5pt; width: 99pt;"><input type="text" class="text-center" name="old[promise_loan_family]" id="old[promise_loan_family]" value="{{$old->promise_loan_family}}" /></td>
                            <td class="et55" width="130"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 28.5pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 28.5pt; width: 98.25pt;"><input type="text" class="text-center" name="new[promise_loan_family]" id="new[promise_loan_family]" value="{{$new->promise_loan_family}}" /></td>
                        </tr>
                        <tr>
                            <td class="et52" rowspan="2" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 57pt; width: 68.25pt;">
                                68
                            </td>
                            <td class="et54" rowspan="2" width="207"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 57pt; width: 155.25pt;">
                                4.11.3抵押担保
                            </td>
                            <td class="et44" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 28.5pt; width: 101.25pt;">
                                余额
                            </td>
                            <td class="et30" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 28.5pt; width: 99pt;"><input type="text" class="text-center" name="old[mortgage_loan_remainder]" id="old[mortgage_loan_remainder]" value="{{$old->mortgage_loan_remainder}}" /></td>
                            <td class="et24" width="130"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 28.5pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 28.5pt; width: 98.25pt;"><input type="text" class="text-center" name="new[mortgage_loan_remainder]" id="new[mortgage_loan_remainder]" value="{{$new->mortgage_loan_remainder}}" /></td>
                        </tr>
                        <tr>
                            <td class="et22" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 28.5pt; width: 101.25pt;">
                                户数
                            </td>
                            <td class="et30" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 28.5pt; width: 99pt;"><input type="text" class="text-center" name="old[mortgage_loan_family]" id="old[mortgage_loan_family]" value="{{$old->mortgage_loan_family}}" /></td>
                            <td class="et24" width="130"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 28.5pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 28.5pt; width: 98.25pt;"><input type="text" class="text-center" name="new[mortgage_loan_family]" id="new[mortgage_loan_family]" value="{{$new->mortgage_loan_family}}" /></td>
                        </tr>
                        <tr>
                            <td class="et52" rowspan="2" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 57pt; width: 68.25pt;">
                                69
                            </td>
                            <td class="et54" rowspan="2" width="207"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 57pt; width: 155.25pt;">
                                4.11.4质押担保
                            </td>
                            <td class="et44" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 28.5pt; width: 101.25pt;">
                                余额
                            </td>
                            <td class="et30" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 28.5pt; width: 99pt;"><input type="text" class="text-center" name="old[pledge_loan_remainder]" id="old[pledge_loan_remainder]" value="{{$old->pledge_loan_remainder}}" /></td>
                            <td class="et24" width="130"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 28.5pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 28.5pt; width: 98.25pt;"><input type="text" class="text-center" name="new[pledge_loan_remainder]" id="new[pledge_loan_remainder]" value="{{$new->pledge_loan_remainder}}" /></td>
                        </tr>
                        <tr>
                            <td class="et22" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 28.5pt; width: 101.25pt;">
                                户数
                            </td>
                            <td class="et30" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 28.5pt; width: 99pt;"><input type="text" class="text-center" name="old[pledge_loan_family]" id="old[pledge_loan_family]" value="{{$old->pledge_loan_family}}" /></td>
                            <td class="et24" width="130"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 28.5pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 28.5pt; width: 98.25pt;"><input type="text" class="text-center" name="new[pledge_loan_family]" id="new[pledge_loan_family]" value="{{$new->pledge_loan_family}}" /></td>
                        </tr>
                        <tr>
                            <td class="et52" rowspan="2" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 64.5pt; width: 68.25pt;">
                                70
                            </td>
                            <td class="et54" rowspan="2" width="207"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 64.5pt; width: 155.25pt;">
                                4.11.5其他方式
                            </td>
                            <td class="et44" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; white-space: normal; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 32.25pt; width: 101.25pt;">
                                余额
                            </td>
                            <td class="et30" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 32.25pt; width: 99pt;"><input type="text" class="text-center" name="old[other_loan_remainder]" id="old[other_loan_remainder]" value="{{$old->other_loan_remainder}}" /></td>
                            <td class="et24" width="130"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 32.25pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 32.25pt; width: 98.25pt;"><input type="text" class="text-center" name="new[other_loan_remainder]" id="new[other_loan_remainder]" value="{{$new->other_loan_remainder}}" /></td>
                        </tr>
                        <tr>
                            <td class="et22" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 32.25pt; width: 101.25pt;">
                                户数
                            </td>
                            <td class="et30" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 32.25pt; width: 99pt;"><input type="text" class="text-center" name="old[other_loan_family]" id="old[other_loan_family]" value="{{$old->other_loan_family}}" /></td>
                            <td class="et24" width="130"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 32.25pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 32.25pt; width: 98.25pt;"><input type="text" class="text-center" name="new[other_loan_family]" id="new[other_loan_family]" value="{{$new->other_loan_family}}" /></td>
                        </tr>
                        <tr>
                            <td class="et52" rowspan="2" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 64.5pt; width: 68.25pt;">
                                71
                            </td>
                            <td class="et57" rowspan="4" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; white-space: normal; border-left-width: 0.5pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 129pt; width: 98.25pt;">
                                4.12贷款投向
                            </td>
                            <td class="et61" rowspan="2" width="207"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; white-space: normal; border-left-width: 0.5pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 64.5pt; width: 155.25pt;">
                                4.12.1县域地区
                            </td>
                            <td class="et22" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 32.25pt; width: 101.25pt;">
                                余额
                            </td>
                            <td class="et30" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 32.25pt; width: 99pt;"><input type="text" class="text-center" name="old[loantocounty_remainder]" id="old[loantocounty_remainder]" value="{{$old->loantocounty_remainder}}" /></td>
                            <td class="et24" width="130"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 32.25pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 32.25pt; width: 98.25pt;"><input type="text" class="text-center" name="new[loantocounty_remainder]" id="new[loantocounty_remainder]" value="{{$new->loantocounty_remainder}}" /></td>
                        </tr>
                        <tr>
                            <td class="et22" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 32.25pt; width: 101.25pt;">
                                户数
                            </td>
                            <td class="et30" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 32.25pt; width: 99pt;"><input type="text" class="text-center" name="old[loantocounty_family]" id="old[loantocounty_family]" value="{{$old->loantocounty_family}}" /></td>
                            <td class="et24" width="130"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 32.25pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 32.25pt; width: 98.25pt;"><input type="text" class="text-center" name="new[loantocounty_family]" id="new[loantocounty_family]" value="{{$new->loantocounty_family}}" /></td>
                        </tr>
                        <tr>
                            <td class="et52" rowspan="2" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 64.5pt; width: 68.25pt;">
                                72
                            </td>
                            <td class="et61" rowspan="2" width="207"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; white-space: normal; border-left-width: 0.5pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 64.5pt; width: 155.25pt;">
                                4.12.2市域地区
                            </td>
                            <td class="et22" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 32.25pt; width: 101.25pt;">
                                余额
                            </td>
                            <td class="et30" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 32.25pt; width: 99pt;"><input type="text" class="text-center" name="old[loantocity_remainder]" id="old[loantocity_remainder]" value="{{$old->loantocity_remainder}}" /></td>
                            <td class="et24" width="130"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 32.25pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 32.25pt; width: 98.25pt;"><input type="text" class="text-center" name="new[loantocity_remainder]" id="new[loantocity_remainder]" value="{{$new->loantocity_remainder}}" /></td>
                        </tr>
                        <tr>
                            <td class="et22" width="135"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 32.25pt; width: 101.25pt;">
                                户数
                            </td>
                            <td class="et30" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 32.25pt; width: 99pt;"><input type="text" class="text-center" name="old[loantocity_family]" id="old[loantocity_family]" value="{{$old->loantocity_family}}" /></td>
                            <td class="et24" width="130"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 32.25pt; width: 97.5pt;"></td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 32.25pt; width: 98.25pt;"><input type="text" class="text-center" name="new[loantocity_family]" id="new[loantocity_family]" value="{{$new->loantocity_family}}" /></td>
                        </tr>
                        <tr>
                            <td class="et64" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                73
                            </td>
                            <td class="et37" colspan="2" rowspan="8" width="136"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 216pt; width: 102pt;">
                                5.&nbsp;&nbsp;融入资金金额
                            </td>
                            <td class="et24" colspan="3" width="469"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 351.75pt;">
                                5.1&nbsp;&nbsp;银行融资
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"></td>
                            <td class="et30" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;">
                                <input type="text" class="text-center" name="new[bank_financing]" id="new[bank_financing]" value="{{$new->bank_financing}}" />
                            </td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"></td>
                        </tr>
                        <tr>
                            <td class="et64" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                74
                            </td>
                            <td class="et24" colspan="3" width="469"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 351.75pt;">
                                5.2&nbsp;&nbsp;股东借款
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"></td>
                            <td class="et30" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;">
                                <input type="text" class="text-center" name="new[shareholder_loan]" id="new[shareholder_loan]" value="{{$new->shareholder_loan}}" />
                            </td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"></td>
                        </tr>
                        <tr>
                            <td class="et64" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                75
                            </td>
                            <td class="et24" colspan="3" width="469"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 351.75pt;">
                                5.3&nbsp;&nbsp;资产、资产收益权转让
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"></td>
                            <td class="et30" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;">
                                <input type="text" class="text-center" name="new[profit_transfer]" id="new[profit_transfer]" value="{{$new->profit_transfer}}" />
                            </td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"></td>
                        </tr>
                        <tr>
                            <td class="et64" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                76
                            </td>
                            <td class="et24" colspan="3" width="469"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 351.75pt;">
                                5.4&nbsp;&nbsp;债券、票据（包括私募债）
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"></td>
                            <td class="et30" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;">
                                <input type="text" class="text-center" name="new[bond_bill]" id="new[bond_bill]" value="{{$new->bond_bill}}" />
                            </td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"></td>
                        </tr>
                        <tr>
                            <td class="et64" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                77
                            </td>
                            <td class="et24" colspan="3" width="469"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 351.75pt;">
                                5.5&nbsp;&nbsp;小贷公司同业拆借、小额再贷款
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"></td>
                            <td class="et30" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;">
                                <input type="text" class="text-center" name="new[parterner_loan]" id="new[parterner_loan]" value="{{$new->parterner_loan}}" />
                            </td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"></td>
                        </tr>
                        <tr>
                            <td class="et64" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                78
                            </td>
                            <td class="et24" colspan="3" width="469"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 351.75pt;">
                                5.6&nbsp;&nbsp;资产证券化
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"></td>
                            <td class="et30" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;">
                                <input type="text" class="text-center" name="new[securitisation]" id="new[securitisation]" value="{{$new->securitisation}}" />
                            </td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"></td>
                        </tr>
                        <tr>
                            <td class="et64" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                79
                            </td>
                            <td class="et24" colspan="3" width="469"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 351.75pt;">
                                5.7&nbsp;&nbsp;资本市场挂牌
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"></td>
                            <td class="et30" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;">
                                <input type="text" class="text-center" name="new[market_capital]" id="new[market_capital]" value="{{$new->market_capital}}" />
                            </td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"></td>
                        </tr>
                        <tr>
                            <td class="et64" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                80
                            </td>
                            <td class="et33" colspan="3" width="469"
                                style="font-size: 12pt; vertical-align: middle; border-left-width: 0.5pt; border-left-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); height: 27pt; width: 351.75pt;">
                                5.8&nbsp;&nbsp;其他（分别填报类型及金额）
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"></td>
                            <td class="et30" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;">
                                <input type="text" class="text-center" name="new[othertype_capital]" id="new[othertype_capital]" value="{{$new->othertype_capital}}" />
                                <input type="text" class="text-center" name="new[othermoney]" id="new[othermoney]" value="{{$new->othermoney}}" />
                            </td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"></td>
                        </tr>
                        <tr>
                            <td class="et64" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                81
                            </td>
                            <td class="et37" colspan="2" rowspan="3" width="136"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 81pt; width: 102pt;">
                                6.&nbsp;&nbsp;税务情况
                            </td>
                            <td class="et24" colspan="3" width="469"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 351.75pt;">
                                6.1&nbsp;&nbsp;纳税支出
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"></td>
                            <td class="et30" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;">
                                <input type="text" class="text-center" name="new[paytaxes]" id="new[paytaxes]" value="{{$new->paytaxes}}" />
                            </td>
                            <td class="et48" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"></td>
                        </tr>
                        <tr>
                            <td class="et64" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 27pt; width: 68.25pt;">
                                82
                            </td>
                            <td class="et24" colspan="3" width="469"
                                style="font-size: 12pt; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 351.75pt;">
                                &nbsp;&nbsp;6.1.1&nbsp;&nbsp;其中：所得税支出
                            </td>
                            <td class="et22" width="132"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 99pt;"></td>
                            <td class="et30" width="130"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 97.5pt;">
                                <input type="text" class="text-center" name="new[incometax]" id="new[incometax]" value="{{$new->incometax}}" />
                            </td>
                            <td class="et47" width="131"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt 1.2pt 0.5pt 0.5pt; border-color: rgb(0, 0, 0); height: 27pt; width: 98.25pt;"></td>
                        </tr>
                        <tr>
                            <td class="et64" width="91"
                                style="font-size: 12pt; text-align: center; vertical-align: middle; border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); height: 56.25pt; width: 68.25pt;">
                                83
                            </td>
                            <td class="et8" width="68"
                                style="font-size: 12pt; vertical-align: middle; border-bottom-width: 1.2pt; border-bottom-color: rgb(0, 0, 0); height: 56.25pt; width: 51pt;">
                                7.注释及说明
                            </td>
                            <td class="et69" colspan="7" width="866"
                                style="font-size: 12pt; text-align: left; vertical-align: middle;">
                                <textarea  type="text"  name="new[description]" style="height: 122px;width: 684px;"
                                          id="new[description]">{{$new->description}}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="et71" colspan="6" width="975px"
                                style="font-size: 12pt; vertical-align: middle; border-top-width: 1.2pt; border-top-color: rgb(0, 0, 0); height: 27pt; width: 187.5pt;">
                                单位负责人：                                <input type="text" class="text-center" name="new[leader]" id="new[leader]" value="{{$new->leader}}"   check-type="required"  />
                            </td>
                            <td class="et71" colspan="3" width="260"
                                style="font-size: 12pt; vertical-align: middle; border-top-width: 1.2pt; border-top-color: rgb(0, 0, 0); height: 27pt; width: 195pt;">
                                报出日期：{{date("Y年m月d日")}}
                            </td>
                        </tr>
                        </tbody>
                    </table>




            <div class="box-footer">
                <button type="submit" id="btnsubmit" class="btn btn-primary">提交</button>
            </div>
            <script language="javascript">
                function toVaild() {


                    return true;
                }

                $(function () {
                    $("#form").validation({
                        ignore: "#incometax"
                    });
                    $("#btnsubmit").on('click', function (event) {
                        // 2.最后要调用 valid()方法。
      if ($("#form").valid()==false){
          $.alert("存有未填写项");
          $("input[type='text']").each(function () {
              if($(this).val()=="")$(this).css('border','1px solid #dd4b39');
          })

           return false;
        }
                    });
                });
            </script>
        </div>
    </form>


@endsection