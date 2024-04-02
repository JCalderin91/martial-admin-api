<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeltController;
use App\Http\Controllers\AcademyController;
use App\Http\Controllers\AthleteController;
use App\Http\Controllers\Auth\LoginController;

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


Route::post('login', [LoginController::class, 'login']);

Route::apiResource('academies', AcademyController::class);
Route::apiResource('belts', BeltController::class);
Route::apiResource('athletes', AthleteController::class);

Route::middleware(['auth:sanctum'])->group(function () {
});