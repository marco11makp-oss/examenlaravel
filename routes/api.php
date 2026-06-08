<?php

use App\Http\Controllers\Api\LibroController;
use App\Http\Controllers\Api\AutorController;
use Illuminate\Support\Facades\Route;

Route::apiResource('libros', LibroController::class)->only(['index', 'store']);
Route::apiResource('autores', AutorController::class)->only(['index', 'store']);
