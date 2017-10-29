<?php

Route::get('/','IndexController@index');

Route::get('/addreport',['uses'=>'ReportformController@addreport','as' => 'reportform.addreport',]);
Route::post('/addreport',['uses'=>'ReportformController@submitreport','as' => 'reportform.submitreport',]);
Route::post('/store',['uses'=>'ReportformController@submitreport','as' => 'reportform.submitreport',]);
Route::get('/firstverify',['uses'=>'ReportformController@firstverify','as' => 'reportform.firstverify',]);
