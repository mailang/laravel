<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSummaryformTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('summaryform', function (Blueprint $table) {
            $table->increments('id');
    
             //users表中id
            $table->increments('uid');
             //地区
            $table->string('areacode');
             //年初
            $table->string('beginer_year');
             //发生数
            $table->string('occur_number');
             //年末
            $table->string('end_year');
             //说明
             $table->string('description');
             
                     $table->timestamps();
        });

      Schema::table('summaryform', function($table) {
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
        Schema::dropIfExists('summaryform');
    }
}
