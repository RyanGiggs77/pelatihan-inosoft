<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\NilaiController;


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
});

Route::get('/variable/pertama', 'App\Http\Controllers\VariableController@pertama');
Route::get('/variable/data', 'App\Http\Controllers\DataTypesController@pertama');
Route::get('/kelas/{slug}', [KelasController::class, 'show']);
Route::get('/post/{slug}', [PostController::class, 'show']);