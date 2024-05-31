<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GpdfController;

Route::get('/', function () {
    return view('pdf.main');
})->name('main');

Route::get('/pdf/generate', [GpdfController::class, 'generatePdf'])->name('generatePdf');
Route::get('/pdf/generate/second', [GpdfController::class, 'generateSecondWayPdf'])->name('generateSecondWayPdf');
Route::get('/pdf/generate-with-custom-inline-config', [GpdfController::class, 'generateWithCustomInlineConfig'])->name('generateWithCustomInlineConfig');
Route::get('/pdf/generate-and-stream', [GpdfController::class, 'generateAndStream'])->name('generateAndStream');
Route::get('/pdf/generate-advance-with-fixed-header', [GpdfController::class, 'generateAdvanceWithFixedHeader'])->name('generateAdvanceWithFixedHeader');
Route::get('/pdf/generate-with-store', [GpdfController::class, 'generateAndStore'])->name('generateAndStore');
Route::get('/pdf/generate-with-store-to-s3', [GpdfController::class, 'generateAndStoreToS3'])->name('generateAndStoreToS3');
Route::get('/pdf/generate-with-store-multiple-pages', [GpdfController::class, 'generateAndStoreMultiplePages'])->name('generateAndStoreMultiplePages');
Route::get('/pdf/generate/arabic', [GpdfController::class, 'generatePdfWithArabicContent'])->name('generatePdfWithArabicContent');
