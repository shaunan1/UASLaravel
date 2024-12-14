<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index']); // List all users
Route::get('/users/{id}', [UserController::class, 'show']); // Get single user
Route::post('/users', [UserController::class, 'store']); // Create user
Route::put('/users/{id}', [UserController::class, 'update']); // Update user
Route::delete('/users/{id}', [UserController::class, 'destroy']); // Delete user

use App\Http\Controllers\Api\ProductController as ApiProductController;


Route::apiResource('products', ApiProductController::class);
Route::apiResource('orders', ApiProductController::class);
Route::apiResource('customers', ApiProductController::class);


