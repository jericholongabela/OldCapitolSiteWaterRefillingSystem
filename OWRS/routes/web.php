<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\Authentication_Controller;
use App\Http\Controllers\profilepageController;
use App\Http\Controllers\placeorderController;
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

Route::get('/', [Authentication_Controller::class, 'view']);
Route::post('/registration', [Authentication_Controller::class, 'register']);
Route::post('/login', [Authentication_Controller::class, 'login']);
Route::get('/home', [HomepageController::class, 'view'])->name('home');
Route::get('/profile', [profilepageController::class, 'view']);
Route::get('/place-order', [placeOrderController::class, 'View']);
