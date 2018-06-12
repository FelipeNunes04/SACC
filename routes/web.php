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
    return view('inicio');
});

Route::get('/cadastro/{tipo}', 'CadastroController@cadastro');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index');

Route::resource('alunos', 'AlunosController');

Route::resource('coordAccs', 'CoordAccController');

Route::resource('coordCursos', 'CoordCursoController');

Route::resource('cursos', 'CursoController');

Route::resource('modalidades', 'ModalidadesController');

Route::resource('registros', 'RegistrosController');