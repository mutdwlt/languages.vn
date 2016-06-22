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
    Route::get(LaravelLocalization::transRoute('routes.contact'),'HomeController@Contact');
    Route::get(LaravelLocalization::transRoute('routes.recruit'),'HomeController@Recruit');
    Route::get(LaravelLocalization::transRoute('routes.common-question'),'HomeController@CommonQuestion');
//    Route::get(LaravelLocalization::transRoute('routes.view'), function($id) {
//        return View::make('view', ['id' => $id]);
//    });
});

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED * */


