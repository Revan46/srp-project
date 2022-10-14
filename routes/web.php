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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/contact', function () {
//     return view('contact', ['name' => 'cara revan','phone' => '082.....']);

// });

// // Route::view('/contact', 'contact', ['name' => 'cara revan','phone' => '082.....']);

// Route::get('users/{id}', function ($id) {
//     return 'ini adalah paramater '.$id;
// });

// Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/dashboard', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
    Route::get('table-list', function () {
        return view('pages.table_list');
    })->name('table');

    Route::get('typography', function () {
        return view('pages.typography');
    })->name('typography');

    Route::get('icons', function () {
        return view('pages.icons');
    })->name('icons');

    Route::get('map', function () {
        return view('pages.map');
    })->name('map');

    Route::get('notifications', function () {
        return view('pages.notifications');
    })->name('notifications');

    Route::get('rtl-support', function () {
        return view('pages.language');
    })->name('language');

});

Route::group(['middleware' => 'auth'], function () {
    Route::get('posterday/documents', ['as' => 'documents_pd', 'uses' => 'App\Http\Controllers\PosterDayController@documents']);
    Route::get('posterday/persyaratan', ['as' => 'persyaratan_pd', 'uses' => 'App\Http\Controllers\PosterDayController@persyaratan']);

    Route::get('skripsi/documents', ['as' => 'documents_sta', 'uses' => 'App\Http\Controllers\SkripsiController@documents']);
    Route::get('skripsi/persyaratan', ['as' => 'persyaratan_sta', 'uses' => 'App\Http\Controllers\SkripsiController@persyaratan']);

    Route::get('kebutuhan_pd/validasi', ['as' => 'validasi_pd', 'uses' => 'App\Http\Controllers\KebutuhanPDController@validasi']);
    Route::get('kebutuhan_pd/syarat', ['as' => 'syarat_pd', 'uses' => 'App\Http\Controllers\KebutuhanPDController@syarat']);

    Route::get('kebutuhan_sta/validasi', ['as' => 'validasi_sta', 'uses' => 'App\Http\Controllers\KebutuhanSTAController@validasi']);
    Route::get('kebutuhan_sta/syarat', ['as' => 'syarat_sta', 'uses' => 'App\Http\Controllers\KebutuhanSTAController@syarat']);

    Route::get('users', ['as' => 'users', 'uses' => 'App\Http\Controllers\UserController@index']);
    // Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});
