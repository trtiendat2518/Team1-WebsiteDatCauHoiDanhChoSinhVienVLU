<?php

use Illuminate\Support\Facades\Route;

Route::post('/chinh-sua-cau-hoi/{post_id}', 'PostController@post_update');