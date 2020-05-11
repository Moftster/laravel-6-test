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
    return view('homepage');
});


Route::view('contact', 'contact');
Route::post('contactsubmission', 'ContactController@submitContactForm');

Route::view('ourpeople', 'ourpeople');

Route::view('gdpr', 'gdpr');

Route::view('events', 'events');

Route::view('about', 'about');

Route::view('fees', 'fees');

Auth::routes(['register' => false]);
