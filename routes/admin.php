<?php

use App\Http\Controllers\AdminController;
use App\Http\Middleware\EnsureUserIsAdmin;
use Illuminate\Support\Facades\Route;

Route::middleware([EnsureUserIsAdmin::class])->group(function() {
    Route::get('admin', [AdminController::class, 'index'])
        ->name('admin');
});