<?php

use Illuminate\Support\Facades\Route;

Route::get('/forgetpass', 'StudentController@index_forgetpass');
Route::get('/newpass', 'StudentController@index_newpass');
