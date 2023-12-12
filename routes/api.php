<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\MappingController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\WeightController;
use App\Http\Controllers\CurveController;
use App\Http\Controllers\VolumeController;

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

// USER
Route::get('user', [UserController::class, 'index']);
Route::get('user/{id}', [UserController::class,'show']);
Route::post('user', [UserController::class,'create']);
Route::put('user/{id}', [UserController::class,'update']);
Route::delete('user/{id}', [UserController::class,'delete']);

// MAPPING
Route::get('mapping', [MappingController::class, 'index']);
Route::get('mapping/{id}', [MappingController::class, 'show']);
Route::post('mapping', [MappingController::class,'create']);
Route::put('mapping/{id}', [MappingController::class,'update']);
Route::delete('mapping/{id}', [MappingController::class,'delete']);

// SIZE
Route::get('size', [SizeController::class, 'index']);
Route::get('size/{id}', [SizeController::class, 'show']);
Route::post('size', [SizeController::class,'create']);
Route::put('size/{id}', [SizeController::class,'update']);
Route::delete('size/{id}', [SizeController::class,'delete']);

// WEIGHT
Route::get('weight', [WeightController::class, 'index']);
Route::get('weight/{id}', [WeightController::class, 'show']);
Route::post('weight', [WeightController::class,'create']);
Route::put('weight/{id}', [WeightController::class,'update']);
Route::delete('weight/{id}', [WeightController::class,'delete']);

// CURVE
Route::get('curve', [CurveController::class, 'index']);
Route::get('curve/{id}', [CurveController::class, 'show']);
Route::post('curve', [CurveController::class,'create']);
Route::put('curve/{id}', [CurveController::class,'update']);
Route::delete('curve/{id}', [CurveController::class,'delete']);

// VOLUME
Route::get('volume', [VolumeController::class, 'index']);
Route::get('volume/{id}', [VolumeController::class, 'show']);
Route::post('volume', [VolumeController::class,'create']);
Route::put('volume/{id}', [VolumeController::class,'update']);
Route::delete('volume/{id}', [VolumeController::class,'delete']);
