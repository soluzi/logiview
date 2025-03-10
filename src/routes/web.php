<?php

use Illuminate\Support\Facades\Route;
use Soluzi\LogiView\Controllers\LogController;

Route::middleware(config('logiview.middleware'))
    ->prefix(config('logiview.route_prefix'))
    ->group(function () {
        Route::get('/', [LogController::class, 'index'])->name('logiview.index');
        Route::get('/download', [LogController::class, 'download'])->name('logiview.download');
        Route::post('/clear', [LogController::class, 'clear'])->name('logiview.clear');
    });
