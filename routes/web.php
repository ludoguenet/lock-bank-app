<?php

use App\Http\Controllers\BankController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BankController::class, 'index']);
Route::post('/transfer-funds', [BankController::class, 'transferFunds'])->name('transfer-funds');
