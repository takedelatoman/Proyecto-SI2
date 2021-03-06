<?php

use Illuminate\Support\Facades\Auth;
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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/* Route::resource('roles', roleController::class)->names('roles'); */
/* Route::resource('users', UserController::class)->names('users'); */
/* Route::resource('Bitacora', BitacoraController::class)->names('Bitacora'); */

//Choferes
/* Route::get('choferes/index', [App\Http\Controllers\ChoferController::class, 'index'])->name('choferes.index');
Route::get('choferes/create', [App\Http\Controllers\ChoferController::class, 'create'])->name('choferes.create');
Route::post('choferes/store', [App\Http\Controllers\ChoferController::class, 'store'])->name('choferes.store');
Route::get('choferes/edit/{id}', [App\Http\Controllers\ChoferController::class, 'edit'])->name('choferes.edit');
Route::put('choferes/update/{id}', [App\Http\Controllers\ChoferController::class, 'update'])->name('choferes.update');
Route::delete('choferes/{id}', [App\Http\Controllers\ChoferController::class, 'destroy'])->name('choferes.destroy'); */
/* Route::get('choferes/show/{id}', [App\Http\Controllers\ChoferController::class, 'show'])->name('choferes.show'); */
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//USUARIO
Route::get('users/index', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::get('users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
Route::post('users/store', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
Route::get('users/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
Route::put('users/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
Route::get('users/show/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
Route::delete('users/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');

//LINEA
Route::get('lineas/index', [App\Http\Controllers\LineaController::class, 'index'])->name('lineas.index');
Route::get('lineas/create', [App\Http\Controllers\LineaController::class, 'create'])->name('lineas.create');
Route::post('lineas/store', [App\Http\Controllers\LineaController::class, 'store'])->name('lineas.store');
Route::get('lineas/edit/{id}', [App\Http\Controllers\LineaController::class, 'edit'])->name('lineas.edit');
Route::put('lineas/update/{id}', [App\Http\Controllers\LineaController::class, 'update'])->name('lineas.update');
Route::delete('lineas/{id}', [App\Http\Controllers\LineaController::class, 'destroy'])->name('lineas.destroy');

//MICROS
Route::get('micros/index', [App\Http\Controllers\MicroController::class, 'index'])->name('micros.index');
Route::get('micros/create', [App\Http\Controllers\MicroController::class, 'create'])->name('micros.create');
Route::post('micros/store', [App\Http\Controllers\MicroController::class, 'store'])->name('micros.store');
Route::get('micros/edit/{id}', [App\Http\Controllers\MicroController::class, 'edit'])->name('micros.edit');
Route::put('micros/update/{id}', [App\Http\Controllers\MicroController::class, 'update'])->name('micros.update');
Route::delete('micros/{id}', [App\Http\Controllers\MicroController::class, 'destroy'])->name('micros.destroy');
Route::get('micros/show/{id}', [App\Http\Controllers\MicroController::class, 'show'])->name('micros.show');

