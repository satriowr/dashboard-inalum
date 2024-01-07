<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
//use App\Http\Middleware\CheckUserRole;


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
Route::get('/', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/admin/register', [LoginController::class, 'register_get']);
Route::post('/admin/register/post', [LoginController::class, 'register_post']);

Route::post('/login/post', [LoginController::class, 'login_post']);

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/admin/input', [DashboardController::class, 'inputData']);
Route::post('/admin/input/post', [DashboardController::class, 'inputDataPost']);


// Route::middleware(['checkUserRole'])->group(function () {

// });

