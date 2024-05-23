<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('home');
// });

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::group(['middleware' =>'pizza_middleware'], function () {
    Route::get('/pizza/create', [App\Http\Controllers\pizzecontroller::class, 'create'])->name('pizza.create');
    Route::get('/pizza/index', [App\Http\Controllers\pizzecontroller::class, 'index'])->name('pizza.index');
    Route::post('/pizza/store', [App\Http\Controllers\pizzecontroller::class, 'store'])->name('pizza.store');
    Route::get('/pizza/{id}/edit', [App\Http\Controllers\pizzecontroller::class, 'edit'])->name('pizza.edit');
    Route::put('/pizza/{id}/update', [App\Http\Controllers\pizzecontroller::class, 'update'])->name('pizza.update');
    Route::delete('/pizza/{id}/delete', [App\Http\Controllers\pizzecontroller::class, 'destroy'])->name('pizza.delete');
});

Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');