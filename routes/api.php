<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlmacenController;
use App\Http\Controllers\ProductoController;
use App\Models\Almacen;
use App\Models\Producto;
use App\Http\Middleware\Autenticacion;


Route::post('/Almacen', [AlmacenController::class, 'Insertar'])->middleware(Autenticacion::class);
Route::get("/Almacen",[AlmacenController::class,"Listar"])->middleware(Autenticacion::class);
Route::delete('/Almacen/{id}', [AlmacenController::class, 'Eliminar'])->middleware(Autenticacion::class);
Route::post('/Almacen/{id}', [AlmacenController::class, 'Modificar'])->middleware(Autenticacion::class);

Route::post('/Producto', [AlmacenController::class, 'Insertar'])->middleware(Autenticacion::class);
Route::get("/Producto",[AlmacenController::class,"Listar"])->middleware(Autenticacion::class);
Route::delete('/Producto/{id}', [AlmacenController::class, 'Eliminar'])->middleware(Autenticacion::class);
Route::post('/Producto/{id}', [AlmacenController::class, 'Modificar'])->middleware(Autenticacion::class);