<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Buchhaltungssoftware;
use App\Http\Controllers\PostRequests;

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

Route::get('/login', [Buchhaltungssoftware::class, 'login']);

Route::get('/register', [Buchhaltungssoftware::class, 'register']);

Route::get('/getTransactions/{userId}', [Buchhaltungssoftware::class, 'getTransactions']);

Route::post('/registerRequest', [PostRequests::class, 'RegisterRequest']);

Route::post('/transactionRequest', [PostRequests::class, 'transactionsRequest']);

Route::post('/loginRequest', [PostRequests::class, 'LoginRequest']);

Route::get('/home', function () {
    return view('home');
})->name('home');
