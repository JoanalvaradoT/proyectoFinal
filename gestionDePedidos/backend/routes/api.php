<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UsuariosController;
use App\Http\Controllers\Api\ProductosController;

// Rutas para Usuarios
Route::get('/usuarios', [UsuariosController::class, 'index']);
Route::get('/usuarios/{id}', [UsuariosController::class, 'show']);
Route::post('/usuarios', [UsuariosController::class, 'store']);
Route::put('/usuarios/{id}', [UsuariosController::class, 'update']);
Route::delete('/usuarios/{id}', [UsuariosController::class, 'destroy']);
Route::post('/login', [UsuariosController::class, 'login']);

// Rutas para Productos
Route::get('/productos', [ProductosController::class, 'index']);
Route::get('/productos/{id}', [ProductosController::class, 'show']);
Route::post('/productos', [ProductosController::class, 'store']);
Route::put('/productos/{id}', [ProductosController::class, 'update']);
Route::delete('/productos/{id}', [ProductosController::class, 'destroy']);
