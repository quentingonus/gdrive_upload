<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/upload', function () {
    $file = request()->file('upload_file');
    dd(request()->file('upload_file')->storeAs("", $file->getClientOriginalName(), "google"));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
