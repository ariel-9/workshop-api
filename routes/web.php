<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
;
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

Route::post('/login', 'App\Http\Controllers\AuthController@login');
Route::post('/register', 'App\Http\Controllers\AuthController@register');
Route::get('/list-workshop', 'App\Http\Controllers\WorkshopsController@getListWorkshop');
Route::post('/logout', 'App\Http\Controllers\AuthController@logout');
Route::post('/sendmail', 'App\Http\Controllers\AuthController@sendmail');
Route::post('/reset-password', 'App\Http\Controllers\AuthController@resetPassword');
Route::get('students/show', 'App\Http\Controllers\ApiStudentsController@show')->name('students.show');