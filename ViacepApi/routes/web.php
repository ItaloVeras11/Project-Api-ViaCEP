<?php

use App\Http\Controllers\EnderecoController;
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

Route::get('/', [EnderecoController::class, 'index'])->name('home');

Route::get('/buscar', [EnderecoController::class, 'buscar'])->name('buscar');

Route::get('/adicionar', [EnderecoController::class, 'adicionar'])->name('adicionar');

Route::post('/salvar', [EnderecoController::class, 'salvar'])->name('salvar');