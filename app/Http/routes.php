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

Route::get('/','FrontController@index');
Route::get('/','FrontController@contacto');
Route::get('/','FrontController@review');







/*DOCUMENTACION DE RUTAS
 * Ruta basica

Route::get('prueba1',function(){
    return "Hola desde routes.php prueba1 con función";
});
*/

/*
 * Ruta basica con parametros

Route::get('prueba2/{nombre}', function($nombre){
    return "Mi nombre es: ".$nombre;
});

Route::get('prueba3/{edad}', function($edad){
    return "Mi edad es: ".$edad;
});
 */

/*
 * ruta basica con parametros opcionales

Route::get('prueba4/{edad?}', function($edad = 21){
    return "Mi edad es: ".$edad;
});
 */

/*
 * Ruta basica hacia controlador
Route::get('controlador','PruebaController@index');
 */

/*
 * Ruta basica con parametro hacia controlador
Route::get('controlador2/{nombre}','PruebaController@nombre');
 */

/*
 * RESTful resource controllers
Route::resource('movie','MovieController');

Route::get('/', function () {
    return view('welcome');
});
 */
