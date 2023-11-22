<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(HumanController::class)->group(function){
    Route::get('/humans', 'index')->name('humans.index');
    Route::get('/humans{type}', 'create(type)'->name('humans.create');
    Route::post('/humans', 'store')->name('humans.store');
}

