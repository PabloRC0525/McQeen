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
    return view('login');
});


Route::get('/user', function () {
    return view('perfil_cliente');
});

Route::get('/cliente_solicitar', function () {
    return view('cliente_solicitar');
});

Route::get('/cliente_tickets', function () {
    return view('cliente_tickets');
});

Route::get('/cliente_mensaje', function () {
    return view('cliente_mensaje');
});

Route::get('/editar', function () {
    return view('editar');
});