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
    return view('index');
});

Route::post('/',[App\Http\Controllers\UserController::class, 'login'])->name('user.login');

Route::resource('categoria','App\Http\Controllers\CategoriaController');
//Route::post('categoria',[App\Http\Controllers\CategoriaController::class, 'create'])->name('categoria.create');

Route::get('cancelar',function(){
return redirect()->route('categoria.index')->with('datos','Accion Cancelada ...!');

})->name('cancelar');

Route::get('categoria/{id}/confirmar','App\Http\Controllers\CategoriaController@confirmar')->name('categoria.confirmar');


Route::resource('clientes','App\Http\Controllers\ClientesController');
