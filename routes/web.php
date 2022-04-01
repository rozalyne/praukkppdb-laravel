<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisController;

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

Route::get('regis', [RegisController::class, 'index']);
Route::post('regis', [RegisController::class, 'store']);
Route::get('regis/{id}/edit', [RegisController::class, 'edit']);
Route::put('regis/{id}', [RegisController::class, 'update']);
Route::delete('regis/{id}', [RegisController::class, 'destroy']);

Route::get('regis/{id}', [RegisController::class, 'cetak']);

// Route::get('/cetak', [RegisController::class, 'cetak_pdf']);