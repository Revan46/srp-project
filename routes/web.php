<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::get('posterday/documents', ['as' => 'documents_pd', 'uses' => 'App\Http\Controllers\PosterDayController@documents']);
    Route::get('posterday/persyaratan', ['as' => 'persyaratan_pd', 'uses' => 'App\Http\Controllers\PosterDayController@persyaratan']);

    Route::get('skripsi/documents', ['as' => 'documents_sta', 'uses' => 'App\Http\Controllers\SkripsiController@documents']);
    Route::get('skripsi/persyaratan', ['as' => 'persyaratan_sta', 'uses' => 'App\Http\Controllers\SkripsiController@persyaratan']);

    Route::get('kebutuhan_pd/validasi', ['as' => 'validasi_pd', 'uses' => 'App\Http\Controllers\KebutuhanPDController@validasi']);
    Route::get('kebutuhan_pd/syarat', ['as' => 'syarat_pd', 'uses' => 'App\Http\Controllers\KebutuhanPDController@syarat']);

    Route::get('kebutuhan_sta/validasi', ['as' => 'validasi_sta', 'uses' => 'App\Http\Controllers\KebutuhanSTAController@validasi']);
    Route::get('kebutuhan_sta/syarat', ['as' => 'syarat_sta', 'uses' => 'App\Http\Controllers\KebutuhanSTAController@syarat']);

    Route::get('/users/{id}/delete', [UserController::class, 'destroy']);

    Route::get('users', ['as' => 'users', 'uses' => 'App\Http\Controllers\UserController@index']);
    // Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});
