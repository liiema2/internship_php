<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sinhVienController;
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

Route::get('/', function () {
    return view('welcome');

});



Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

  //  Route::get([sinhVienController::class,'index'])->name('index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
   Route::get('dashboard/index', [sinhVienController::class, 'index'])->name('dashboard/index');

    route::resource('sinhvien',sinhVienController::class);
    Route::get('delete/{id}',[sinhVienController::class,'destroy'])->name('sinhvien.delete');
   // route::resource(name: 'sinhvien',controller:App\Http\Controllers\sinhVienController::class)->name('/index');
});


 //Route::get('delete/{id}',[sinhVienController::class,'destroy'])->name('delete.sinhvien');

require __DIR__.'/auth.php';

