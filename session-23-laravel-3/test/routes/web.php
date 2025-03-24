<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClintHomeController;
use App\Http\Controllers\ClintMajorController;
use App\Http\Controllers\ClintDoctorsController;
use App\Http\Controllers\ClintBookingController;
use App\Http\Controllers\ClintLoginController;
use App\Http\Controllers\ClintRegisterController;

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

Route::get('/', [ClintHomeController::class,"index"])->name("clint-home");
Route::get('/majors' , [ClintMajorController::class,"index"])->name("clint-majors");
Route::get('/doctors' , [ClintDoctorsController::class,"index"])->name("clint-doctors");
Route::get('/booking/{id}' , [ClintBookingController::class,"index"])->name("clint-booking");
Route::get('/login' , [ClintLoginController::class,"index"])->name("clint-login");
Route::get('/register' , [ClintRegisterController::class,"index"])->name("clint-register");
