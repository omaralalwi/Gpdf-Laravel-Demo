<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', HomeController::class)->name('home');

require __DIR__ . '/web/lexiTranslate.php';
require __DIR__ . '/web/gpdf.php';

