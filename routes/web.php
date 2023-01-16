<?php

use App\Http\Controllers\AgentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin', [AuthController::class, 'index'])->name('backend.login');
Route::post('admin/login', [AuthController::class, 'login'])->name('backend.login.post');

Route::middleware('auth')->group(function(){
    Route::get('admin/dashboard', [AuthController::class, 'dashboard'])->name('admin.dashboard');  
    Route::get('admin/logout', [AuthController::class, 'logout'])->name('backend.logout');

    Route::get('admin/users/agents', [AgentController::class, 'index'])->name('admin.users.agents');
    // Route::get('admin/users/add', [AuthController::class, 'dashboard'])->name('admin.users.add');  
});
