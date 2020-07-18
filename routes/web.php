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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/blank', 'layouts.app.blank_page');

Route::get('/mahasiswa_builder', 'MahasiswaBuilderController@index');
Route::get('/mahasiswa_eloquent', 'MahasiswaEloquentController@index');

Route::get('/students_builder', 'StudentsBuilderController@index');


# students
Route::get('/students', 'StudentsController@index');
Route::get('/students/create', 'StudentsController@create');
Route::get('/students/{student}', 'StudentsController@show');
Route::post('/students', 'StudentsController@store');