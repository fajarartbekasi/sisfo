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

Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'pendaftaran'], function(){
    Route::get('/', 'PendaftaranController@index')->name('pendaftaran');
    Route::get('/create', 'PendaftaranController@create')->name('pendaftaran.create');

    Route::post('/store','PendaftaranController@store')->name('pendaftaran.store');
    Route::get('/show/{pendaftaran}', 'PendaftaranController@show')->name('pendaftaran.show');
    Route::patch('/update/{pendaftaran}', 'PendaftaranController@update')->name('pendaftaran.update');
});

Route::group(['prefix' => 'Data'], function(){
    Route::get('/santri/diterima', 'Santri\DiterimaController@index')->name('Data.santri.diterima');

    Route::get('/santri/ditolak', 'Santri\DitolakController@index')->name('Data.santri.ditolak');
});

Route::group(['prefix' => 'kegiatan'], function (){

    route::get('/create', 'Kegiatan\KegiatanController@create')->name('kegiatan.create');

    route::post('/store', 'Kegiatan\KegiatanController@store')->name('kegiatan.store');
});

Route::get('about', 'AboutController@index')->name('about');

Route::get('user/cek-kegiatan', 'User\KegiatanController@index')->name('user.cek-kegiatan');