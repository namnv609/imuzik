<?php

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
    return view('welcome');
});

/**
 * Admin routes
 */

Route::group(["namespace" => "Admin", "prefix" => "admin"], function() {
    Route::get("/", "DashboardsController@index");

    /**
     * Session routes
     */
    Route::group(["prefix" => "login"], function() {
        Route::get("/", "SessionsController@index");
    });
});
