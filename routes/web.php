<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EquipamentoController;
use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'login'])->name('index');
Route::post('/login', [UserController::class, 'logando'])->name('index-login');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register-user', [UserController::class, 'creating'])->name('creating-user');


Route::middleware(['auth'])->group(function () {

    Route::get('/home', [UserController::class, 'home'])->name('home');

    Route::get('/show-clientes', [ClienteController::class, 'showClientes'])->name('showClientes');
    Route::get('/create-new-cliente', [ClienteController::class, 'create'])->name('createCliente');
    Route::post('/creating-cliente', [ClienteController::class, 'creating'])->name('creating_cliente');

    Route::get('/show-equipamentos', [EquipamentoController::class, 'showEquipamentos'])->name('showEquipamentos');
    Route::get('/create-new-equipamento', [EquipamentoController::class, 'create'])->name('createEquipamento');
    Route::post('/creating-equipamento', [EquipamentoController::class, 'creating'])->name('creating-equipamento');


    Route::get('/editar-equipamento', [EquipamentoController::class, 'editar'])->name('editarEquipamento');
    Route::post('/editar-equipamento', [EquipamentoController::class, 'updating'])->name('updateEquipamento');
    Route::get('/excluir-equipamento', [EquipamentoController::class, 'delete'])->name('excluirEquipamento');

    Route::get('/editar-cliente', [ClienteController::class, 'editar'])->name('editarCliente');
    Route::post('/editar-cliente', [ClienteController::class, 'updating'])->name('updateCliente');
    Route::get('/excluir-cliente', [ClienteController::class, 'delete'])->name('excluirCliente');

    Route::post('/delete', [UserController::class, 'destroy'])->name('delete');

    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});
