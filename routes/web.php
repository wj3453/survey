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
    return view('login');
});
Route::get('/area', function () {

    $geography = DB::table('geography')->get();

  return view('area', ['geography' => $geography]);
});


Route::get('/survey', function () {
    return view('survey');
});