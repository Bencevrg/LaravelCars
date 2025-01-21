<?php

use App\Http\Controllers\MakerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/makers', [MakerController::class, 'index'])->name('makers.index');