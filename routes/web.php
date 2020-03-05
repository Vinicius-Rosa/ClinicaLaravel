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

Route::get('/', 'HomeController@index')->name('login');

Route::post('/login', 'HomeController@login');

Route::resource('/cadastro', 'UserController');

//Rotas Autenticadas
Route::group(['middleware' => ['auth']], function () {
    
    Route::resource('/dashboard', 'PacientesController');
    
    Route::resource('/perfil', 'UserController');
    
    Route::get('/perfil/{id}/destroy', 'UserController@destroy');
    
    Route::get('/logout', function(){
        Auth::logout();
        
        return redirect()->route('login');
    });

});