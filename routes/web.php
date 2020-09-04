<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;


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


Route::get('/agenda', function () {
    return view('user.agenda');
});

Route::get('/report', function () {
    return view('user.report');
});



Route::get('/addmeeting', function() {
    return view('Admin.addmeeting');
});

Route::get('/Meetinginvitation', function() {
    return view('Admin.Meetinginvitation');
});



Route::resource('offices','OfficeController');

