<?php

// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {

    if (Auth::check()) {
        return view('dashboard.dashboard');

    } else {
        return view('welcome');
    }

});

Route::view('/403', 'layouts.403.index');
Route::view('/404', 'layouts.404.index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/repostform', 'repostformController@index')->name('repostform');
Route::get('/repostform/{districts}/{queryform}', 'repostformController@districts')->name('repostform.districts');



Route::get('/people', 'PeopleController@index')->name('people');
Route::get('/people/getpro', 'PeopleController@getpro');
Route::get('people/export/{districts}', 'ExcelController@index');
Route::get('targetgroups/export/{districts}', 'ExcelController@targetgroups');

Route::group(['middleware' => ['AdminMiddleware']], function () {

// todolist
    Route::get('/todolist', 'TodolistsController@index');
    Route::get('/todolist/fetch_todolist', 'TodolistsController@fetch_todolist');
    Route::post('/todolist/store', 'TodolistsController@store');
    Route::get('/todolist/{id}/edit', 'TodolistsController@edit');
    Route::post('/todolist/{id}/update', 'TodolistsController@update');
    Route::get('/todolist/{id}/destroy', 'TodolistsController@destroy'); // delete data

    Route::get('/todolist/{id}/get_todolist_files', 'TodolistsController@get_todolist_files'); //todo  get_todolist_files
    Route::get('/todolist/{id}/get_todolist_files_success', 'TodolistsController@get_todolist_files_success'); //todo  get_todolist_files

    Route::post('/todolist/success', 'TodolistsController@success'); // todo เสร็จ
    Route::get('/todolist/{id}/todolists_assigns', 'TodolistsController@todolists_assigns'); //todo  get_todolist_files
    Route::get('/todolist/search', 'TodolistsController@search'); // todo เสร็จ

    // จัดการข้อมูลหมู่บ้าน
    Route::get('/villages', 'VillageController@index');
    Route::post('/villages/store', 'VillageController@store');
    Route::get('/villages/{id}/edit', 'VillageController@edit');
    Route::post('/villages/{id}/update', 'VillageController@update');
    Route::get('/villages/{id}/destroy', 'VillageController@destroy');

    // จัดการข้อมูลตำบล
    Route::get('/districts', 'DistrictsController@index');
    Route::post('/districts/store', 'DistrictsController@store');
    Route::get('/districts/{id}/edit', 'DistrictsController@edit');
    Route::post('/districts/{id}/update', 'DistrictsController@update');
    Route::get('/districts/{id}/destroy', 'DistrictsController@destroy');

    // Users
    Route::resource('user', 'UserController', ['except' => ['show']]);
    Route::post('/user/store', 'UserController@store');
    Route::get('/user/{id}/edit', 'UserController@edit');
    Route::post('/user/{id}/update', 'UserController@update');
    Route::get('/user/{id}/destroy', 'UserController@destroy');

    // จัดการข้อมูลกลุ่มเป้าหมาย
    Route::get('/manage_targetgroups', 'TargetgroupsController@manage_targetgroups');
    Route::post('/manage_targetgroups/store', 'TargetgroupsController@store');
    Route::get('/manage_targetgroups/{id}/edit', 'TargetgroupsController@edit');
    Route::post('/manage_targetgroups/{id}/update', 'TargetgroupsController@update');
    Route::get('/manage_targetgroups/{id}/destroy', 'TargetgroupsController@destroy');

    //จัดการข้อมูลโควิด

    Route::get('/manage_survey', 'Manage_surveyController@index');
    Route::get('/manage_survey/survey_1s', 'Manage_surveyController@survey_1s');
    Route::get('/manage_survey/survey_2s', 'Manage_surveyController@survey_2s');
    Route::get('/manage_survey/survey_3s', 'Manage_surveyController@survey_3s');
    Route::get('/manage_survey/survey_4s', 'Manage_surveyController@survey_4s');
    Route::get('/manage_survey/export/{districts}/{survey}', 'Manage_surveyController@export');

    // จัดการข้อมูล 17 เป้าหมาย
    Route::get('manage_goal', 'GoalsController@manage');
    Route::get('manage_goal/{id}/edit', 'GoalsController@edit');
    Route::post('manage_goal/store', 'GoalsController@store');
    Route::post('manage_goal/{id}/update', 'GoalsController@update');


    // รายงานแบบฟอร์มกรอกข้อมูลตามภาระงานประจำ
    Route::get('/forms-admin', 'FormsController@forms_admin')->name('forms_admin');

    Route::get('/villages/{id}', 'FormsController@villages');

    Route::get('/forms-1-admin', 'FormsController@forms1');

    Route::get('/forms-2-admin', 'FormsController@forms2');

    Route::get('/forms-3-admin', 'FormsController@forms3');

    Route::get('/forms-4-admin', 'FormsController@forms4');
    Route::get('/forms-4-admin/report/{id}', 'FormsController@forms4_report');

    Route::get('/forms-5-admin', 'FormsController@forms5');
    Route::get('/forms-5-admin/report/{id}', 'FormsController@forms5_report');

    Route::get('/forms-6-admin', 'FormsController@forms6');
    Route::get('/forms-6-admin/report/{id}', 'FormsController@forms6_report');

    Route::get('/forms-7-admin', 'FormsController@forms7');
    Route::get('/forms-7-admin/report/{id}', 'FormsController@forms7_report');


    Route::get('/forms-8-admin', 'FormsController@forms8');

    Route::get('/forms-9-admin', 'FormsController@forms9');
    Route::get('/forms-9-admin/report/{id}', 'FormsController@forms9_report');

    Route::get('/forms-10-admin', 'FormsController@forms10');

    Route::get('/forms-11-admin', 'FormsController@forms11');
    Route::get('/forms-11-admin/report/{id}', 'FormsController@forms11_report');


    Route::get('/forms-12-admin', 'FormsController@forms12');
    Route::get('/forms-12-admin/report/{id}', 'FormsController@forms12_report');

    Route::get('/forms-13-admin', 'FormsController@forms13');
    Route::get('/forms-13-admin/report/{id}', 'FormsController@forms13_report');

    Route::get('/forms-14-admin', 'FormsController@forms14');
    Route::get('/forms-14-admin/report/{id}', 'FormsController@forms14_report');

});

Route::group(['middleware' => 'auth'], function () {

    // แก้ไขข้อมูลส่วนตัว

    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

    // ข้ออมูลกลุ่มเป้าหมาย
    Route::get('/targetgroups', 'TargetgroupsController@index');
    Route::post('/targetgroups/store', 'TargetgroupsController@store');
    Route::get('/targetgroups/{id}/edit', 'TargetgroupsController@edit');
    Route::post('/targetgroups/{id}/update', 'TargetgroupsController@update');
    Route::get('/targetgroups/{id}/destroy', 'TargetgroupsController@destroy');

    //ห้นาแรกแบบสำรวจ
    Route::get('/survey', 'SurveyController@index');
    //  แบบสำรวจชุดที่  1  สำหรับที่พักอาศัย
    // Route::get('/survey_1s', 'Survey_1sController@index');
    Route::post('/survey_1s/store', 'Survey_1sController@store');

    //  แบบสำรวจชุดที่  2  สำหรับที่พักอาศัย
    // Route::get('/survey_2s', 'Survey_2sController@index');
    Route::post('/survey_2s/store', 'Survey_2sController@store');

    //  แบบสำรวจชุดที่  3  แบบสำรวจชุดที่ 3 สำหรับศาสนสถาน
    // Route::get('/survey_3s', 'Survey_3sController@index');
    Route::post('/survey_3s/store', 'Survey_3sController@store');

    //แบบสำรวจชุดที่  4  สำหรับโรงเรียน
    // Route::get('/survey_4s', 'Survey_4sController@index');
    Route::post('/survey_4s/store', 'Survey_4sController@store');


    // ---------------------------------------------------------------  ตัวชี้วัด

    Route::get('goal/{id}', 'GoalsController@index');

    // Route::get('goals_1s/{id}', 'Goals_1sController@index');
    Route::post('goals_1s/store', 'Goals_1sController@store');
    Route::get('/goals_1s/{id}/edit', 'Goals_1sController@edit');
    Route::post('/goals_1s/{id}/update', 'Goals_1sController@update');

    // Route::get('goals_2s/{id}', 'Goals_2sController@index');
    Route::post('goals_2s/store', 'Goals_2sController@store');
    Route::get('/goals_2s/{id}/edit', 'Goals_2sController@edit');
    Route::post('/goals_2s/{id}/update', 'Goals_2sController@update');

    // Route::get('goals_3s/{id}', 'Goals_3sController@index');
    Route::post('goals_3s/store', 'Goals_3sController@store');
    Route::get('/goals_3s/{id}/edit', 'Goals_3sController@edit');
    Route::post('/goals_3s/{id}/update', 'Goals_3sController@update');

    // Route::get('goals_4s/{id}', 'Goals_4sController@index');
    Route::post('goals_4s/store', 'Goals_4sController@store');
    Route::get('/goals_4s/{id}/edit', 'Goals_4sController@edit');
    Route::post('/goals_4s/{id}/update', 'Goals_4sController@update');

    // Route::get('goals_5s/{id}', 'Goals_5sController@index');
    Route::post('goals_5s/store', 'Goals_5sController@store');
    Route::get('/goals_5s/{id}/edit', 'Goals_5sController@edit');
    Route::post('/goals_5s/{id}/update', 'Goals_5sController@update');

    // Route::get('goals_6s/{id}', 'Goals_6sController@index');
    Route::post('goals_6s/store', 'Goals_6sController@store');
    Route::get('/goals_6s/{id}/edit', 'Goals_6sController@edit');
    Route::post('/goals_6s/{id}/update', 'Goals_6sController@update');

    // Route::get('goals_7s/{id}', 'Goals_7sController@index');
    Route::post('goals_7s/store', 'Goals_7sController@store');
    Route::get('/goals_7s/{id}/edit', 'Goals_7sController@edit');
    Route::post('/goals_7s/{id}/update', 'Goals_7sController@update');

    // Route::get('goals_8s/{id}', 'Goals_8sController@index');
    Route::post('goals_8s/store', 'Goals_8sController@store');
    Route::get('/goals_8s/{id}/edit', 'Goals_8sController@edit');
    Route::post('/goals_8s/{id}/update', 'Goals_8sController@update');

    // Route::get('goals_9s/{id}', 'Goals_9sController@index');
    Route::post('goals_9s/store', 'Goals_9sController@store');
    Route::get('/goals_9s/{id}/edit', 'Goals_9sController@edit');
    Route::post('/goals_9s/{id}/update', 'Goals_9sController@update');

    // Route::get('goals_10s/{id}', 'Goals_10sController@index');
    Route::post('goals_10s/store', 'Goals_10sController@store');
    Route::get('/goals_10s/{id}/edit', 'Goals_10sController@edit');
    Route::post('/goals_10s/{id}/update', 'Goals_10sController@update');

    // Route::get('goals_11s/{id}', 'Goals_11sController@index');
    Route::post('goals_11s/store', 'Goals_11sController@store');
    Route::get('/goals_11s/{id}/edit', 'Goals_11sController@edit');
    Route::post('/goals_11s/{id}/update', 'Goals_11sController@update');

    // Route::get('goals_12s/{id}', 'Goals_12sController@index');
    Route::post('goals_12s/store', 'Goals_12sController@store');
    Route::get('/goals_12s/{id}/edit', 'Goals_12sController@edit');
    Route::post('/goals_12s/{id}/update', 'Goals_12sController@update');

    // Route::get('goals_13s/{id}', 'Goals_13sController@index');
    Route::post('goals_13s/store', 'Goals_13sController@store');
    Route::get('/goals_13s/{id}/edit', 'Goals_13sController@edit');
    Route::post('/goals_13s/{id}/update', 'Goals_13sController@update');

    // Route::get('goals_14s/{id}', 'Goals_14sController@index');
    Route::post('goals_14s/store', 'Goals_14sController@store');
    Route::get('/goals_14s/{id}/edit', 'Goals_14sController@edit');
    Route::post('/goals_14s/{id}/update', 'Goals_14sController@update');

    // Route::get('goals_15s/{id}', 'Goals_15sController@index');
    Route::post('goals_15s/store', 'Goals_15sController@store');
    Route::get('/goals_15s/{id}/edit', 'Goals_15sController@edit');
    Route::post('/goals_15s/{id}/update', 'Goals_15sController@update');

    // Route::get('goals_16s/{id}', 'Goals_16sController@index');
    Route::post('goals_16s/store', 'Goals_16sController@store');
    Route::get('/goals_16s/{id}/edit', 'Goals_16sController@edit');
    Route::post('/goals_16s/{id}/update', 'Goals_16sController@update');

    // Route::get('goals_17s/{id}', 'Goals_17sController@index');
    Route::post('goals_17s/store', 'Goals_17sController@store');
    Route::get('/goals_17s/{id}/edit', 'Goals_17sController@edit');
    Route::post('/goals_17s/{id}/update', 'Goals_17sController@update');

    // -----------------------------------ไดอารี่----------------------------------------
    Route::get('/blog_subjects', 'Blog_subjectsController@index');
    Route::post('/blog_subjects/store', 'Blog_subjectsController@store');
    Route::get('/blog_subjects/{id}/edit', 'Blog_subjectsController@edit');
    Route::post('/blog_subjects/{id}/update', 'Blog_subjectsController@update');
    Route::get('/blog_subjects/{id}/destroy', 'Blog_subjectsController@destroy');

    Route::get('/sum/{id}/{subject}', 'Blog_subjectsController@sum');
    Route::get('/blog_subjects/{id}/history', 'Blog_subjectsController@history');
    Route::get('/blog_details/history/{blog_subjects_id}/{blog_details_user}', 'Blog_subjectsController@history_detail');

    Route::get('/blog_details', 'Blog_detailsController@index');
    Route::get('/blog_details/subject/{id}', 'Blog_detailsController@show_subject');
    Route::get('/blog_details/write/{id}', 'Blog_detailsController@write');
    Route::post('/blog_details/upload', 'Blog_detailsController@upload')->name('blog_details.upload');
    Route::post('/blog_details/upload_tiny', 'Blog_detailsController@upload_tiny')->name('upload_tiny');

    Route::post('/blog_details/store', 'Blog_detailsController@store')->name('blog_details.store');
    Route::get('/blog_details/{id}/edit', 'Blog_detailsController@edit');
    Route::get('/blog_details/{id}/select_data', 'Blog_detailsController@select_data');
    Route::post('/blog_details/{id}/update', 'Blog_detailsController@update');


    Route::get('/blog_details/{id}/destroy', 'Blog_detailsController@destroy');


    Route::get('/blog_details/copy/{id}', 'Blog_detailsController@copy')->name('blog_details.copy');





    Route::get('/forms', 'FormsController@index')->name('forms.index');
    Route::post('/upload','FormsController@upload')->name('upload');

    Route::get('/forms-1', 'Forms_1Controller@index')->name('form1.index');
    Route::get('/forms-1/create', 'Forms_1Controller@create')->name('form1.create');
    Route::post('/forms-1', 'Forms_1Controller@store')->name('form1.store');
    Route::get('/forms-1/{id}', 'Forms_1Controller@show')->name('form1.show');
    Route::get('/forms-1/delete/{id}', 'Forms_1Controller@destroy')->name('form1.destroy');

    Route::get('/forms-2', 'Forms_2Controller@index')->name('form2.index');
    Route::get('/forms-2/create', 'Forms_2Controller@create')->name('form2.create');
    Route::post('/forms-2', 'Forms_2Controller@store')->name('form2.store');
    Route::get('/forms-2/{id}', 'Forms_2Controller@show')->name('form2.show');
    Route::get('/forms-2/delete/{id}', 'Forms_2Controller@destroy')->name('form2.destroy');


    Route::get('/forms-3', 'Forms_3Controller@index')->name('form3.index');
    Route::get('/forms-3/create', 'Forms_3Controller@create')->name('form3.create');
    Route::post('/forms-3', 'Forms_3Controller@store')->name('form3.store');
    Route::get('/forms-3/{id}', 'Forms_3Controller@show')->name('form3.show');
    Route::get('/forms-3/delete/{id}', 'Forms_3Controller@destroy')->name('form3.destroy');

    Route::get('/forms-4', 'Forms_4Controller@index')->name('form4.index');
    Route::get('/forms-4/create', 'Forms_4Controller@create')->name('form4.create');
    Route::post('/forms-4', 'Forms_4Controller@store')->name('form4.store');
    Route::get('/forms-4/{id}', 'Forms_4Controller@show')->name('form4.show');
    Route::get('/forms-4/delete/{id}', 'Forms_4Controller@destroy')->name('form4.destroy');

    Route::get('/forms-5', 'Forms_5Controller@index')->name('form5.index');
    Route::get('/forms-5/create', 'Forms_5Controller@create')->name('form5.create');
    Route::post('/forms-5', 'Forms_5Controller@store')->name('form5.store');
    Route::get('/forms-5/{id}', 'Forms_5Controller@show')->name('form5.show');
    Route::get('/forms-5/delete/{id}', 'Forms_5Controller@destroy')->name('form5.destroy');


    Route::get('/forms-6', 'Forms_6Controller@index')->name('form6.index');
    Route::get('/forms-6/create', 'Forms_6Controller@create')->name('form6.create');
    Route::post('/forms-6', 'Forms_6Controller@store')->name('form6.store');
    Route::get('/forms-6/{id}', 'Forms_6Controller@show')->name('form6.show');
    Route::get('/forms-6/delete/{id}', 'Forms_6Controller@destroy')->name('form6.destroy');



    Route::get('/forms-7', 'Forms_7Controller@index')->name('form7.index');
    Route::get('/forms-7/create', 'Forms_7Controller@create')->name('form7.create');
    Route::post('/forms-7', 'Forms_7Controller@store')->name('form7.store');
    Route::get('/forms-7/{id}', 'Forms_7Controller@show')->name('form7.show');
    Route::get('/forms-7/delete/{id}', 'Forms_7Controller@destroy')->name('form7.destroy');

    Route::get('/forms-8', 'Forms_8Controller@index')->name('form8.index');
    Route::get('/forms-8/create', 'Forms_8Controller@create')->name('form8.create');
    Route::post('/forms-8', 'Forms_8Controller@store')->name('form8.store');
    Route::get('/forms-8/{id}', 'Forms_8Controller@show')->name('form8.show');
    Route::get('/forms-8/delete/{id}', 'Forms_8Controller@destroy')->name('form8.destroy');


    Route::get('/forms-9', 'Forms_9Controller@index')->name('form9.index');
    Route::get('/forms-9/create', 'Forms_9Controller@create')->name('form9.create');
    Route::post('/forms-9', 'Forms_9Controller@store')->name('form9.store');
    Route::get('/forms-9/{id}', 'Forms_9Controller@show')->name('form9.show');
    Route::get('/forms-9/delete/{id}', 'Forms_9Controller@destroy')->name('form9.destroy');

    Route::get('/forms-10', 'Forms_10Controller@index')->name('form10.index');
    Route::get('/forms-10/create', 'Forms_10Controller@create')->name('form10.create');
    Route::post('/forms-10', 'Forms_10Controller@store')->name('form10.store');
    Route::get('/forms-10/{id}', 'Forms_10Controller@show')->name('form10.show');
    Route::get('/forms-10/delete/{id}', 'Forms_10Controller@destroy')->name('form10.destroy');

    Route::get('/forms-11', 'Forms_11Controller@index')->name('form11.index');
    Route::get('/forms-11/create', 'Forms_11Controller@create')->name('form11.create');
    Route::post('/forms-11', 'Forms_11Controller@store')->name('form11.store');
    Route::get('/forms-11/{id}', 'Forms_11Controller@show')->name('form11.show');
    Route::get('/forms-11/delete/{id}', 'Forms_11Controller@destroy')->name('form11.destroy');


    Route::get('/forms-12', 'Forms_12Controller@index')->name('form12.index');
    Route::get('/forms-12/create', 'Forms_12Controller@create')->name('form12.create');
    Route::post('/forms-12', 'Forms_12Controller@store')->name('form12.store');
    Route::get('/forms-12/{id}', 'Forms_12Controller@show')->name('form12.show');
    Route::get('/forms-12/delete/{id}', 'Forms_12Controller@destroy')->name('form12.destroy');



    Route::get('/forms-13', 'Forms_13Controller@index')->name('form13.index');
    Route::get('/forms-13/create', 'Forms_13Controller@create')->name('form13.create');
    Route::post('/forms-13', 'Forms_13Controller@store')->name('form13.store');
    Route::get('/forms-13/{id}', 'Forms_13Controller@show')->name('form13.show');
    Route::get('/forms-13/delete/{id}', 'Forms_13Controller@destroy')->name('form13.destroy');


    Route::get('/forms-14', 'Forms_14Controller@index')->name('form14.index');
    Route::get('/forms-14/create', 'Forms_14Controller@create')->name('form14.create');
    Route::post('/forms-14', 'Forms_14Controller@store')->name('form14.store');
    Route::get('/forms-14/{id}', 'Forms_14Controller@show')->name('form14.show');
    Route::get('/forms-14/delete/{id}', 'Forms_14Controller@destroy')->name('form14.destroy');


});
