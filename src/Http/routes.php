<?php
 

Route::group(['prefix'=>'admin','as'=>'admin.'],function(){
	Route::get('/','Marvision\LaravelAdmin\Http\Controllers\DashboardController@index')->name('dashboard');
});