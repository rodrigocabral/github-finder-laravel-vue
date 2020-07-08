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
    return view('escopo1', ['title' => 'Escopo 1 - GitHub Finder']);
});

Route::get('/escopo2', function () {
    return view('escopo2', ['title' => 'Escopo 2 - Acert API Consumer']);
});
