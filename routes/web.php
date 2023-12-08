<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\MappingController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\WeightController;
use App\Http\Controllers\CurveController;
use App\Http\Controllers\VolumeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('user', [UserController::class, 'index']);
Route::get('user/{id}', [UserController::class,'show']);

Route::get('mapping', [MappingController::class, 'index']);
Route::get('mapping/{id}', [MappingController::class, 'show']);

Route::get('size', [SizeController::class, 'index']);
Route::get('size/{id}', [SizeController::class, 'show']);

Route::get('weight', [WeightController::class, 'index']);
Route::get('weight/{id}', [WeightController::class, 'show']);

Route::get('curve', [CurveController::class, 'index']);
Route::get('curve/{id}', [CurveController::class, 'show']);

Route::get('volume', [VolumeController::class, 'index']);
Route::get('volume/{id}', [VolumeController::class, 'show']);


