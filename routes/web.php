<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CategoryController;

Route::resource('home', HomeController::class)->only('index');
Route::get('', fn () => to_route('home.index'));

Route::resource('menu', MenuController::class)->only('index', 'show');

Route::get('login', fn () => to_route('auth.create'))->name('login');
Route::resource('auth', AuthController::class)->only('create', 'store', 'delete');

Route::delete('logout', fn () => to_route('auth.destroy'))->name('logout');
Route::delete('auth', [AuthController::class, 'destroy'])->name('auth.destroy');

Route::resource('category', CategoryController::class)->only('index');
Route::resource('item', ItemController::class)->only('index');
