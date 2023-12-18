<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EquationController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[AdminController::class,'index'] );
Route::controller(EquationController::class)->group(function(){
    Route::get('/ecuaciones/index','index')->name('equation.index');
    Route::post('/ecuaciones/store','store')->name('equation.store');
    Route::get('/ecuaciones/show/{id}','show')->name('equation.show');
});
