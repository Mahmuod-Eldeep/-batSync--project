<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeePresetController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ThresholdController;
use App\Http\Controllers\FeePercentageController;
use App\Http\Controllers\TransactionController;

Route::apiResource('fee-presets', FeePresetController::class);
Route::apiResource('services', ServiceController::class);
Route::apiResource('thresholds', ThresholdController::class);
Route::apiResource('fee-percentages', FeePercentageController::class);

Route::post('calculate-fee', [TransactionController::class, 'calculateFee']);

