<?php

use App\Http\Controllers\MenuController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/datamenu', [MenuController::class, 'index'])->name('datamenu');

Route::get('/tambahmenu', [MenuController::class, 'tambahmenu'])->name('tambahmenu');
Route::post('/insertdata', [MenuController::class, 'insertdata'])->name('insertdata');
