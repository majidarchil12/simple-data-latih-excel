<?php

use App\Http\Controllers\ExcelController;
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
    return redirect()->route('excel');
    // return view('welcome');
});

Route::get('/excel', [ExcelController::class, 'index'])->name('excel');

Route::post('/excel-to-db', [ExcelController::class, 'excelDb'])->name('excel-db');

Route::post('/excel-to-table', [ExcelController::class, 'excelView'])->name('excel-table');
