<?php

Route::view('/','dashboard')->name('dashboard');

Route::get('/role','RoleController@index')->name('roles.index');
Route::get('/role/create','RoleController@create')->name('roles.create');
Route::get('/role/{role}/edit','RoleController@edit')->name('roles.edit');
Route::post('/role/create','RoleController@store')->name('roles.store');
Route::get('role/{id}','RoleController@show')->name('roles.show');

Route::get('/user','UserController@index')->name('users.index');
Route::get('/user','UserController@create')->name('users.create');
Route::get('/user/{user}/edit','UserController@edit')->name('users.edit');
Route::get('/user/create','UserController@store')->name('users.store');

Route::view('/expenseCategory','expenseCategory')->name('expenseCategories');
Route::view('/expenses','expenses')->name('expenses');