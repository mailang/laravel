<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->increments('id');
            //公司名称
            $table->string('name');
            //社会信用代码
            $table->string('code');
            //开业时间
            $table->dateTime('opening_at');
            //地区
            $table->string('areacode');
            //地址
            $table->string('address');
            //电话
            $table->string('tel');
            //手机
            $table->string('phone');
            //注册资本（万元）
            $table->float('reg_capital');
            //法人
            $table->string('legal_person');
            //董事长
            $table->string('chairman');
            //总经理
            $table->string('manager');
            //股东情况（用符号分割  name:money|name:money|name:money ）
            $table->string('shareholder');
            //业务范围
            $table->string('scope');
            //注册资本构成(0：国有控股，1：民营控股，2：外资控股)
            $table->integer('type');
            //业务开展范围(0：县区，1：市，2：省)
            $table->integer('bus_area');
            //分支机构数
            $table->integer('branch_num');
            //从业人员数数
            $table->integer('p_num');
            //uid为user表中id
             $table->integer('uid')->unsigned();
             $table->timestamps();
        });

         Schema::table('company', function($table) {
       $table->foreign('uid')->references('id')->on('users');
   });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company');
    }
}
