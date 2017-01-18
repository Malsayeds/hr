<?php


Route::get('/', 'PagesController@home');

Route::get('about', 'PagesController@about');

Route::get('employee','EmployeeController@index');