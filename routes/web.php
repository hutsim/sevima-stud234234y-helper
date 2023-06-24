<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\AIController;

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

Route::get('/', function() {
    return redirect('/dashboard');
});

Route::middleware(['web', 'guest'])->group(function () {
    //login
    Route::get('sign-in', [LoginController::class, 'index'])->name('sign-in');
    Route::post('sign-in', [LoginController::class, 'authenticate']);

    //register
    Route::get('sign-up', [RegisterController::class, 'index']);
    Route::post('sign-up', [RegisterController::class, 'register'])->name('register');
});

Route::middleware(['web','auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('welcome');
    });

    //mapel
    Route::resource('mapel', MapelController::class);
    Route::get('/mapel/{id}/hapus', [MapelController::class, 'hapus'])->name('mapel.hapus');

    //tugas
    Route::resource('tugas', TugasController::class);
    Route::get('/tugas/{id}/hapus', [TugasController::class, 'hapus'])->name('tugas.hapus');

    //ai
    Route::match(['get', 'post'], 'ai', [AIController::class, 'index'])->name('ai.index');

    //logout
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});