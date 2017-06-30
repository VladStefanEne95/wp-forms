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

Route::get('/adauga-proiect', function () {
    return view('adauga-proiect');
});

Route::get('/adauga-media', function () {
    $date = \DB::table('proiecte')->pluck('titlu');
    return view('adauga-media',['titles'=>$date]);
});

Route::get('/adauga-formular', function () {
    $date = \DB::table('proiecte')->pluck('titlu');
    return view('adauga-formular',['titles'=>$date]);
});

Route::post('/formular-adaugat', 'AddFilterController@addForm');

Route::post('/proiect-adaugat', 'AddFilterController@addProject');

Auth::routes();
Route::post('/upload', 'AddFilterController@upload');
Route::get('/home', 'HomeController@index')->name('home');
