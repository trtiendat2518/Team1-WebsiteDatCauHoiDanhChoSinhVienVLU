<?php

use Illuminate\Support\Facades\Route;

//STUDENT HOME
Route::get('/', 'HomeController@index');
//STUDENT ACCOUNT
Route::get('/login', 'StudentController@index_login');
Route::get('/register', 'StudentController@index_register');
Route::post('/dang-nhap', 'StudentController@login');
Route::post('/dang-ky', 'StudentController@register');
Route::get('/dang-xuat', 'StudentController@logout');

Route::get('/forgetpass', 'StudentController@index_forgetpass');
Route::get('/newpass', 'StudentController@index_newpass');
Route::post('/xac-nhan-mail', 'StudentController@confirm_mail');
Route::post('/tao-mat-khau-moi', 'StudentController@newpassword');

//STUDENT MAIL
Route::get('/xac-nhan-tai-khoan-email', 'MailController@verifymail');
Route::get('/xac-nhan-mail-mat-khau-moi', 'MailController@verifychangepassword');
