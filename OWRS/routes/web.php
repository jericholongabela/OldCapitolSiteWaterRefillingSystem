<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\Authentication_Controller;
use App\Http\Controllers\profilepageController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\ContainerEditor;
use App\Http\Controllers\PersonalInfoEditor;
use App\Http\Controllers\placeOrderController;
use App\Http\Controllers\viewTransactionController;
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

Route::get('/', [Authentication_Controller::class, 'view'])->name('login');
Route::post('/registration', [Authentication_Controller::class, 'register']);
Route::post('/login', [Authentication_Controller::class, 'login']);
Route::get('/home', [HomepageController::class, 'view'])->name('home')->middleware('loginchecker');
Route::get('/profile', [profilepageController::class, 'view'])->middleware('loginchecker');
Route::get('/logout', [logoutController::class, 'logout']);
Route::post('/edit_container', [ContainerEditor::class, 'update']);
Route::post('/edit_personalin_formation', [PersonalInfoEditor::class, 'update']);
Route::get('/place-order', [placeOrderController::class, 'view']);
Route::post('/placingyourorder', [placeOrderController::class, 'transact']);
Route::get('/viewtransaction', [viewTransactionController::class, 'view']);

