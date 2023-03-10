<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AdminHomeController::class, 'index'])->name('admin.home');
Route::get('/admin', [AdminHomeController::class, 'blank'])->name('admin');

// get post put delete

// route resource category
Route::resource('admin/category', CategoryController::class)->except('show');

