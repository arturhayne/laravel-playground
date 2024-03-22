<?php

use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Route;

Route::prefix('/chat')->group(function() {
    Route::get('/', [ChatController::class, 'index'])->name('chat.index');
    Route::get('/{id}', [ChatController::class, 'show'])->name('chat.show');
    Route::put()
});
