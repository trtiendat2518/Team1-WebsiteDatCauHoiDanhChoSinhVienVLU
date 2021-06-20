<?php

use Illuminate\Support\Facades\Route;

//STUDENT HOME
Route::get('/', 'HomeController@index');
Route::get('/cau-hoi-hot', 'HomeController@hot');
Route::post('/tim-kiem','HomeController@search');

//STUDENT ACCOUNT
Route::get('/login', 'StudentController@index_login');
Route::get('/register', 'StudentController@index_register');
Route::get('/forgetpass', 'StudentController@index_forgetpass');
Route::get('/newpass', 'StudentController@index_newpass');
Route::get('/thay-doi-mat-khau/{student_id}', 'StudentController@changepass');

Route::post('/dang-nhap', 'StudentController@login');
Route::post('/dang-ky', 'StudentController@register');
Route::get('/dang-xuat', 'StudentController@logout');
Route::post('/xac-nhan-mail', 'StudentController@confirm_mail');
Route::post('/tao-mat-khau-moi', 'StudentController@newpassword');
Route::post('/doi-mat-khau/{student_id}', 'StudentController@changenewpass');

//STUDENT MAIL
Route::get('/xac-nhan-tai-khoan-email', 'MailController@verifymail');
Route::get('/xac-nhan-mail-mat-khau-moi', 'MailController@verifychangepassword');

//STUDENT PROFILE
Route::get('/thong-tin-tai-khoan/{student_id}', 'StudentInfoController@studentinfo_profile');
Route::post('/them-thong-tin/{student_id}', 'StudentInfoController@studentinfo_create');
Route::post('/sua-thong-tin/{student_info_id}', 'StudentInfoController@studentinfo_update');

//STUDENT POST
Route::post('/dang-cau-hoi', 'PostController@post_new');
Route::get('/xoa-cau-hoi', 'PostController@post_delete');
Route::post('/chinh-sua-cau-hoi/{post_id}', 'PostController@post_update');
Route::get('/chi-tiet-cau-hoi/{post_id}', 'PostController@post_detail');

//STUDENT CATEGORY POST
Route::get('/cau-hoi-theo-loai/{category_id}','CategoryController@show_category_post');

//STUDENT TIMELINE
Route::get('/trang-sinh-vien/{student_id}','StudentController@show_student_post');

//STUDENT COMMENT
Route::post('/binh-luan/{post_id}', 'CommentController@comment_post');
Route::get('/xoa-binh-luan', 'CommentController@comment_delete');

//STUDENT LIKE
Route::post('/thich-bai-viet/{post_id}', 'LikeController@like');

//REPLY FROM FACULTY
Route::get('/xem-cau-tra-loi-khoa/{post_id}', 'ReplyController@post_reply');

//STUDENT NOFICATION
Route::get('/tat-ca-thong-bao', 'NoficationController@nofication_list');
Route::post('/danh-dau-da-doc/{nofication_id}', 'NoficationController@nofication_readone');
Route::get('/xoa-thong-bao', 'NoficationController@nofication_delnofi');
Route::post('/doc-tat-ca', 'NoficationController@nofication_readall');

//-----------------------------------------------------------------------------------------
//ADMIN HOME
Route::get('/admin-home', 'AdminController@index');

//ADMIN ACCOUNT
Route::get('/admin-login', 'AdminController@index_login');
Route::post('/login-admin', 'AdminController@login');
Route::get('/logout-admin', 'AdminController@logout');

//ADMIN FACULTY
Route::get('/them-moi-khoa', 'FacultyController@faculty_open');
Route::post('/them-moi-khoa-thanh-cong', 'FacultyController@faculty_add');
Route::get('/danh-sach-khoa', 'FacultyController@faculty_list');
Route::get('/cap-nhat-khoa/{faculty_id}', 'FacultyController@faculty_openupdate');
Route::post('/cap-nhat-khoa-thanh-cong/{faculty_id}', 'FacultyController@faculty_update');
Route::get('/xoa-khoa/{faculty_id}', 'FacultyController@faculty_delete');
Route::get('/an-khoa/{faculty_id}', 'FacultyController@faculty_unactive');
Route::get('/hien-thi-khoa/{faculty_id}', 'FacultyController@faculty_active');
Route::post('tim-kiem-khoa','FacultyController@faculty_search');

//ADMIN SPECIALIZED
Route::get('/them-moi-chuyen-nganh', 'SpecializedController@specialized_open');
Route::post('/them-moi-chuyen-nganh-thanh-cong', 'SpecializedController@specialized_add');
Route::get('/danh-sach-chuyen-nganh', 'SpecializedController@specialized_list');
Route::get('/cap-nhat-chuyen-nganh/{specialized_id}', 'SpecializedController@specialized_openupdate');
Route::post('/cap-nhat-chuyen-nganh-thanh-cong/{specialized_id}', 'SpecializedController@specialized_update');
Route::get('/xoa-chuyen-nganh/{specialized_id}', 'SpecializedController@specialized_delete');
Route::get('/an-chuyen-nganh/{specialized_id}', 'SpecializedController@specialized_unactive');
Route::get('/hien-thi-chuyen-nganh/{specialized_id}', 'SpecializedController@specialized_active');
Route::post('/tim-kiem-chuyen-nganh','SpecializedController@specialized_search');

//ADMIN COURSE
Route::get('/them-moi-nam-hoc', 'CourseController@course_open');
Route::post('/them-moi-nam-hoc-thanh-cong', 'CourseController@course_add');
Route::get('/danh-sach-nam-hoc', 'CourseController@course_list');
Route::get('/cap-nhat-nam-hoc/{course_id}', 'CourseController@course_openupdate');
Route::post('/cap-nhat-nam-hoc-thanh-cong/{course_id}', 'CourseController@course_update');
Route::get('/xoa-nam-hoc/{course_id}', 'CourseController@course_delete');
Route::get('/an-nam-hoc/{course_id}', 'CourseController@course_unactive');
Route::get('/hien-thi-nam-hoc/{course_id}', 'CourseController@course_active');
Route::post('/tim-kiem-nam-hoc','CourseController@course_search');

//ADMIN POST
Route::get('/danh-sach-cau-hoi', 'PostController@postadmin_list');
Route::post('/tim-kiem-cau-hoi','PostController@postadmin_search');
Route::get('/xem-cau-hoi/{post_id}', 'PostController@postadmin_detail');
Route::get('/xoa-cau-hoi/{post_id}', 'PostController@postadmin_delete');
Route::post('/import-cau-hoi', 'PostController@postadmin_import');
Route::post('/export-cau-hoi', 'PostController@postadmin_export');
Route::get('/ghim-cau-hoi/{post_id}', 'PostController@postadmin_pin');
Route::get('/huy-ghim-cau-hoi/{post_id}', 'PostController@postadmin_unpin');

//ADMIN HOT POST
Route::get('/cau-hoi-dang-chu-y', 'PostController@postadmin_listhot');
Route::post('/tim-kiem-cau-hoi-dang-chu-y','PostController@postadmin_searchhot');
Route::get('/xem-cau-hoi-dang-chu-y/{post_id}', 'PostController@postadmin_detailhot');

//ADMIN REPLY
Route::post('/tra-loi-cau-hoi/{post_id}', 'ReplyController@reply_post');
