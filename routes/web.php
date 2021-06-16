<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/input', [App\Http\Controllers\InputController::class, 'index'])->name('input');
Route::post('/input/add', [App\Http\Controllers\InputController::class, 'additem'])->name('additem');
Route::post('/input/del', [App\Http\Controllers\InputController::class, 'Delitem'])->name('Delitem');
Route::post('/InputI', [App\Http\Controllers\InputController::class, 'inputP'])->name('inputP');
Route::get('/Nota', [App\Http\Controllers\NotaController::class, 'index'])->name('nota');
Route::get('/Lunas', [App\Http\Controllers\NotaController::class, 'Lunas'])->name('notaL');
Route::post('/Nota/detail/', [App\Http\Controllers\NotaController::class, 'detail'])->name('detail');
Route::post('/Nota/detaill/', [App\Http\Controllers\NotaController::class, 'detailL'])->name('detailL');
Route::post('/Nota/detail/bayar', [App\Http\Controllers\NotaController::class, 'bayar'])->name('bayar');

Route::get('/homeAdmin', [App\Http\Controllers\HomeAdminController::class, 'index'])->name('homeAdmin');
Route::get('/beban', [App\Http\Controllers\BebanController::class, 'index'])->name('beban');
Route::post('/beban/add', [App\Http\Controllers\BebanController::class, 'beban'])->name('bebanAdd');
Route::get('/proses/jurpos', [App\Http\Controllers\JurposController::class, 'proses'])->name('prosJurnal');
Route::get('/jurnal', [App\Http\Controllers\JurposController::class, 'jurnal'])->name('jurnal');
Route::get('/posting', [App\Http\Controllers\JurposController::class, 'posting'])->name('posting');
Route::get('/labarugi', [App\Http\Controllers\JurposController::class, 'labarugi'])->name('labarugi');

Route::get('/menu', [App\Http\Controllers\InputMenuController::class, 'index'])->name('menu');
Route::post('/menu/add', [App\Http\Controllers\InputMenuController::class, 'create'])->name('addmenu');
Route::post('/menu/Vedit', [App\Http\Controllers\InputMenuController::class, 'Vedit'])->name('Vedit');
Route::post('/menu/edit', [App\Http\Controllers\InputMenuController::class, 'edit'])->name('editmenu');
Route::post('/menu/del', [App\Http\Controllers\InputMenuController::class, 'del'])->name('delmenu');