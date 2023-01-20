<?php

use App\Http\Controllers\SsController;
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
});
Route::get('/ss',[SsController::class,'ss']);
Route::get('/kn',[SsController::class,'kn']);
Route::get('/mm',[SsController::class,'mm']);
Route::post('store',[SsController::class,'store'])->name('store');
Route::post('delete/{id}',[SsController::class,'delete'])->name('delete');
Route::get('update/{id}',[SsController::class,'update']);
Route::post('update/{id}',[SsController::class,'update2'])->name('update');;