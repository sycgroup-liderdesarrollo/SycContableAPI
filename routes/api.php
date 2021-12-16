<?php

use App\Http\Controllers\CovenantController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\UserController;
use App\Models\Covenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('user', UserController::class);

Route::apiResource('covenant', CovenantController::class);

Route::apiResource('provider', ProviderController::class);
