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

Route::get('/tickets_admn', function () {
    return view('Admin_tickets');
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

Route::get('/aux', function () {
    return view('perfil_aux');
});

Route::get('/edit_aux', function () {
    return view('Edit_aux');
});

Route::get('/msg_aux', function () {
    return view('aux_mensaje');
});

Route::get('/ticket_aux', function () {
    return view('aux_tickets');
});

Route::get('/aux_buscar', function () {
    return view('aux_buscar');
});

Route::get('/reportes', function () {
    return view('reportes');
});

Route::get('/reportes_adm', function () {
    return view('reportes_adm');
});

Route::get('/nuevo_usr', function () {
    return view('nuevo');
});

Route::get('/nuevo_dep', function () {
    return view('nuevo_dep');
});

Route::get('/edit_dep', function () {
    return view('edit_dep');
});