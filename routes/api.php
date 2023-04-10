<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Auth\NFTController;
use App\Http\Controllers\Auth\TransactionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [ProfileController::class,'api'])->name('login');
Route::get('/admin/users',[UserController::class,'index'])->name('userslist');
Route::get('/admin/nft',[NFTController::class,'index'])->name('nftslist');
Route::get('/admin/transaction',[TransactionController::class,'show'])->name('transactiondetails');

