<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/1/001
 * Time: 10:35
 */
namespace App\Src;

class timedefine{
   static  function getdatenew(){
       return date('Y-m-d', strtotime(date('Y-m-01') . ' -2 month'));
   }
   static  function  getdateold(){
       return date('Y-12-01',strtotime('-1 year',strtotime(self::getdatenew())));
   }
}