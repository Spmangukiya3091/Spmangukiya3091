<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BloodController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServiceController;

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

Route::get('/', [HomeController::class, 'index'] );
Route::get('/blood',[BloodController::class, 'index']);
Route::get('/about',[AboutController::class, 'about']);
Route::get('/services',[ServiceController::class, 'index']);
Route::get('/login',[LoginController::class, 'index']);
Route::get('/aboutblood',[AboutController::class, 'aboutblood']);
Route::get('/doneteblood',[AboutController::class, 'doneteblood']);
Route::get('/donateblooduse',[AboutController::class, 'donateblooduse']);
Route::get('/contactus',[ContactusController::class, 'index']);
