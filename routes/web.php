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

Route::get('/wedding-3','Wedding\Wedding3Controller@index')->name('index.wedding-3');

Route::get('/wedding-4', 'Wedding\Wedding4Controller@index')->name('index.wedding-4');

Route::get('/wedding-5', 'Wedding\Wedding5Controller@index')->name('index.wedding-5`');

Route::get('/wedding-6', 'Wedding\Wedding6Controller@index')->name('index.wedding-6');

Route::get('/wedding-7', 'Wedding\Wedding7Controller@index')->name('index.wedding-7');

Route::get('/wedding-8', 'Wedding\Wedding8Controller@index')->name('index.wedding-8');

Route::get('/wedding-9', 'Wedding\Wedding9Controller@index')->name('index.wedding-9');

Route::get('/wedding-10', 'Wedding\Wedding10Controller@index')->name('index.wedding-10');
/*
Route::get('/wedding/wish', function () 
{
    return view('wedding-1.wish');
})->name('wish.wedding-1');
*/