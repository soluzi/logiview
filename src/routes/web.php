<?php

use Illuminate\Support\Facades\Route;
use Soluzi\LogiView\Controllers\LogController;

Route::middleware(['web', 'auth'])->prefix('logiview')->group(function () {
    Route::get('/', [LogController::class, 'index'])->name('logiview.index');
    Route::get('/download', [LogController::class, 'download'])->name('logiview.download');
    Route::post('/clear', [LogController::class, 'clear'])->name('logiview.clear');
});
