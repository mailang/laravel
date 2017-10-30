<?php

Route::get('/','IndexController@index');

$this->get('/modifypassword', 'ModifyPasswordController@show')->name('modifypassword');
$this->post('/modifypassword', 'ModifyPasswordController@update');

Route::get('/addreport',['uses'=>'ReportformController@addreport','as' => 'reportform.addreport',]);
Route::post('/addreport',['uses'=>'ReportformController@submitreport','as' => 'reportform.submitreport',]);
Route::post('/store',['uses'=>'ReportformController@submitreport','as' => 'reportform.submitreport',]);
Route::get('/company',['uses'=>'ReportformController@company','as' => 'reportform.company',]);
