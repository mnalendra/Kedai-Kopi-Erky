<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SupplierController;
use App\Models\Supplier;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LihatmenuController;

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
    return view('home');
});

Route::get('/datamenu', [MenuController::class, 'index'])->name('datamenu');

// Untuk Tambah Data Menu
Route::get('/tambahmenu', [MenuController::class, 'tambahmenu'])->name('tambahmenu');
Route::post('/insertdata', [MenuController::class, 'insertdata'])->name('insertdata');

// Untuk Edit Data Menu
Route::get('/editmenu/{id}', [MenuController::class, 'editmenu'])->name('editmenu');
Route::post('/updatedata/{id}', [MenuController::class, 'updatedata'])->name('updatedata');

// Delete
Route::get('/deletemenu/{id}', [MenuController::class, 'deletemenu'])->name('deletemenu');
// Route::post('/updatedata/{id}', [MenuController::class, 'updatedata'])->name('updatedata');

Route::get('/lihat-menu', [LihatmenuController::class, 'showMenu']);
Route::get('/datamenuCust', [LihatmenuController::class, 'datamenuCust']);


// Login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginuser', [LoginController::class, 'loginuser'])->name('loginuser');

// Register
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');


// SUPPLIER
// Data Supplier
Route::get('/datasup', [SupplierController::class, 'index'])->name('datasup');

// Untuk Tambah Data Sup
Route::get('/tambahsup', [SupplierController::class, 'tambahsup'])->name('tambahsup');
Route::post('/insertdata', [SupplierController::class, 'insertdata'])->name('insertdata');
// Delete
Route::get('/deletesup/{id}', [SupplierController::class, 'deletesup'])->name('deletesup');
