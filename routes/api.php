<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ViajesController;
use App\Http\Controllers\Api\PaisController;


Route::get('/viajes', [ViajesController::class, 'index']);
Route::post('/viajes/store', [ViajesController::class, 'store']);

Route::get('/paises', [PaisController::class, 'index']);
Route::get('/ciudades/{pais}', [PaisController::class, 'findCiudad']);

Route::get('/moneda/{pais}', [PaisController::class, 'findCurrency']);
