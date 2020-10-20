<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/users',[UserController::class,"index"]);
Route::get('/users/form-create',[UserController::class,"create"])->name('user.form');
Route::get('/users/form-edit/{id}',[UserController::class,"edit"])->name('user.formEdit');
Route::patch('/users/update/{id}',[UserController::class,"update"])->name('user.update');
Route::post('users/store',[UserController::class,"store"])->name('user.store');
Route::get('/users/user/{id}',[UserController::class,"show"])->name('user.show');
Route::delete('/users/{id}',[UserController::class,"destroy"])->name('user.destroy');
