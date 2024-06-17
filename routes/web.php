<?php

use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UsuariosController::class, 'index'])->name('usuarios.index');
Route::get('/create', [UsuariosController::class, 'create'])->name('usuarios.create');
Route::post('/store', [UsuariosController::class, 'store'])->name('usuarios.store');
Route::get('/edit/{id}', [UsuariosController::class, 'edit'])->name('usuarios.edit');
Route::put('/update/{id}', [UsuariosController::class, 'update'])->name('usuarios.update');
Route::get('/show/{id}', [UsuariosController::class, 'show'])->name('usuarios.show');
Route::delete('/destroy/{id}',[UsuariosController::class, 'destroy'])->name('usuarios.destroy');