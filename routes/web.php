<?php

use Illuminate\Support\Facades\Route;

use App\Mail\NewUserNotification;
use Illuminate\Support\Facades\Mail;

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

Auth::routes();
Route::get('/login', 'LoginController@index')->name('login')->middleware('guest');
Route::post('/login', 'LoginController@authenticate');
Route::post('/logout', 'LoginController@logout');

Route::get('/', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/{id}/detail', 'HomeController@detail')->middleware('auth');
Route::get('/{id}/delete', 'HomeController@delete')->name('delete')->middleware('auth');

Route::get('/input', 'InputController@input')->name('input')->middleware('auth');
Route::get('/{id}/edit', 'InputController@edit')->name('edit')->middleware('auth');
Route::post('/update', 'InputController@update')->name('update')->middleware('auth');
Route::post('/store', 'InputController@store')->name('store')->middleware('auth');

Route::get('/approval', 'ApprovalController@index')->name('approval')->middleware('auth');
Route::get('/approval/{id}/detail', 'ApprovalController@detail')->middleware('auth');
Route::post('/approval_status', 'ApprovalController@approve')->name('approval_status')->middleware('auth');

Route::get('/report', 'ReportController@report')->name('report')->middleware('auth');
Route::post('/export', 'ReportController@export')->name('export')->middleware('auth');

Route::get('/employee', 'HomeController@indeximport')->middleware('auth');
Route::post('/employee', 'HomeController@import')->name('employee')->middleware('auth');
