<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\EquationController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TorreController;
use App\Models\Address;
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
//para crud equation
Route::controller(EquationController::class)->group(function(){
    Route::get('/ecuaciones/index','index')->name('equation.index');
    Route::post('/ecuaciones/store','store')->name('equation.store');
    Route::get('/ecuaciones/show/{id}','show')->name('equation.show');
    
    //Route::post('/equation/excelreport','excelreport')->name('equation.excel');

});
//para crud address
Route::controller(AddressController::class)->group(function(){
    Route::post('/address/store','store')->name('address.store');
    Route::put('/address/{address}/update','update')->name('address.update');
});
//para crud torre
Route::controller(TorreController::class)->group(function(){
    Route::post('/torre/store','store')->name('torre.store');
    Route::put('/torre/{torre}/update','update')->name('torre.update');
});
//para crud contacto
Route::controller(ContactoController::class)->group(function(){
    Route::post('/contacto/store','store')->name('contacto.store');
});
//para crud de imagenes
Route::controller(ImageController::class)->group(function(){
    Route::post('/image/{equation}/file','store')->name('image.file');
    Route::get('/image/{image}/destroy','destroy')->name('image.destroy');
});
//Exportar reportes
Route::controller(ReportController::class)->group(function(){
    Route::get('/report','index')->name('report.index');
    Route::get('/report/show/{equation}','show')->name('report.show');
    Route::post('/report/export/{equation}','export')->name('report.export');
    Route::get('/report/test','test');
    //importar equaciones
    Route::post('/import','importstore')->name('import.equations');
});


