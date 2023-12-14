<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{UserController, MappingController, SizeController, WeightController, CurveController, VolumeController, AuthController};

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

// AUTH
Route::post("login", [AuthController::class,"login"]);

// USER
Route::middleware('auth:api')->get('user', [UserController::class, 'index']);
// Route::get('user/{id}', [UserController::class, 'show']);
Route::get('user/resources', [UserController::class,'resources']);
Route::post('user', [UserController::class, 'create']);
Route::put('user/{id}', [UserController::class, 'update']);
Route::delete('user/{id}', [UserController::class, 'delete']);

// MAPPING
Route::get('mapping', [MappingController::class, 'index']);
Route::get('mapping/{id}', [MappingController::class, 'show']);
Route::post('mapping', [MappingController::class, 'create']);
Route::delete('mapping/{id}', [MappingController::class, 'delete']);

// SIZE
Route::get('size', [SizeController::class, 'index']);
Route::get('size/{id}', [SizeController::class, 'show']);
Route::post('size', [SizeController::class, 'create']);
Route::delete('size/{id}', [SizeController::class, 'delete']);

// WEIGHT
Route::get('weight', [WeightController::class, 'index']);
Route::get('weight/{id}', [WeightController::class, 'show']);
Route::post('weight', [WeightController::class, 'create']);
Route::delete('weight/{id}', [WeightController::class, 'delete']);

// CURVE
Route::get('curve', [CurveController::class, 'index']);
Route::get('curve/{id}', [CurveController::class, 'show']);
Route::post('curve', [CurveController::class, 'create']);
Route::delete('curve/{id}', [CurveController::class, 'delete']);

// VOLUME
Route::get('volume', [VolumeController::class, 'index']);
Route::get('volume/{id}', [VolumeController::class, 'show']);
Route::post('volume', [VolumeController::class, 'create']);
Route::delete('volume/{id}', [VolumeController::class, 'delete']);
