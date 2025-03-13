<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RekomendasiController;

Route::middleware('api')->group(function () {
    Route::get('/rekomendasi/{bidang}', [RekomendasiController::class, 'getRekomendasi']);
});
