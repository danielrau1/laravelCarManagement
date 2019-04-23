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

// DR: the original '/' just redirected us to the index page
/*
Route::get('/', function () {
    return view('index');
});
*/

Route::get('/',[
    'uses'=>'CarController@show',
    'as'=>'cars.show'
]);


// (1) DR: if want to post need to write post, and in the form in resources/views/index.blade.php
//need to add the csrf
Route::post('/create',[
    'uses'=>'CarController@create',
    'as'=>'cars.create'
    ]);
