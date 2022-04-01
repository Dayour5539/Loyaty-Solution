<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\StatesController;
use App\Http\Controllers\LgasController;
use App\Http\Controllers\CitizensController;
use App\Http\Controllers\WardsController;
use App\Http\Controllers\ReportsController;
use App\Models\Citizen;

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


Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('state', [StatesController::class, 'state'])->name('state');
Route::post('post-state', [StatesController::class, 'postState'])->name('state.post');
Route::get('lga', [LgasController::class, 'lga'])->name('lga');
Route::post('post-lga', [LgasController::class, 'postLga'])->name('lga.post');
Route::get('ward', [WardsController::class, 'ward'])->name('ward');
Route::post('post-ward', [WardsController::class, 'postWard'])->name('ward.post');
Route::get('citizen', [CitizensController::class, 'citizen'])->name('citizen');
Route::post('post-citizen', [CitizensController::class, 'postCitizen'])->name('citizen.post');
Route::get('report', [ReportsController::class, 'ward','lga','citizen','state'])->name('report');
Route::get('rward', [ReportsController::class, 'ward','lga','citizen','state'])->name('report');
