<?php

use App\Http\Controllers\Cosmology\ActivityListController;
use App\Http\Controllers\Cosmology\ActivityController;
use App\Http\Controllers\CosmologyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('cosmology')->group(function () {
    Route::get('activities', ActivityListController::class)
        ->name('cosmology.activities');

    Route::get('activity/{id}', ActivityController::class)
        ->name('cosmology.activities.by.organisation');
});
