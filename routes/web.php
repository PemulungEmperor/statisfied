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

Route::prefix('/calculator')->group(function () {
    Route::view('/mean', 'meancalculator');
    Route::view('/median', 'mediancalculator');
    Route::view('/mode', 'modecalculator');
    Route::view('/weighted-mean', 'weightedmeancalculator');
    Route::view('/quartiles', 'quartilescalculator');
    Route::view('/interquartiles', 'interquartilecalculator');
    Route::view('/standard-deviation', 'deviationcalculator');
});

Route::view('/', 'home');

