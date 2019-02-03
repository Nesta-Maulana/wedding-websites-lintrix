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
    return view('landing-page.index');
})->name('landing-page');

Route::get('/wedding','Wedding\WeddingController@index')->name('index.wedding-1');
Route::post('/wedding/send-wish','Wedding\WeddingController@store')->name('send-wish.wedding-1');

/*
Route::get('/wedding/wish', function () 
{
    return view('wedding-1.wish');
})->name('wish.wedding-1');
*/