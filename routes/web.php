<?php

use App\Http\Auth\Authentication\Controller\AuthenticationController;
use App\Http\Auth\Login\Controller\LoginController;
use App\Http\Auth\Logout\Controller\LogoutController;
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
    return view('pages.Home.Home');
});
Route::get('/Docker', function () {
    return view('pages.Home.Sub_pages.Docker');
});
Route::get('/Laravel', function () {
    return view('pages.Home.Sub_pages.Laravel');
});
Route::get('/Arquitetura', function () {
    return view('pages.Home.Sub_pages.Arquitetura');
});
Route::get('/Metodos', function () {
    return view('pages.Home.Sub_pages.Metodos');
});


Route::post('/Login', [LoginController::class, 'authorization'])->name('login');
Route::post('/Logout', [LogoutController::class, 'logout'])->name('logout');

Route::post('/authenticate', [AuthenticationController::class, 'authentication'])->name('authenticate');
