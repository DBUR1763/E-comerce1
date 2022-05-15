<?php

use App\Models\Productt;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\ProducttController;

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

Route::get('/Productt/edit/{id}', [ProducttController::class, 'edit']);
Route::post('/Productt/update',[ProducttController::class,'update'])->name('Productt/update');
Route::get('/Productt/delete/{id}', [ProducttController::class, 'delete']);
Route::get('/Productt/search/{id}', [ProducttController::class, 'search'])->name('Productt/search');
Route::get('/Productt/register',[ProducttController::class,'register'])->name('Productt/register');
Route::post('/Productt/register',[ProducttController::class,'store']);
Route::get('/productt/list', [ProducttController::class, 'get_all'])->name('productt/list');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
