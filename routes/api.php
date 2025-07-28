<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('resep', [ApiController::class,'index']);

Route::get('resep/{id}', [ApiController::class,'show']);

Route::post('resep', [ApiController::class,'store']);

Route::put('resep/{id}', [ApiController::class,'update']);

Route::delete('articles/{id}', [ApiController::class,'delete']);