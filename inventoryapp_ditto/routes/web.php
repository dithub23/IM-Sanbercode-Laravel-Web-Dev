<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\CategoriesController;

Route::get('/', [DashboardController::class, 'home']);
Route::get('/daftar', [FormController::class, 'pendaftaran']);
Route::post('/welcome', [FormController::class, 'kirim']);


// CRUD Categories
// C => Create Data
route::get('/categories/create', [CategoriesController::class, 'create']);
route::post('/categories', [CategoriesController::class, 'store']);

// R => Read Data
route::get('/categories', [CategoriesController::class, 'index']);
route::get('/categories/{id}', [CategoriesController::class, 'show']);

// U => Update Data
route::get('/categories/{id}/edit', [CategoriesController::class, 'edit']);
route::put('/categories/{id}', [CategoriesController::class, 'update']);

// D => Delete Data
route::delete('/categories/{id}', [CategoriesController::class, 'destroy']);