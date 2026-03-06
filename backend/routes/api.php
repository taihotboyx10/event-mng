<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitorController;

// Route::get('/health', fn () => response()->json([
//     'status' => 'ok'
// ]));

Route::prefix('visitors')
    ->group(function () {
        // Route::get('/', [VisitorController::class, 'index']);
        Route::post('/', [VisitorController::class, 'store']);
        // Route::get('/{id}', [VisitorController::class, 'show']);
        Route::put('/{id}', [VisitorController::class, 'update']);
        // Route::delete('/{id}', [VisitorController::class, 'destroy']);
    });
