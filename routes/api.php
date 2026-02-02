<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController;

Route::middleware('auth:sanctum')->get('/categories', [CategoryController::class, 'index']);
