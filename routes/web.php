<?php

use App\Http\Controllers\SchoolController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth', 'prefix' => 'user', 'as' => 'user.'], static function () {
    Route::get('', [UserController::class, 'index'])->name('index');
    Route::get('create', [UserController::class, 'create'])->name('create');
    Route::post('', [UserController::class, 'store'])->name('store');
    Route::get('{user}', [UserController::class, 'show'])->name('show');
    Route::get('{user}/edit', [UserController::class, 'edit'])->name('edit');
    Route::put('{user}', [UserController::class, 'update'])->name('update');
    Route::delete('{user}', [UserController::class, 'destroy'])->name('destroy');
});

Route::group(['middleware' => 'auth', 'prefix' => 'school', 'as' => 'school.'], static function () {
    Route::get('', [SchoolController::class, 'index'])->name('index');
    Route::get('create', [SchoolController::class, 'create'])->name('create');
    Route::post('', [SchoolController::class, 'store'])->name('store');
    Route::get('{}', [SchoolController::class, 'show'])->name('show');
    Route::get('{}/edit', [SchoolController::class, 'edit'])->name('edit');
    Route::put('{}', [SchoolController::class, 'update'])->name('update');
    Route::delete('{}', [SchoolController::class, 'destroy'])->name('destroy');
});

Route::group(['middleware' => 'auth', 'prefix' => 'teacher', 'as' => 'teacher.'], static function () {
    Route::get('', [TeachersController::class, 'index'])->name('index');
    Route::get('create', [TeachersController::class, 'create'])->name('create');
    Route::post('', [TeachersController::class, 'store'])->name('store');
    Route::get('{}', [TeachersController::class, 'show'])->name('show');
    Route::get('{}/edit', [TeachersController::class, 'edit'])->name('edit');
    Route::put('{}', [TeachersController::class, 'update'])->name('update');
    Route::delete('{}', [TeachersController::class, 'destroy'])->name('destroy');
});
