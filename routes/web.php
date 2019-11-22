<?php


Route::get('/login', 'AuthController@getLoginPage')->name('auth.get_login');
Route::post('/login', 'AuthController@performLogin')->name('auth.do_login');
Route::get('/logout', 'AuthController@performLogout')->name('auth.do_logout');
