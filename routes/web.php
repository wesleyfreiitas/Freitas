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
//aluno
Route::get('/novoaluno', 'AlunoControlador@create');
Route::get('/', 'AlunoControlador@index');
Route::post('/aluno', 'AlunoControlador@store');
Route::delete('/aluno/{id}', 'AlunoControlador@destroy');

//escola
Route::get('/novaescola', 'EscolaControlador@create');
Route::get('/listaescola', 'EscolaControlador@index');
Route::post('/escola', 'EscolaControlador@store');
Route::put('/escola-edit/{id}/edit', 'EscolaControlador@edit');
Route::delete('/escola/{id}', 'EscolaControlador@destroy');

//turma
Route::get('/novaturma', 'TurmaControlador@create');
Route::get('/listaturma', 'TurmaControlador@index');
Route::post('/turma', 'TurmaControlador@store');
Route::delete('/turma/{id}', 'TurmaControlador@destroy');