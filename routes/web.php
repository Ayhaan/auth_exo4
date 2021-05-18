<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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
//Front
Route::get('/', [AllController::class, 'home'])->name('home');


//Back
Route::get('/admin/dashboard', [AllController::class, 'admin'])->middleware(['auth'])->name('dashboard');
Route::resource('/admin/user', UserController::class)->middleware(['auth', 'isAdmin']);
Route::resource('/admin/role', RoleController::class)->middleware(['auth']);
    
//Auth route
require __DIR__.'/auth.php';    
