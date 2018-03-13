<?php

Route::get('/','IndexController@index');

$this->get('/modifypassword', 'ModifyPasswordController@show')->name('modifypassword');
$this->post('/modifypassword', 'ModifyPasswordController@update');

Route::get('/company',['uses'=>'CompanyController@index','as' => 'company.index',]);
Route::post('/company',['uses'=>'CompanyController@store','as' => 'company.store',]);
Route::get('/company/{company}',['uses'=>'CompanyController@show','as' => 'company.show',]);

Route::get('/addreport/{old?}',['uses'=>'ReportformController@addreport','as' => 'reportform.addreport',]);
Route::post('/addreport',['uses'=>'ReportformController@submitreport','as' => 'reportform.submitreport',]);

Route::get('/seereport/{id?}',['uses'=>'ReportformController@seereport','as' => 'reportform.seereport']);
Route::get('/report/edit/{id}',['uses'=>'ReportformController@edit','as' => 'reportform.edit']);
Route::get('/report/export/{id}',['uses'=>'ReportformController@export','as' => 'reportform.export']);
Route::post('/report/edit/{id}',['uses'=>'ReportformController@update','as' => 'reportform.update']);
Route::get('/reportlist/{areacode?}',['uses'=>'ReportformController@reportlist','as' => 'reportform.reportlist']);


Route::get('/summarylist',['uses'=>'SummaryformController@index','as' => 'summaryform.index']);
Route::get('/summary/{id?}',['uses'=>'SummaryformController@show','as' => 'summaryform.show']);
Route::get('/summaryadd',['uses'=>'SummaryformController@create','as' => 'summaryform.create']);
Route::post('/summaryadd',['uses'=>'SummaryformController@store','as' => 'summaryform.store']);
Route::get('/uploadlist/{id?}',['uses'=>'SummaryformController@uploadlist','as' => 'summaryform.uploadlist']);
Route::get('/historylist/{sid?}',['uses'=>'SummaryformController@historylist','as' => 'summaryform.historylist']);