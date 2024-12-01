<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UsuariosController;

Route::get('/usuarios', [UsuariosController::class, 'index']);

 Route::get('/Usuarios/{id}', function(){
     return 'Obteniendo Usuario';
 });

Route::post('/usuarios', [UsuariosController::class, 'store']);

Route::put('/Usuarios/{id}', function(){
     return 'Actulizando Usuario';
 });

 Route::delete('/Usuarios/{id}', function(){
     return 'Eliminando Usuario';
 });
