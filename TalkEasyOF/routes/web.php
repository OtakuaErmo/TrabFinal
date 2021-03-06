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
    return view('home');
});
Route::get('/cadastro', function () {
    return view('cadastro');
});
Route::get('/teste', function () {
    return view('teste');
});
Route::get('/teste2', function () {
    return view('teste2');
});
Route::get('/entrar', function () {
    return view('login');
});
Route::get('/classe/numeros', function () {
    return view('numeros');
});
Route::get('/classe/cores', function () {
    return view('cores');
});
