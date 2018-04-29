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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

//Routing to the initial page showing course details 
Route::get('/', 'HomeController@index');

//Routing to add the bookmark data to the database
Route::post('/home/insert', 'HomeController@actionInsert');

//Routing to show the bookmarked data in a different page
Route::get('/bookmark', 'BookmarkController@index');
