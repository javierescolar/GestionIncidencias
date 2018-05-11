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


Route::group(['middleware' => 'guest'], function () {

    Route::get('/login','AuthController@getFormLogin');
    Route::post('/login','AuthController@postLogin');
    
});



Route::group(['middleware' => 'checksession'], function () {
    Route::get('/logout','AuthController@logout');

    Route::get('/home', function () {
        $user=session()->get("user");
        return view('Home/index',['user'=>$user]);
    });

    Route::get('/', function () {
        $user=session()->get("user");
        return view('Home/index',['user'=>$user]);
    });

    Route::get('/perfil','UserController@getPerfil');

    Route::get('/incidencias/nueva','IncidenciaController@getNueva');

});




