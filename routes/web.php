<?php

use Illuminate\Support\Facades\Route;


//STUDENT HOME
Route::get('/', 'HomeController@index');



Route::get('/login', 'StudentController@index_login');
Route::get('/register', 'StudentController@index_register');
Route::get('/forgetpass', 'StudentController@index_forgetpass');
Route::get('/newpass', 'StudentController@index_newpass');

