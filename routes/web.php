<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokoController;

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

Route::get('/',[TokoController::class,'index']);
Route::post('/tambah',[TokoController::class,'tambah']);
Route::get('/hapus/{id}',[TokoController::class,'hapus']);
Route::get('/edit/{id}',[TokoController::class,'edit']);
Route::post('/edit/{id}',[TokoController::class,'editan']);


