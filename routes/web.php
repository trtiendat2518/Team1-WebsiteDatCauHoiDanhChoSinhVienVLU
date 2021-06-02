<?php

use Illuminate\Support\Facades\Route;

//STUDENT HOME
Route::get('/', 'HomeController@index');
Route::post('/tim-kiem','HomeController@search');

//STUDENT ACCOUNT
Route::get('/login', 'StudentController@index_login');
Route::get('/register', 'StudentController@index_register');
Route::get('/forgetpass', 'StudentController@index_forgetpass');
Route::get('/newpass', 'StudentController@index_newpass');

Route::post('/dang-nhap', 'StudentController@login');
Route::post('/dang-ky', 'StudentController@register');
Route::get('/dang-xuat', 'StudentController@logout');
Route::post('/xac-nhan-mail', 'StudentController@confirm_mail');
Route::post('/tao-mat-khau-moi', 'StudentController@newpassword');

//STUDENT MAIL
Route::get('/xac-nhan-tai-khoan-email', 'MailController@verifymail');
Route::get('/xac-nhan-mail-mat-khau-moi', 'MailController@verifychangepassword');

//STUDENT PROFILE
Route::get('/trang-ca-nhan', 'StudentController@profile');

//STUDENT POST
Route::post('/dang-cau-hoi', 'PostController@post_new');
Route::get('/xoa-cau-hoi', 'PostController@post_delete');
Route::post('/chinh-sua-cau-hoi/{post_id}', 'PostController@post_update');

//STUDENT CATEGORY POST
Route::get('/cau-hoi-theo-loai/{category_id}','CategoryController@show_category_post');

//STUDENT COMMENT
Route::post('/binh-luan/{post_id}', 'CommentController@comment_post');
Route::get('/xoa-binh-luan', 'CommentController@comment_delete');

//STUDENT LIKE
Route::post('/thich-bai-viet/{post_id}', 'LikeController@like');

//-----------------------------------------------------------------------------------------
//ADMIN HOME
Route::get('/admin-home', 'AdminController@index');

