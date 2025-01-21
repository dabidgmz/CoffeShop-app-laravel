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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('/arabica', function () {
    return view('arabica'); 
})->name('arabica');

Route::get('/robusta', function () {
    return view('robusta'); 
})->name('robusta');

Route::get('/liberica', function () {
    return view('liberica'); 
})->name('liberica');

Route::get('/excelsa', function () {
    return view('excelsa'); 
})->name('excelsa');

Route::get('/home', function () {
    return view('index');
});