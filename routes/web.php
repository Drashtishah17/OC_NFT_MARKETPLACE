<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Auth\NFTController;
use App\Http\Controllers\Auth\TransactionController;
use App\Http\Controllers\Auth\ProfileController;


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

Route::redirect('/', 'login');

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});

Route::controller(UserController::class)->group(function() {
    Route::get('/admin/users','index')->name('userslist');
    Route::delete('/user-delete/{user_id}','delete')->name('user-delete');
    Route::get('/view-user/{user_id}','viewusers')->name('view-user');
});

Route::controller(NFTController::class)->group(function() {
    Route::get('/admin/nft','index')->name('nftslist');
    Route::get('/view-nft/{nft_id}','viewnfts')->name('view-nft');
    Route::delete('/nft-delete/{nft_id}','delete')->name('nft-delete');
});

Route::controller(TransactionController::class)->group(function() {
    Route::get('/admin/transaction','show')->name('transactiondetails');
    Route::delete('/transaction-delete/{transaction_id}','delete')->name('transaction-delete');
});

Route::controller(ProfileController::class)->group(function() {
    Route::get('/admin/profile','index')->name('adminsprofile');
    Route::post('/admin/profile','index')->name('adminsprofile');
    Route::get('/role-edit/{user_id}','edit')->name('role-edit');
    Route::put('/role-update/{user_id}','update')->name('role-update');
});

