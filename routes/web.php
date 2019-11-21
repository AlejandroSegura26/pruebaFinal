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
//Rutas para un usuario no autenticado
Route::group(['middleware' => ['guest']], function () {
    //Ruta para mostrar el formulario para iniciar sesion
    Route::get('/','Auth\LoginController@showLoginForm');
    //Ruta para iniciar sesion
    Route::post('/login','Auth\LoginController@login')->name('login');
});
//Rutas para un usuario autenticado
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['Administrador']], function () {
        
    });
    Route::group(['middleware' => ['DirectorProyecto']], function () {
        
    });
    Route::group(['middleware' => ['Programdor']], function () {
        
    });
    Route::group(['middleware' => ['Cliente']], function () {
        
    });
    //Contenido principal
    Route::get('/principal', function () {
        return view('contenido/contenido');
    })->name('principal');
    //Ruta para cerrar sesion
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
});

