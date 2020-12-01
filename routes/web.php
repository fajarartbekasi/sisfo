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

Route::get('/', 'WelcomeController@index')->name('welcome');

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
    route::get('/index', 'Kegiatan\KegiatanController@index')->name('kegiatan.index');
    route::get('/create', 'Kegiatan\KegiatanController@create')->name('kegiatan.create');
    route::get('/edit/{kegiatan}', 'Kegiatan\KegiatanController@edit')->name('kegiatan.edit');
    route::post('/store', 'Kegiatan\KegiatanController@store')->name('kegiatan.store');
    route::patch('/update/{kegiatan}', 'Kegiatan\KegiatanController@update')->name('kegiatan.update');
    Route::delete('/destroy/{kegiatan}', 'Kegiatan\KegiatanController@destroy')->name('kegiatan.destroy');
});

Route::get('about', 'AboutController@index')->name('about');

Route::get('cek-kegiatan', 'User\KegiatanController@index')->name('cek-kegiatan');

Route::group(['prefix' => 'laporan-santri'], function(){
    route::get('diterima', 'Santri\DiterimaController@periode')->name('laporan-santri.diterima');
    route::get('ditolak', 'Laporan\DitolakController@periode')->name('laporan-santri.ditolak');

});

Route::group(['prefix' => 'rekap'], function(){
    route::get('laporan-santri/diterima', 'Santri\DiterimaController@rekap')->name('rekap.laporan-santri.diterima');
    route::get('laporan-santri/ditolak', 'Laporan\DitolakController@rekap')->name('rekap.laporan-santri.ditolak');
    route::get('laporan-pendaftaran', 'Laporan\PendaftaranController@rekap')->name('rekap.laporan-pendaftaran');
});