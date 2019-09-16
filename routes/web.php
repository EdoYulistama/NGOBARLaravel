<?php

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/mahasiswa', 'MahasiswaController@index');

//student
Route::get('/students', 'StudentsController@index');
Route::get('/students/{student}', 'StudentsController@show');