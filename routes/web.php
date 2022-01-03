<?php

use App\Http\Controllers\SociosController;
use App\Http\Controllers\PrestamosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagosPrestamosController;

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

Route::get('/', [SociosController::class, 'index']);
Route::get('/socios/new', [SociosController::class, 'create']);
Route::post('/socios/new', [SociosController::class, 'store']);


Route::get('/prestamos/new', [PrestamosController::class, 'create']);
Route::post('/prestamos/new', [PrestamosController::class, 'store']);
Route::get('/prestamos/list', [PrestamosController::class, 'index']);
Route::get('/prestamos/{id}', [PrestamosController::class, 'show']);


Route::get('/prestamos/abono/{id}', [PagosPrestamosController::class, 'show']);
Route::post('/prestamos/abono/', [PagosPrestamosController::class, 'store']);
