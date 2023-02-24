<?php

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
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SessionsController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/reset', function () {
    return view('reset');
});

Route::get('/',function(){return redirect('sign-in');})->middleware('guest');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
// Route::get('sign-up', [RegisterController::class, 'create'])->middleware('guest')->name('register');
// Route::post('sign-up', [RegisterController::class, 'store'])->middleware('guest');
Route::get('sign-in', [SessionsController::class, 'create'])->middleware('guest')->name('login');
//
// Route::get('sign-in', [SessionsController::class, 'create'])->middleware('guest')->name('login');
// Route::post('sign-in', [SessionsController::class, 'index'])->middleware('guest');
Route::post('verify', [SessionsController::class, 'show'])->middleware('guest');
// Route::post('reset-password', [SessionsController::class, 'update'])->middleware('guest')->name('password.update');


Route::get('verify', function () {
	return view('sessions.password.verify');
})->middleware('guest')->name('verify');
