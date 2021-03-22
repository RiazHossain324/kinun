<?php

use App\Http\Controllers\NavController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [NavController::class, "nav"]);
Route::get('/shop', [NavController::class, "nav1"]);
Route::get('/blog', [NavController::class, "nav3"]);
Route::get('/single-product', [NavController::class, "single_product"]);
Route::get('/authentication-account-settings', [NavController::class, "acs"]);
Route::get('/my-account', [NavController::class, "myAccount"]);

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
