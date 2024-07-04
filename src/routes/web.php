<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;



// categories
//Route::group(['prefix' => 'categories'], function () {
//    Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
//    Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
//    Route::post('/store', [CategoryController::class, 'store'])->name('categories.store');
//    Route::get('/{category}/show', [CategoryController::class, 'show'])->name('categories.show');
//    Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
//    Route::put('/{category}', [CategoryController::class, 'update'])->name('categories.update');
//    Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
//});
Route::resource('categories', CategoryController::class);
