<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Cors;
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
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);


Route::middleware('auth:sanctum')->group( function () {
    Route::get('/all_posts', [PostController::class, 'index'])->middleware(Cors::class);
    Route::get('/public_profile/{id}', [PostController::class, 'pub_profile'])->middleware(Cors::class);
    Route::get('/user_posts', [PostController::class, 'user_posts'])->middleware(Cors::class);
    Route::post('/post', [PostController::class, 'store'])->middleware(Cors::class);
    Route::get('/users/{id}', [UserController::class, 'user']);
    Route::post('/logout', [UserController::class, 'logout']);


});
