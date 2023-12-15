<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/todos', [TodosController::class, 'index']) -> name('index');
Route::post('/todos', [TodosController::class, 'store'])->name('store');
Route::patch('/todos/{todo}', [TodosController::class, 'update'])->name('update');
Route::delete('/todos/{todo}', [TodosController::class, 'destroy'])->name('destroy');