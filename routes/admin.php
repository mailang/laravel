<?php

Route::get('/','IndexController@index');

$this->get('/modifypassword', 'ModifyPasswordController@show')->name('modifypassword');
$this->post('/modifypassword', 'ModifyPasswordController@update');

Route::get('/company',['uses'=>'CompanyController@index','as' => 'company.index',]);
Route::post('/company',['uses'=>'CompanyController@store','as' => 'company.store',]);

Route::get('/addreport',['uses'=>'ReportformController@addreport','as' => 'reportform.addreport',]);
Route::post('/addreport',['uses'=>'ReportformController@submitreport','as' => 'reportform.submitreport',]);

Route::get('/seereport/{id?}',['uses'=>'ReportformController@seereport','as' => 'reportform.seereport']);
Route::get('/reportlist',['uses'=>'ReportformController@reportlist','as' => 'reportform.reportlist']);
