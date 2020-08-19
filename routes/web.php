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

Route::get('/admin', function () {
    return view('layout.adminlayout');
});

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/meeting', function () {
    return view('user.meeting');
});

Route::get('/addmeeting', function() {
    return view('Admin.addmeeting');
});

Route::get('/Meetinginvitation', function() {
    return view('Admin.Meetinginvitation');
});

Route::get('/meet_topic', function() {
    return view('Admin.meet_topic');
});

Route::get('/report', function() {
    return view('Admin.report');
});

Route::get('/comment', function() {
    return view('Admin.comment');
});

Route::get('/report_pdf', function() {
    return view('Admin.report_pdf');
});

Route::get('/document', function() {
    return view('Admin.document');
});

Route::get('/Meeting', function() {
    return view('Admin.Meeting');   
});


Route::resource('userexternal','ExternalController');
Route::resource('userinternal','InternalController');

