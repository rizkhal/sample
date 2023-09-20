<?php

use App\Http\Controllers\PdfTransformerController;
use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/pdf', PdfTransformerController::class);
Route::get('/map', [TestController::class, 'map']);
Route::get('/relation', [TestController::class, 'relation']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
