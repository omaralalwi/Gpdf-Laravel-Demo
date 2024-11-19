<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// demo routes for lexi-translate package's examples  https://github.com/omaralalwi/lexi-translate

Route::resource('/posts', PostController::class);


