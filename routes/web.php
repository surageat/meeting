<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Support\Facades\Auth;
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


Route::get('/invitation', function () {  return view('user.invitation');});

// Route::get('/home', function () { return view('layout.homelayout');});
Route::get('/comment', function () {  return view('user.comment');});
Route::get('/agenda', function () { return view('user.agenda');});
Route::get('/report', function () { return view('user.report');});
Route::get('/document', function () {return view('user.document');});
Route::get('/admin', function () { return view('layout.adminlayout');});

Route::get('/meeting', function () { return view('user.meeting');});

Route::get('/Meetinginvitation', function() { return view('Admin.Meetinginvitation');});
Route::get('/meet_topic', function() { return view('Admin.meet_topic');});
Route::get('/report', function() { return view('Admin.report');});
Route::get('/comment', function() {  return view('Admin.comment');});
Route::get('/report_pdf', function() { return view('Admin.report_pdf');});
Route::get('/document', function() { return view('Admin.document');});
Route::get('/Meeting', function() { return view('Admin.Meeting');  });


// controller meeting addmin
Route::resource('addmeeting','MeetingController');

//controler room admin
Route::resource('room','RoomController'); 

Route::resource('offices','OfficeController');


//updateprofile user
Route::resource('profile','ProfileController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/', function() { return view('layouts.app');  });
Route::get('/', function () { return view('login.login'); });



