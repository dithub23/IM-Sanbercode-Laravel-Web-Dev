<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionsController;

Route::get('/', [DashboardController::class, 'home'])->middleware('auth');

Route::get('/daftar', [FormController::class, 'pendaftaran']);


Route::post('/welcome', [FormController::class, 'kirim']);

Route::get('/profile', [ProfileController::class, 'getProfile'])->middleware('auth');
Route::put('/profile', [ProfileController::class, 'update'])->middleware('auth');
Route::post('/profile', [ProfileController::class, 'store'])->middleware('auth');

Route::middleware(['auth', 'admin'])->group(function () {
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

        }); 

//CRUD ORM (12 Januari 2025)
Route::resource('/products', ProductsController::class);


Route::middleware(['guest'])->group(function () {

        // Authentication Register
        Route::get('/register', [AuthController::class, 'formregister']);
        Route::post('/register', [AuthController::class, 'register']);

        // Authentication Login
        Route::get('/login', [AuthController::class, 'formlogin']);
        Route::post('/login', [AuthController::class, 'login'])->name('login');

        });

// Authentication Logout (logout ada di header)
Route::post('/logout', [AuthController::class, 'logout']);


Route::middleware(['auth'])->group(function () {
        //Get List Transactions
        Route::get('/transactions', [TransactionsController::class, 'index'])->middleware('auth');
        
        // Create Transaction
        Route::get('/transactions/create', [TransactionsController::class, 'create'])->middleware('auth');

        Route::post('/transactions', [TransactionsController::class, 'store'])->middleware('auth');

        // Update Transaction (admin)
        Route::get('/transactions/{id}', [TransactionsController::class, 'edit'])->middleware('auth');
        Route::put('/transactions/{id}', [TransactionsController::class, 'update'])->middleware('auth');
 });