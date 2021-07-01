<?php

use Illuminate\Support\Facades\Route;

//STUDENT HOME
Route::get('/', 'Student\HomeController@index');
Route::get('/cau-hoi-hot', 'Student\HomeController@hot');
Route::post('/tim-kiem','Student\HomeController@search');

//STUDENT ACCOUNT
Route::get('/login', 'Student\StudentController@index_login');
Route::get('/register', 'Student\StudentController@index_register');
Route::get('/forgetpass', 'Student\StudentController@index_forgetpass');
Route::get('/newpass', 'Student\StudentController@index_newpass');
Route::get('/thay-doi-mat-khau/{student_id}', 'Student\StudentController@changepass');

Route::post('/dang-nhap', 'Student\StudentController@login');
Route::post('/dang-ky', 'Student\StudentController@register');
Route::get('/dang-xuat', 'Student\StudentController@logout');
Route::post('/xac-nhan-mail', 'Student\StudentController@confirm_mail');
Route::post('/tao-mat-khau-moi', 'Student\StudentController@newpassword');
Route::post('/doi-mat-khau/{student_id}', 'Student\StudentController@changenewpass');

//STUDENT MAIL
Route::get('/xac-nhan-tai-khoan-email', 'Student\MailController@verifymail');
Route::get('/xac-nhan-mail-mat-khau-moi', 'Student\MailController@verifychangepassword');

//STUDENT PROFILE
Route::get('/thong-tin-tai-khoan/{student_id}', 'Student\StudentInfoController@studentinfo_profile');
Route::post('/them-thong-tin/{student_id}', 'Student\StudentInfoController@studentinfo_create');
Route::post('/sua-thong-tin/{student_info_id}', 'Student\StudentInfoController@studentinfo_update');

//STUDENT POST
Route::post('/dang-cau-hoi', 'Student\PostController@post_new');
Route::get('/xoa-cau-hoi', 'Student\PostController@post_delete');
Route::post('/chinh-sua-cau-hoi/{post_id}', 'Student\PostController@post_update');
Route::get('/chi-tiet-cau-hoi/{post_id}', 'Student\PostController@post_detail');

//STUDENT CATEGORY POST
Route::get('/cau-hoi-theo-loai/{category_id}','Student\CategoryController@show_category_post');

//STUDENT TIMELINE
Route::get('/trang-sinh-vien/{student_id}','Student\StudentController@show_student_post');

//STUDENT COMMENT
Route::post('/binh-luan/{post_id}', 'Student\CommentController@comment_post');
Route::get('/xoa-binh-luan', 'Student\CommentController@comment_delete');

//STUDENT LIKE
Route::post('/thich-bai-viet/{post_id}', 'Student\LikeController@like');

//REPLY FROM FACULTY
Route::get('/xem-cau-tra-loi-khoa/{post_id}', 'Student\ReplyController@post_reply');

//STUDENT NOFICATION
Route::get('/tat-ca-thong-bao', 'Student\NoficationController@nofication_list');
Route::post('/danh-dau-da-doc/{nofication_id}', 'Student\NoficationController@nofication_readone');
Route::get('/xoa-thong-bao', 'Student\NoficationController@nofication_delnofi');
Route::post('/doc-tat-ca', 'Student\NoficationController@nofication_readall');

//-----------------------------------------------------------------------------------------
//ADMIN HOME
Route::get('/admin-home', 'Admin\AdminController@index');

//ADMIN ACCOUNT
Route::get('/admin-login', 'Admin\AdminController@index_login');
Route::post('/login-admin', 'Admin\AdminController@login');
Route::get('/logout-admin', 'Admin\AdminController@logout');

//ADMIN FACULTY
Route::get('/them-moi-khoa', 'Admin\FacultyController@faculty_open');
Route::post('/them-moi-khoa-thanh-cong', 'Admin\FacultyController@faculty_add');
Route::get('/danh-sach-khoa', 'Admin\FacultyController@faculty_list');
Route::get('/cap-nhat-khoa/{faculty_id}', 'Admin\FacultyController@faculty_openupdate');
Route::post('/cap-nhat-khoa-thanh-cong/{faculty_id}', 'Admin\FacultyController@faculty_update');
Route::get('/xoa-khoa/{faculty_id}', 'Admin\FacultyController@faculty_delete');
Route::get('/an-khoa/{faculty_id}', 'Admin\FacultyController@faculty_unactive');
Route::get('/hien-thi-khoa/{faculty_id}', 'Admin\FacultyController@faculty_active');
Route::post('tim-kiem-khoa','Admin\FacultyController@faculty_search');

//ADMIN SPECIALIZED
Route::get('/them-moi-chuyen-nganh', 'Admin\SpecializedController@specialized_open');
Route::post('/them-moi-chuyen-nganh-thanh-cong', 'Admin\SpecializedController@specialized_add');
Route::get('/danh-sach-chuyen-nganh', 'Admin\SpecializedController@specialized_list');
Route::get('/cap-nhat-chuyen-nganh/{specialized_id}', 'Admin\SpecializedController@specialized_openupdate');
Route::post('/cap-nhat-chuyen-nganh-thanh-cong/{specialized_id}', 'Admin\SpecializedController@specialized_update');
Route::get('/xoa-chuyen-nganh/{specialized_id}', 'Admin\SpecializedController@specialized_delete');
Route::get('/an-chuyen-nganh/{specialized_id}', 'Admin\SpecializedController@specialized_unactive');
Route::get('/hien-thi-chuyen-nganh/{specialized_id}', 'Admin\SpecializedController@specialized_active');
Route::post('/tim-kiem-chuyen-nganh','Admin\SpecializedController@specialized_search');

//ADMIN COURSE
Route::get('/them-moi-nam-hoc', 'Admin\CourseController@course_open');
Route::post('/them-moi-nam-hoc-thanh-cong', 'Admin\CourseController@course_add');
Route::get('/danh-sach-nam-hoc', 'Admin\CourseController@course_list');
Route::get('/cap-nhat-nam-hoc/{course_id}', 'Admin\CourseController@course_openupdate');
Route::post('/cap-nhat-nam-hoc-thanh-cong/{course_id}', 'Admin\CourseController@course_update');
Route::get('/xoa-nam-hoc/{course_id}', 'Admin\CourseController@course_delete');
Route::get('/an-nam-hoc/{course_id}', 'Admin\CourseController@course_unactive');
Route::get('/hien-thi-nam-hoc/{course_id}', 'Admin\CourseController@course_active');
Route::post('/tim-kiem-nam-hoc','Admin\CourseController@course_search');

//ADMIN POST
Route::get('/danh-sach-cau-hoi', 'Admin\PostController@postadmin_list');
Route::post('/tim-kiem-cau-hoi','Admin\PostController@postadmin_search');
Route::get('/xem-cau-hoi/{post_id}', 'Admin\PostController@postadmin_detail');
Route::get('/xoa-cau-hoi/{post_id}', 'Admin\PostController@postadmin_delete');
Route::post('/import-cau-hoi', 'Admin\PostController@postadmin_import');
Route::post('/export-cau-hoi', 'Admin\PostController@postadmin_export');
Route::get('/ghim-cau-hoi/{post_id}', 'Admin\PostController@postadmin_pin');
Route::get('/huy-ghim-cau-hoi/{post_id}', 'Admin\PostController@postadmin_unpin');

//ADMIN HOT POST
Route::get('/cau-hoi-dang-chu-y', 'Admin\PostController@postadmin_listhot');
Route::post('/tim-kiem-cau-hoi-dang-chu-y','Admin\PostController@postadmin_searchhot');
Route::get('/xem-cau-hoi-dang-chu-y/{post_id}', 'Admin\PostController@postadmin_detailhot');
Route::get('/xoa-cau-hoi-dang-chu-y/{post_id}', 'Admin\PostController@postadmin_deletehot');

//ADMIN REPLY
Route::post('/tra-loi-cau-hoi/{post_id}', 'Admin\ReplyController@reply_post');
Route::post('/tra-loi-cau-hoi-dang-chu-y/{post_id}', 'Admin\ReplyController@reply_posthot');

//ADMIN CATEGORY
Route::get('/danh-sach-danh-muc', 'Admin\CategoryController@category_list');
Route::post('/tim-kiem-danh-muc','Admin\CategoryController@category_search');
Route::get('/them-moi-danh-muc', 'Admin\CategoryController@category_open');
Route::post('/them-moi-danh-muc-thanh-cong', 'Admin\CategoryController@category_add');
Route::get('/cap-nhat-danh-muc/{category_id}', 'Admin\CategoryController@category_openupdate');
Route::post('/cap-nhat-danh-muc-thanh-cong/{category_id}', 'Admin\CategoryController@category_update');
Route::get('/an-danh-muc/{category_id}', 'Admin\CategoryController@category_unactive');
Route::get('/hien-thi-danh-muc/{category_id}', 'Admin\CategoryController@category_active');
Route::get('/xoa-danh-muc/{category_id}', 'Admin\CategoryController@category_delete');

//ADMIN ALUMNUS
Route::get('/danh-sach-sinh-vien', 'Admin\StudentController@student_list');
Route::post('/tim-kiem-sinh-vien','Admin\StudentController@student_search');
Route::get('/them-moi-sinh-vien', 'Admin\StudentController@student_open');
Route::post('/them-moi-sinh-vien-thanh-cong', 'Admin\StudentController@student_add');
Route::get('/cap-nhat-sinh-vien/{student_id}', 'Admin\StudentController@student_openupdate');
Route::post('/cap-nhat-sinh-vien-thanh-cong/{student_id}', 'Admin\StudentController@student_update');
Route::get('/xoa-sinh-vien/{student_id}', 'Admin\StudentController@student_delete');
Route::post('/import-sinh-vien', 'Admin\StudentController@student_import');
Route::post('/export-sinh-vien', 'Admin\StudentController@student_export');

//ADMIN USER
Route::get('/them-moi-user', 'Admin\UserController@user_open');
Route::post('/them-moi-user-thanh-cong', 'Admin\UserController@user_add');
Route::get('/danh-sach-user', 'Admin\UserController@user_list');
Route::get('/cap-nhat-user/{admin_id}', 'Admin\UserController@user_openupdate');
Route::post('/cap-nhat-user-thanh-cong/{admin_id}', 'Admin\UserController@user_update');
Route::get('/an-user/{admin_id}', 'Admin\UserController@user_unactive');
Route::get('/hien-thi-user/{admin_id}', 'Admin\UserController@user_active');
Route::post('/tim-kiem-user','Admin\UserController@user_search');
Route::post('/import-user', 'Admin\UserController@user_import');
Route::post('/export-user', 'Admin\UserController@user_export');
Route::get('/xoa-user/{admin_id}', 'Admin\UserController@user_delete');

//ADMIN INFO
Route::get('/doi-mat-khau-moi', 'Admin\AdminController@admin_openchangepass');
Route::post('/doi-mat-khau-moi-thanh-cong/{admin_id}', 'Admin\AdminController@admin_changepass');
Route::get('/thong-tin-tai-khoan-admin/{admin_id}', 'Admin\AdminInfoController@admininfo_profile');
Route::post('/them-thong-tin-admin/{admin_id}', 'Admin\AdminInfoController@admininfo_create');
Route::post('/sua-thong-tin-admin/{admin_info_id}', 'Admin\AdminInfoController@admininfo_update');

//ADMIN STATISTIC
Route::post('/loc-ngay-thang', 'Admin\StatisticController@statistic_filter');
Route::post('/loc-theo-ngay-thang-nam', 'Admin\StatisticController@statistic_select');
Route::post('/hien-thi-thong-ke', 'Admin\StatisticController@statistic_show');


