<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlmacenController;
use App\Models\Almacen;
use App\Http\Middleware\Autenticacion;



/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//********************************Almacen API*************************************/
Route::post('/APIinsertoAlmacen', [AlmacenController::class, 'APIinsertoAlmacen']);
Route::get("/APIlistarAlmacen",[AlmacenController::class,"APIlistarAlmacen"])->middleware(Autenticacion::class);
Route::delete('/APIEliminarAlmacen/{id}', [AlmacenController::class, 'APIEliminarAlmacen']);
Route::post('/APIModificarAlmacen/{id}', [AlmacenController::class, 'APIModificarAlmacen']);

