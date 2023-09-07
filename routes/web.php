<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MecanicoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::view('/', 'welcome')->name('inicio');
Route::resource('/clientes',ClienteController::class); //Crea 7 rutas para el CRUD de clientes
Route::resource('/mecanicos',MecanicoController::class); //Crea 7 rutas para el CRUD de mecanicos
