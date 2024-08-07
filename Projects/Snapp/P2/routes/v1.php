<?php

use P2\app\Http\Controllers\V1\TransactionController;
use P2\app\Http\Controllers\V1\TransactionReportController;
use Illuminate\Support\Facades\Route;

Route::post('/transfer', TransactionController::class)->name('v1.transfer');
Route::get('/top-users', TransactionReportController::class)->name('v1.top_users');
