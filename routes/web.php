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
    return view('kalkulator');
});

// Route::get('/form-donasi', 'KalkulatorZakat@form');
// Route::post('/form-donasi', 'KalkulatorZakat@formDonasi')->name('form.donasi');

Route::post('/form-donasi', 'KalkulatorZakat@formDonasi')->name('form.donasi');
Route::post('/send-wa', 'KalkulatorZakat@sendWhatsapp');
