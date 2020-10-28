<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'new_controller@inicio');
Route::get('/{id}', 'new_controller@detalle')->name('notas_detalle');
Route::get('/fotos', 'new_controller@control_fotos')->name('_fotos');
Route::get('/blog', 'new_controller@control_blog')->name('_blog');
Route::get('/nosotros/{nombre?}', 'new_controller@control_nosotros')->name('_nosotros');
Route::get('bienvenido', function(){
    return "Bienvenido Aaron!";
});