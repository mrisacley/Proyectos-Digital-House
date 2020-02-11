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
    return view('welcome');
});

Route::get('/contacto',function(){
    return view('contacto');
});

Route::get('/login',function(){
    return view('login');
});

Route::get('/registrar',function(){
    return view('registro');
});

Route::get('/ranking',function(){
    return view('ranking');
});

Route::get('/perfil',function(){
    return view('perfil');
});

Route::get('/abm','CategoriaController@index');

Route::get('/tablaPreguntas',function(){
    return view('verPreguntas');
});

Route::get('/agregarPregunta',function(){
    return view('agregar');
});

Route::get('/modificarPreguntas',function(){
    return view('modificar');
});

Route::get('/aJugar',function(){
    return view('quest');
});

Route::get('/FAQ',function(){
    return view('FAQ');
});

Route::get('/sugerir','CategoriaController@listarSugerir');

