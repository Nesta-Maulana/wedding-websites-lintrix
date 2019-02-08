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

Route::get('/wedding-1','Wedding\WeddingController@index')->name('index.wedding-1');
Route::post('/wedding-1/send-wish','Wedding\WeddingController@store')->name('send-wish.wedding-1');

Route::get('/wedding-2','Wedding\Wedding2Controller@index')->name('index.wedding-2');
Route::post('/wedding-2/send-wish','Wedding\WeddingController@store')->name('send-wish.wedding-2');
/*
Route::get('/wedding/wish', function () 
{
    return view('wedding-1.wish');
})->name('wish.wedding-1');
*/