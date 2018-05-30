<?php

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

Route::group(['prefix' => 'admin' , 'middleware' =>'auth'], function() {
    Route::get('/', function(){
        return 'Ini halaman data admin';
    
    });

    Route::get('create', function(){
        return 'Ini halaman untuk menambahkan data admin';
    });

    Route::get('update', function(){
        return 'Ini halaman untuk memperbaharui data admin';
    });
});


Route::group(['prefix' => 'manager' , 'middleware' =>'auth'], function() {
    Route::get('/', function(){
        return 'Ini halaman data manager';
    
    });

    Route::get('create', function(){
        return 'Ini halaman untuk menambahkan data manager';
    });

    Route::get('update', function(){
        return 'Ini halaman untuk memperbaharui data manager';
    });
});


Route::group(['prefix' => 'karyawan' , 'middleware' =>'auth'], function() {
    Route::get('/', function(){
        return 'Ini halaman data karyawan';
    
    });

    Route::get('create', function(){
        return 'Ini halaman untuk menambahkan data karyawan';
    });

    Route::get('update', function(){
    return 'Ini halaman untuk memperbaharui data karyawan';
    });
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
