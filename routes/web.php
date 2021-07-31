<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;


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

Route::get('/', [HomeController::class, 'display'])->name('home');

Route::get('/{category}', [CategoryController::class, 'display'])->where('category', '[a-zA-Z]+')->name('category');

Route::get('/{category}/{title}_{id}', [GameController::class, 'display'])->where(['category'=> '[a-z]+','title'=>'[a-z0-9\-]+', 'id'=>'([a-zA-Z0-9]+)$'])->name('game');
