<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GpdfController;

//Route::get('/', function () {
//    return view('dashboard.main');
//})->name('home');

Route::get('/', HomeController::class)->name('home');

Route::prefix('/pdf')->group(function () {

    Route::get('/generate', [GpdfController::class, 'generatePdf'])->name('generatePdf');
    Route::get('/generate-with-images', [GpdfController::class, 'generatePdfWithImages'])->name('generatePdfWithImages');
    Route::get('/generate/second', [GpdfController::class, 'generateSecondWayPdf'])->name('generateSecondWayPdf');
    Route::get('/generate-with-custom-inline-config', [GpdfController::class, 'generateWithCustomInlineConfig'])->name('generateWithCustomInlineConfig');
    Route::get('/generate-and-stream', [GpdfController::class, 'generateAndStream'])->name('generateAndStream');
    Route::get('/generate-advance-with-fixed-header', [GpdfController::class, 'generateAdvanceWithFixedHeader'])->name('generateAdvanceWithFixedHeader');
    Route::get('/generate-with-store', [GpdfController::class, 'generateAndStore'])->name('generateAndStore');
    Route::get('/generate-with-store-to-s3', [GpdfController::class, 'generateAndStoreToS3'])->name('generateAndStoreToS3');
    Route::get('/generate-with-store-multiple-pages', [GpdfController::class, 'generateAndStoreMultiplePages'])->name('generateAndStoreMultiplePages');
    Route::get('/generate/arabic', [GpdfController::class, 'generatePdfWithArabicContent'])->name('generatePdfWithArabicContent');

});
