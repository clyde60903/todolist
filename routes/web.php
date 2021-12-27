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

Route::get('/',[\App\Http\Controllers\TodoController::class,'index'])->name('index');

//create
Route::get('/create',[\App\Http\Controllers\TodoController::class,'create']);
Route::get('/store',[\App\Http\Controllers\TodoController::class,'store'])->name('store');


//delete
Route::get('/delete',[\App\Http\Controllers\TodoController::class,'delete'])->name('delete_data');


//edit
Route::get('/edit',[\App\Http\Controllers\TodoController::class,'edit'])->name('edit_data');
//Route::get('/edit',[\App\Http\Controllers\TodoController::class,'store_edit'])->name('store_edit_data');
