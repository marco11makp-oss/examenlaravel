<?php

use App\Http\Controllers\Api\AutorController;
use App\Http\Controllers\Api\LibroController;
use Illuminate\Support\Facades\Route;

Route::apiResource('autores', AutorController::class)->only(['index', 'store']);
Route::apiResource('libros', LibroController::class)->only(['index', 'store']);