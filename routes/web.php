<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// CREATE
Route::get('/input-contact', [ContactController::class, 'input'])->name('input-contact');
Route::post('/create', [ContactController::class, 'store']);

// UPDATE
Route::get('/edit-contact/{id}', [ContactController::class, 'edit']);
Route::patch('/update/{id}', [ContactController::class, 'update']);
