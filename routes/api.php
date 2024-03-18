<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('/register', [AuthController::class, 'create']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function (){
    Route::get('/user', [AuthController::class, 'index']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::get('/alluser', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'user_id']);
Route::get('/user/delete/{id}', [UserController::class, 'destroy']);