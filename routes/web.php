<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('admin', function () {
        return view('layouts.admin');
    })->name('admin');

    route::get('show_menu_form', [MenuController::class, 'show_form'])->name('menu.form');
    route::post('add_menu', [MenuController::class, 'store'])->name('add.menu');
    route::get('/order_store/{id}', [OrderController::class, 'store'])->name('add.order');
    Route::get('/order_show', [OrderController::class, 'index'])->name('order.index');
    Route::get('/order_update/{order}', [OrderController::class, 'update'])->name('order.update');
});
