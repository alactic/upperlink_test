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

Route::get('/', function () {
    return view('welcome');
});
Route::get('new_applicant',  ['uses' => 'MyController@new_applicant', 'middleware' => 'web'])->name('new_applicant');
Route::post('new_form',  ['uses' => 'MyController@send_form', 'middleware' => 'web'])->name('send_form');

Route::get('login',  ['uses' => 'AdminController@login', 'middleware' => 'web'])->name('login');

Route::post('checklogin',  ['uses' => 'AdminController@checklogin', 'middleware' => 'web'])->name('check_login');


