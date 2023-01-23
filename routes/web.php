<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\User;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin', function() {
    if(Auth::user()->role_id == 2 || Auth::user()->role_id == 3){
        return view('admin');
    }
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('admin');

Route::get('/edit/{id}',[UserController::class, 'edit'])->name('user.edit');
Route::get('update/{id}',[UserController::class, 'update'])->name('user.update');
Route::post('delete/{id}', [UserController::class, 'destroy'])->name('user.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
