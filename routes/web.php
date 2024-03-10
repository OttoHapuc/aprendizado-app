<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home.partials.home');
});
Route::get('/Docker', function () {
    return view('pages.home.partials.docker');
});
Route::get('/Laravel', function () {
    return view('pages.home.partials.laravel');
});
Route::get('/Arquitetura', function () {
    return view('pages.home.partials.arquitetura');
});
Route::get('/Metodos', function () {
    return view('pages.home.partials.metodos');
});
