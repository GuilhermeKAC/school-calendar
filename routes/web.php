<?php

use App\Http\Controllers\SchoolController;
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

Route::group(['middleware' => 'auth', 'prefix' => 'school', 'as' => 'school'], static function () {
    Route::get('', [SchoolController::class, 'index'])->name('index');
    Route::get('create', [SchoolController::class, 'create'])->name('create');
    Route::post('', [SchoolController::class, 'store'])->name('store');
    Route::get('{deck}', [SchoolController::class, 'show'])->name('show');
    Route::get('{deck}/edit', [SchoolController::class, 'edit'])->name('edit');
    Route::put('{deck}', [SchoolController::class, 'update'])->name('update');
    Route::delete('{deck}', [SchoolController::class, 'destroy'])->name('destroy');
});
