<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', 'StudentController@index_login');
Route::get('/register', 'StudentController@index_register');
