<?php

namespace App\Http\Controllers;

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
})->name('welcome');

Route::post('/add', [PengunjungController::class, 'add'])->name('add');
Route::get('/cetak', [PengunjungController::class, 'cetakPDF'])->name('cetak');
Route::get('/refresh', [PengunjungController::class, 'refresh'])->name('refresh');
