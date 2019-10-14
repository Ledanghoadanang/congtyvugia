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
    return view('pages.index');
});

Route::get('/style', function () {
    return view('pages.style');
});

Route::get('/fashion', function () {
    return view('pages.fashion');
});

Route::get('/sport', function () {
    return view('pages.sport');
});

Route::get('/travel', function () {
    return view('pages.travel');
});

Route::get('/video', function () {
    return view('pages.video');
});

Route::get('/single', function () {
    return view('pages.single');
});

Route::get('/archive', function () {
    return view('pages.archive');
});