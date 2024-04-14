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

Route::match(['get', 'post'], '/', function () {
    return view('login');
});


Route::get('/user', function () {
    return view('perfil_cliente');
});

Route::get('/admin', function () {
    return view('perfil_admin');
});
Route::get('/ed_admin', function () {
    return view('Edit_Adm');
});

Route::get('/Admin_Usuarios', function () {
    return view('Admin_usuarios');
});

Route::get('/Editar_admn', function () {
    return view('Admin_editUsuarios');
});
Route::get('/Admin_asignacion', function () {
    return view('Admin_asignacion');
});

Route::get('/Admin_dep', function () {
    return view('Admin_dep');
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