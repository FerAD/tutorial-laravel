<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('prueba1',function(){
    return "Hola desde routes.php prueba1 con función";
});

Route::get('prueba2/{nombre}', function($nombre){
    return "Mi nombre es: ".$nombre;
});

Route::get('prueba3/{edad}', function($edad){
    return "Mi edad es: ".$edad;
});
/*Prueba 4 que puede o no recibir parametro gracas al comando ? */
Route::get('prueba4/{edad?}', function($edad = 21){
    return "Mi edad es: ".$edad;
});

Route::get('/', function () {
    return view('welcome');
});
