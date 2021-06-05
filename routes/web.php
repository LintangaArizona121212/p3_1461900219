<?php

/*

*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
route::resource('mahasiswa', 'MahasiswaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
