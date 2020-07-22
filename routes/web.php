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
    return view('layout.home');
});
Route::get('/invitation', function () {
    return view('user.invitation');
});
Route::get('/profile', function () {
    return view('user.profile');
});
Route::get('/home', function () {
    return view('layout.home');
});
Route::get('/comment', function () {
    return view('user.comment');
});

Route::get('/agenda', function () {
    return view('user.agenda');
});

Route::get('/report', function () {
    return view('user.report');
});

Route::get('/document', function () {
    return view('user.document');
});


