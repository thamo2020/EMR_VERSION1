<?php

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
    return view('welcome');
});

Route::get('/psignup', function () {
    return view('patientSignup');
});
Route::get('/dsignup','doctorController@show');
Route::post('/dsignup','doctorController@signupSubmit')->name('signup.submit');


Route::get('/psignup','patientController@show');
Route::post('/psignup','patientController@signupSubmit')->name('signup.submit');


