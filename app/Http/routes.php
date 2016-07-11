<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

// app/Http/routes.php
Route::group(
        [
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localize'], // Route translate middleware
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect'],
        ], function() {
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP * */
    Route::get('/', function () {
        return view('home');
    });
    
    Route::get(LaravelLocalization::transRoute('routes.about-us/learning-enviroment'), 'HomeController@learningenv');
    Route::get(LaravelLocalization::transRoute('routes.our-location'), 'HomeController@location');
    Route::get(LaravelLocalization::transRoute('routes.news-and-events'), 'HomeController@news');
    Route::get(LaravelLocalization::transRoute('routes.about-us/who-we-are'), 'HomeController@Whoweare');
    Route::get(LaravelLocalization::transRoute('routes.about-us/our-motivation'), 'HomeController@Motivation');
    Route::get(LaravelLocalization::transRoute('routes.about-us/teacher-info'), 'HomeController@Staffinfo');
    Route::get(LaravelLocalization::transRoute('routes.about-us/our-center'), 'HomeController@Centerinfo');
    Route::get(LaravelLocalization::transRoute('routes.courses/online-registration'), 'HomeController@CoursesRegistration');
    Route::get(LaravelLocalization::transRoute('routes.courses/english-for-kinder'), 'HomeController@CoursesKinder');
    Route::get(LaravelLocalization::transRoute('routes.courses/english-for-child'), 'HomeController@CoursesChild');
    Route::get(LaravelLocalization::transRoute('routes.courses/english-for-teens'), 'HomeController@CoursesTeen');
    Route::get(LaravelLocalization::transRoute('routes.courses/communication-english'), 'HomeController@CoursesCommunication');
    Route::get(LaravelLocalization::transRoute('routes.courses/chuyen-de'), 'HomeController@CoursesChuyende');
    Route::get(LaravelLocalization::transRoute('routes.contact'), 'HomeController@Contact');
    Route::get(LaravelLocalization::transRoute('routes.recruit'), 'HomeController@Recruit');
    Route::get(LaravelLocalization::transRoute('routes.recruit/teaching-assistant'), 'HomeController@RecruitTeaching');
    Route::get(LaravelLocalization::transRoute('routes.recruit/internship'), 'HomeController@RecruitIntern');
    Route::get(LaravelLocalization::transRoute('routes.recruit/admin-officer'), 'HomeController@RecruitOfficer');
    Route::get(LaravelLocalization::transRoute('routes.common-question'), 'HomeController@CommonQuestion');
//    Route::get(LaravelLocalization::transRoute('routes.view'), function($id) {
//        return View::make('view', ['id' => $id]);
//    });
});

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED * */
Route::any('/test', 'HomeController@anyForm');

Route::get('/mail', 'HomeController@sendEmailReminder');

Route::post('/contact/sendmail', 'HomeController@sendContact');
Route::post('/courses/sendRegistration', 'HomeController@sendRegistration');

Route::auth();

Route::get('/home', 'HomeController@index');
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@Index');
    Route::get('/page', 'AdminController@listpage');
    Route::any('/page/edit', 'AdminController@edit');
    Route::get('/post', 'AdminController@listpost');
    Route::any('/post/new', 'AdminController@createpost');
    Route::any('/post/edit', 'AdminController@createpost');
});

