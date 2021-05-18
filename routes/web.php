<?php

use Illuminate\Support\Facades\Route;

//STUDENT ACCOUNT
Route::get('/login', 'StudentController@index_login');
Route::get('/register', 'StudentController@index_register');
Route::post('/dang-nhap', 'StudentController@login');
Route::post('/dang-ky', 'StudentController@register');
Route::get('/dang-xuat', 'StudentController@logout');
