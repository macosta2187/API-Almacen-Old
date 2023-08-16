<?php

use App\Http\Controllers\AlmacenController;
use App\Http\Controllers\LoteController;
use App\Http\Controllers\ProductoController;
use App\Http\Middleware\Autenticacion;
use Illuminate\Support\Facades\Route;

Route::post('/Almacen', [AlmacenController::class, 'Insertar'])->middleware(Autenticacion::class);
Route::get("/Almacen", [AlmacenController::class, "Listar"])->middleware(Autenticacion::class);
Route::delete('/Almacen/{id}', [AlmacenController::class, 'Eliminar'])->middleware(Autenticacion::class);
Route::post('/Almacen/{id}', [AlmacenController::class, 'Actualizar'])->middleware(Autenticacion::class);

Route::post('/Producto', [ProductoController::class, 'Insertar'])->middleware(Autenticacion::class);
Route::get("/Producto", [ProductoController::class, "Listar"])->middleware(Autenticacion::class);
Route::delete('/Producto/{id}', [ProductoController::class, 'Eliminar'])->middleware(Autenticacion::class);
Route::post('/Producto/{id}', [ProductoController::class, 'Actualizar'])->middleware(Autenticacion::class);

Route::post('/Lote', [LoteController::class, 'Insertar'])->middleware(Autenticacion::class);
Route::get("/Lote", [LoteController::class, "Listar"])->middleware(Autenticacion::class);
Route::delete('/Lote/{id}', [LoteController::class, 'Eliminar'])->middleware(Autenticacion::class);
Route::post('/Lote/{id}', [LoteController::class, 'Actualizar'])->middleware(Autenticacion::class);
