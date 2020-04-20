<?php

use Illuminate\Support\Facades\Route;
use App\Mail\Consulta;
use Illuminate\Support\Facades\Mail;
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
Route::get('/inicio', function () {
    return view('inicio');
});
Route::get('/empresa', function () {
    return view('empresa');
});
Route::get('/servicios',function(){
    return view('servicios');
});
Route::get('/proyectos',function(){
    return view('proyectos');
});
Route::get('/contacto',function(){
    return view('contacto');
});
Route::post('/email','MicontroladorMail@store');

