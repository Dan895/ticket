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
Route::Resource('test','testController');

Route::Resource('ticket','ticketController'); /*Esta linea manda a llamar a los metodos creados automaticamente en la clase ticketController, en ella 
*     se guardan llaman las vistas, páginas html(.php) donde desplegamos los datos que necesitamos usar.
*
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('/index', function(){
    return view('index');
});
