<?php

use App\Http\Controllers\Admin\DashboradController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Admin related routes
Route::group(['as' => 'admin.','prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth','admin']],function(){
    Route::get('dashboard', [DashboradController::class, 'index'])->name('dashboard');
});

// Author related routes
Route::group(['as' => 'author.','prefix' => 'author', 'namespace' => 'Author', 'middleware' => ['auth','author']],function(){
    Route::get('dashboard', [DashboradController::class, 'index'])->name('dashboard');
});