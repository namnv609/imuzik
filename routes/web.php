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
    /**
     * Session routes
     */
    Route::group(["prefix" => "login"], function() {
        Route::get("/", "SessionsController@index");
        Route::post("/", "SessionsController@create");
    });
    Route::get("/logout", "SessionsController@destroy");

    Route::group(["middleware" => ["admin"]], function() {
        Route::get("/", "DashboardsController@index")->name("dashboards.index");

        /**
         * Albums routes
         */
        Route::group(["prefix" => "albums"], function() {
            Route::get("/", "AlbumsController@index")->name("albums.index");
        });
    });
});
