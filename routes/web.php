<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardStaffController;
use App\Http\Controllers\DashboardCategoryController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified']);

Route::get('/dashboard/categories/checkSlug', [DashboardCategoryController::class, 'checkSlug'])->middleware('admin');
Route::resource('/dashboard/categories', DashboardCategoryController::class)->middleware('admin');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('admin');
Route::post('/dashboard/posts/upload', [DashboardPostController::class, 'upload'])->name('posts.upload');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('admin');

Route::resource('/dashboard/staff', DashboardStaffController::class)->middleware('admin');

Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/email/need-verification', [VerificationController::class, 'notice'])->name('verification.notice');

Route::get('/email/verification-notification', [VerificationController::class, 'resend'])->middleware(['auth', 'throttle:6,1'])->name('verification.send');


