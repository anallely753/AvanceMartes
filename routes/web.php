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

Route::get('/', function () {
    return view('welcome');
})->middleware('welcome');

Route::get('saludos/{nombre?}', function($nombre="ana"){
	return "Hola".$nombre;
});

Route::get('admin', function(){
	return "Sí eres admin";
})->middleware('admin');

Route::middleware(['admin'])->group(function(){
	Route::get('admin2', function(){
		return view('layouts.admin');
	});
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
