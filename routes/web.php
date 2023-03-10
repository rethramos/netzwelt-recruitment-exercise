<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;

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

Route::redirect('/', '/home/index');
Route::get('home/index', [PageController::class, 'home'])
  ->middleware('auth.netzwelt')->name('home');
Route::prefix('account')->name('auth.')->middleware('guest.netzwelt')->group(function () {
    Route::get('/login', [AuthController::class, 'create'])->name('create');
    Route::post('/login', [AuthController::class, 'store'])->name('store');

});