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
Route::get('/index', function () {
    return view('index');
});
Route::get('/add', function () {
    return view('add');
});
Route::get('/aqi', function () {
    return view('aqi');
});
Route::get('/aqi_show', function () {
    return view('aqi_show');
});
Route::get('/look', function () {
    return view('look');
});




//new single class
Route::get('/index','AirController@index');
Route::post('/index','AirController@store');
//view single class
Route::get('/index/{id}','AirController@view');


//new single class
Route::get('/aqi_show','AqiController@index');
Route::post('/aqi_show','AqiController@store');
//view single class
Route::get('/aqi_show/{id}','AqiController@view');