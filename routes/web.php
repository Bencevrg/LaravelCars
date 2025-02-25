<?php

use App\Http\Controllers\BodyController;
use App\Http\Controllers\MakerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\ModelController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('makers', MakerController::class);
Route::get('/makers', [MakerController::class, 'index'])->name('makers.index');
Route::get('/makers/create', [MakerController::class, 'create'])->name('makers.create');
Route::get('/makers/{maker}', [MakerController::class, 'show'])->name('makers.show');
Route::get('/makers/{maker}/edit', [MakerController::class, 'edit'])->name('makers.edit');
Route::delete('/makers/{maker}', [MakerController::class, 'destroy'])->name('makers.destroy');
Route::patch('/makers/{body}', [MakerController::class, 'update'])->name('makers.update');

Route::resource('bodies', BodyController::class);
Route::get('/bodies', [BodyController::class, 'index'])->name('bodies.index');
Route::get('/bodies/create', [BodyController::class, 'create'])->name('bodies.create');
Route::get('/bodies/{body}', [BodyController::class, 'show'])->name('bodies.show');
Route::get('/bodies/{body}/edit', [BodyController::class, 'edit'])->name('bodies.edit');
Route::delete('/bodies/{maker}', [BodyController::class, 'destroy'])->name('bodies.destroy');
Route::patch('/bodies/{body}', [BodyController::class, 'update'])->name('bodies.update');
Route::get('/makers/{maker}/fetch-models', [MakerController::class, 'fetchModels'])->name('makers.fetch.models');

Route::resource('models', ModelController::class);
Route::resource('vehicles', VehicleController::class);