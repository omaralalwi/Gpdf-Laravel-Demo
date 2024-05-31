<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GpdfController;

Route::get('/pdf/generate', [GpdfController::class, 'generatePdf']);
Route::get('/pdf/generate/second', [GpdfController::class, 'generateSecondWayPdf']);
Route::get('/pdf/generate-with-custom-inline-config', [GpdfController::class, 'generateWithCustomCustomConfigs']);
Route::get('/pdf/generate-with-stream', [GpdfController::class, 'generateAndStream']);
Route::get('/pdf/generate-advance-with-fixed-header', [GpdfController::class, 'generateAdvanceWithFixedHeader']);
Route::get('/pdf/generate-with-store', [GpdfController::class, 'generateAndStore']);
Route::get('/pdf/generate-with-store-to-s3', [GpdfController::class, 'generateAndStoreToS3']);
Route::get('/pdf/generate-with-store-multiple-pages', [GpdfController::class, 'generateAndStoreMultiplePages']);
Route::get('/pdf/generate/arabic', [GpdfController::class, 'generatePdfWithArabicContent']);
