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

Route::get('/', function () {
    return view('auth.login');
});
    
 
Route::resource('materials','App\Http\Controllers\MaterialController');
Route::resource('fichas','App\Http\Controllers\FichaController');
Route::resource('users', 'App\Http\Controllers\UserController')->middleware('can:users.index')->only(['index','edit','update']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
