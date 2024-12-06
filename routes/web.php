<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeePresetController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ThresholdController;
use App\Http\Controllers\FeePercentageController;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('fee-presets', FeePresetController::class);
Route::resource('services', ServiceController::class);
Route::resource('thresholds', ThresholdController::class);
Route::resource('fee-percentages', FeePercentageController::class);

Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');
Route::post('/calculate-fee', [TransactionController::class, 'calculateFee'])->name('calculate.fee');

