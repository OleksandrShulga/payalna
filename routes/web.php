<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::match(['get', 'post'], '/register', [UserController::class, 'register']);
Route::match(['get', 'post'],'/login', [UserController::class, 'login']);
Route::match(['get', 'post'], '/article', [UserController::class, 'article']);
Route::match(['get', 'post'], '/create', [UserController::class, 'create']);
Route::match(['get', 'post'], '/read', [UserController::class, 'read']);
Route::match(['get', 'post'], '/update', [UserController::class, 'update']);
Route::match(['get', 'post'], '/delete', [UserController::class, 'delete']);
Route::view('/api', 'api');
Route::view('/centralpage', 'centralpage');
