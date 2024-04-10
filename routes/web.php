<?php

use App\Http\Controllers\ExampleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/page', [ExampleController::class, 'index'])->name('page');

Route::get('/example', [ExampleController::class, 'example'])->name('example');

